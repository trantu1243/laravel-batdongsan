<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\SavedPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailNewsController extends Controller
{
    public function show($id)
    {
        $savedPosts = SavedPost::where('user_id', Auth::id())->get();
        $news = News::find($id);
        $newsList = News::orderBy('created_at', 'desc')->limit(10)->get();
        return view('news.detail', [
            'news' => $news,
            'newsList' => $newsList,
            'savedPosts' => $savedPosts
        ]);
    }
}
