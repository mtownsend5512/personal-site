<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zttp\Zttp;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Zttp::withHeaders([
            'api-key' => env('DEV_TO_API_KEY')
        ])->get('https://dev.to/api/articles/me/all');

        abort_unless($response->isOk(), 404);

        $articles = data_wrapper($response->json());

        return view('articles', compact('articles'));
    }
}
