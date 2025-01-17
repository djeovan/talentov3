<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
     // Exibe o formulário de registro
     public function showRegistrationForm()
     {
         return view('admin.dashboard');
     }
 
     // Processa o registro de usuário
     public function register(Request $request)
     {
         // Validação dos dados do formulário
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|unique:users,email',
             'password' => 'required|string|min:8|confirmed',
         ]);
 
         // Criação do novo usuário
         User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => Hash::make($request->password),
             
         ]);
 
         // Redirecionar após o registro
         return redirect()->route('admin.dashboard')->with('success', 'Usuário registrado com sucesso! Faça login para acessar.');
         
     }
     
}
