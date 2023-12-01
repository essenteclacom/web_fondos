<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CycLiqUIDEZController extends Controller {
    public function __invoke() {
        return view('cycliquidez');
    }
}