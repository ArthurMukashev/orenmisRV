<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function login(LoginRequest $request){
        $validation = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
    }
}
