<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbrirCuentaController extends Controller {
    public function __invoke() {
        return view('abrircuenta');
    }
}