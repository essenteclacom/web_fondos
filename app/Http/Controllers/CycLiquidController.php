<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CycLiquidController extends Controller {
    public function __invoke() {
        return view('cycliquid');
    }
}