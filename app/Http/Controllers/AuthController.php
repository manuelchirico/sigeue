<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Exibir o formulário de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Processar a tentativa de login
    public function login(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);
    
        // Verificar se o usuário existe
        $user = usuario::where('email', $request->email)->first();
        
        if ($user) {
            // Se o usuário existir, autenticar e redirecionar para a tela de boas-vindas
            Auth::login($user);
            return redirect()->route('welcome.index');
        }
        
        // Retornar erro se as credenciais não forem válidas
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não são válidas.',
        ])->onlyInput('email');
    }

    // Logout do usuário
    public function logout()
    {
        Auth::logout();

        // Redirecionar para a tela de login após logout
        return redirect()->route('login');
    }
}
