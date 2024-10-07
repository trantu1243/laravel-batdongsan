<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class DetailNewsController extends Controller
{
    public function show($id){
        $news = News::find($id);
        $newsList = News::orderBy('created_at', 'desc')->limit(10)->get();
        return view('news.detail', [
            'news' => $news,
            'newsList' => $newsList
        ]);
    }
}
