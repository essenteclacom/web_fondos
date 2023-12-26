<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CycUsdFixedRentController extends Controller {
    public function __invoke() {
        return view('cycusdfixedrent');
    }
}