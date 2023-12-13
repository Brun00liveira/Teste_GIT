<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroPerfilController extends Controller
{
    public function index(){
        return view('cadastro-perfil');
    }
}
