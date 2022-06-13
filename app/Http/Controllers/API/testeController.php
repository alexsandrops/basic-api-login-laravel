<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class testeController extends Controller
{
    public function index()
    {
        $teste = User::get();
        return response($teste, 201);
    }
}
