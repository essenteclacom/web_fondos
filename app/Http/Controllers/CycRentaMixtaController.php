<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CycRentaMixtaController extends Controller {
    public function __invoke() {
        return view('cycrentamixta');
    }
}