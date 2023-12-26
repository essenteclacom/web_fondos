<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CycMixRentController extends Controller {
    public function __invoke() {
        return view('cycmixtrent');
    }
}