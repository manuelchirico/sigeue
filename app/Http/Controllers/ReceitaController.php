<?php



namespace App\Http\Controllers;

use App\Models\Receita;
use App\Models\Reserva;
use App\Models\Ginasio;
use App\Models\Campo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class ReceitaController extends Controller
{
    public function index()
    {






        
        // Obtém os meses do banco de dados de reservas, ginásios e campos
        $months = Reserva::select(DB::raw("DATE_FORMAT(data_entrada, '%Y-%m') as month"))
            ->union(Ginasio::select(DB::raw("DATE_FORMAT(data_evento, '%Y-%m') as month")))
            ->union(Campo::select(DB::raw("DATE_FORMAT(data_evento, '%Y-%m') as month")))
            ->groupBy('month')
            ->pluck('month');

        // Inicializa um array para armazenar os dados
        foreach ($months as $month) {
            $reserva = Reserva::where(DB::raw("DATE_FORMAT(data_entrada, '%Y-%m')"), $month)->sum('valor_total');
            $ginasio = Ginasio::where(DB::raw("DATE_FORMAT(data_evento, '%Y-%m')"), $month)->sum('pagamento');
            $campo = Campo::where(DB::raw("DATE_FORMAT(data_evento, '%Y-%m')"), $month)->sum('pagamento');

            Receita::updateOrCreate(
                ['mes' => $month],
                [
                    'reserva' => $reserva,
                    'ginasio' => $ginasio,
                    'campo' => $campo,
                ]
            );
        }

        $receitas = Receita::all();

        // Calcula os totais
        $totalCasas = $receitas->sum('reserva');
        $totalGinasio = $receitas->sum('ginasio');
        $totalCampo = $receitas->sum('campo');
        $totalEntrada = $receitas->sum('total_entrada');

        return view('receita.index', compact('receitas', 'totalCasas', 'totalGinasio', 'totalCampo', 'totalEntrada'));
    }



    public function edit($mes)
    {
        $receita = Receita::where('mes', $mes)->first();
        return view('receita.edit', compact('receita'));
    }

    public function update(Request $request, $mes)
    {
        $request->validate([
            'saidas' => 'required|numeric|min:0',
        ]);

        $receita = Receita::where('mes', $mes)->first();
        $receita->saidas = $request->input('saidas');
        $receita->save();

        return redirect()->route('receita.index')->with('success', 'Saídas atualizadas com sucesso');
    }

  
    
  
        public function generatePDF(Request $request)
        {
            $receitas = Receita::query();
            if ($request->has('month')) {
                $receitas->where('mes', $request->month);
            }
            $receitas = $receitas->get();
    
            // Configuração do Dompdf
            $options = new Options();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', true);
            $options->set('defaultFont', 'Arial');
    
            // Inicialização do Dompdf
            $dompdf = new Dompdf($options);
    
            // Carrega a view do PDF
            $pdfContent = view('receita.pdf', compact('receitas'))->render();
    
            // Carrega o HTML no Dompdf
            $dompdf->loadHtml($pdfContent);
    
            // Renderiza o PDF
            $dompdf->render();
    
            // Retorna a resposta com o PDF para download
            return $dompdf->stream('relatorio_receitas.pdf');
        }
    
    





}
