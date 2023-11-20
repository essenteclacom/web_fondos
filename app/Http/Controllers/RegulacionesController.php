<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegulacionesController extends Controller {
    public function __invoke() {
        return view('regulaciones');
    }
}