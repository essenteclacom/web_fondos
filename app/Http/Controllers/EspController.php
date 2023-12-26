<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspController extends Controller {
    public function __invoke() {
        $url = Request()->headers->get('referer');
        $urlExplode = explode("/", $url);
        $count = count($urlExplode);
        if ($count > 0) {
            $curretPage = end($urlExplode);
        }
        switch ($curretPage) {
            case "home":
                return redirect('inicio');
                break;
            case "cycliquid":
                return redirect('cycliquidez');
                break;
            case "cycdolaresrentafija":
                return redirect('cycusdfixedrent');
                break;
            case "cycmixrent":
                return redirect('cycrentamixta');
                break;
            case "regulations":
                return redirect('normativas');
                break;
            case "cycpesosfixedrent":
                return redirect('cycpesosrentafija');
                break;
            case "selectaccounttype":
                return redirect('seleccionartipocuenta');
                break;
        }
    }
}
