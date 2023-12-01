<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CycDolaresRentaFijaController extends Controller {
    public function __invoke() {
        return view('cycdolaresrentafija');
    }
}