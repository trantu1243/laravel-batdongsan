<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexNewsController extends Controller
{
    public function show(){
        $newsList = News::orderBy('created_at', 'desc')->limit(10)->get();
        return view('news.index', [
            'newsList' => $newsList
        ]);
    }
}
