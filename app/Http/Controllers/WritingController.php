<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Zttp\Zttp;

class WritingController extends Controller
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

        abort_unless($response->isOk(), 500);

        $articles = data_wrapper($response->json())->toCollection()->reject(function ($article) {
            return !$article->published;
        });

        return view('writing', compact('articles'));
    }
}
