<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\SavedPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexNewsController extends Controller
{
    public function show()
    {
        $savedPosts = SavedPost::where('user_id', Auth::id())->get();

        $newsList = News::orderBy('created_at', 'desc')->limit(10)->get();
        return view('news.index', [
            'newsList' => $newsList,
            'savedPosts' => $savedPosts
        ]);
    }
}
