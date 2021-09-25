<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_domicilio;


class UserDomiciliosController extends Controller
{
    public function listarDomicilios(){
    
        $domicilios = user_domicilio::all(); 
        
        return view('domicilios.index', compact('domicilios'));
        //return view('users.index', compact('users')); 
    
    }
}
