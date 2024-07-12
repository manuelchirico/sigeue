<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Receita;
use App\Models\Reserva;
use Illuminate\Support\Facades\DB;

class PopulateReceitaTable extends Command
{
    protected $signature = 'populate:receita';
    protected $description = 'Popula a tabela receita com os dados de reserva mensais';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $months = [
            'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
            'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ];

        foreach ($months as $index => $month) {
            $startOfMonth = now()->month($index + 1)->startOfMonth();
            $endOfMonth = now()->month($index + 1)->endOfMonth();

            $totalReserva = Reserva::whereBetween('data_entrada', [$startOfMonth, $endOfMonth])
                ->sum('valor_total');

            Receita::updateOrCreate(
                ['mes' => $month],
                ['reserva' => $totalReserva]
            );
        }

        $this->info('Tabela receita populada com sucesso!');
    }
}
