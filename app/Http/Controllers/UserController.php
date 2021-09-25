<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function listarUsuarios(){
    
        //$users = User::all(); 
        $users = User::paginate(25);
    
        return view('users.index', compact('users')); 
    }
    
    
}
