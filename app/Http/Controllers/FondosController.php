<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FondosController extends Controller {
    public function __invoke() {
        return view('fondos');
    }
}