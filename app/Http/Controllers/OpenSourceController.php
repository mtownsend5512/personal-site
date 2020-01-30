<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zttp\Zttp;

class OpenSourceController extends Controller
{
    public function __invoke()
    {
        $response = Zttp::get('https://packagist.org/packages/list.json?vendor=mtownsend');

        abort_unless($response->isOk(), 500);

        $packages = $response->json()['packageNames'];

    	return view('open-source', compact('packages'));
    }
}
