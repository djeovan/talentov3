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
         return view('admin.register');
     }
 
     // Processa o registro de usuário
     public function register(Request $request)
     {
         // Validação dos dados do formulário
         $request->validate([
             'name'               => 'required|string|max:255',
             'email'              => 'required|email|unique:users,email',
             'password'           => 'required|string|min:8|confirmed',
             'role'               => 'required|in:admin,user', // Validação para garantir que role seja 'admin' ou 'user'
             'formacao'           => 'required|string|max:100',
             'nome_formacao'      => 'required|string|max:100',
             'especializacoes'    => 'required|string|max:100',
             'cursos'             => 'required|string|max:100',
             'formacao_academica' => 'required|string|max:100',
             'curriculo'          => 'required|string|max:100',
             //'nascimento'         => 'required|date_format:d/m/Y',  // Valida o formato dd/mm/yyyy
             
         ]);
 
         // Criação do novo usuário
         User::create([
             'name'               => $request->name,
             'email'              => $request->email,
             'password'           => Hash::make($request->password),
             'role'               => $request->role, // Definindo o papel como admin ou user
             'formacao'           => $request->formacao,
             'nome_formacao'      => $request->nome_formacao,
             'especializacoes'    => $request->especializacoes,
             'cursos'             => $request->especializacoes,
             'formacao_academica' => $request->formacao_academica,
             'curriculo'          => $request->curriculo,
             'nascimento' =>$request->nascimento,
         ]);
       
         // Redirecionar após o registro
         return redirect()->route('admin.dashboard')->with('success', 'Usuário registrado com sucesso! Faça login para acessar.');
         
     }
     
}
