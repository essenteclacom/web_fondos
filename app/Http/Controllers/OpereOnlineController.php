<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpereOnlineController extends Controller {
    public function __invoke() {
        return view('opereonline');
    }
}