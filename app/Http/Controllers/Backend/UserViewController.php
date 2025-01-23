<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserViewController extends Controller
{
    public function index()
    {
        $usuarios = User::all();

        return view('admin.visualizacaoUsers', compact('usuarios'));

    }
}
