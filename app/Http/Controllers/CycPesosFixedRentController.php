<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CycPesosFixedRentController extends Controller {
    public function __invoke() {
        return view('cycpesosfixedrent');
    }
}