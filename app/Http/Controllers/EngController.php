<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EngController extends Controller {
    public function __invoke() {
        $url = Request()->headers->get('referer');
        $urlExplode = explode("/", $url);
        $count = count($urlExplode);
        if ($count > 0) {
            $curretPage = end($urlExplode);
        }
        switch ($curretPage) {
            case "inicio":
                return redirect('home');
                break;
            case "cycrentamixta":
                return redirect('cycmixrent');
                break;
            case "cycdolaresrentafija":
                return redirect('cycusdfixedrent');
                break;
            case "cycpesosrentafija":
                return redirect('cycpesosfixedrent');
                break;
            case "cycliquidez":
                return redirect('cycliquid');
                break;
            case "normativas":
                return redirect('regulations');
                break;
            case "seleccionartipocuenta":
                return redirect('selectaccounttype');
                break;
        }
    }
}
