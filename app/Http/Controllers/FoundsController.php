<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoundsController extends Controller {
    public function __invoke() {
        return view('founds');
    }
}