<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\SavedPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    public function show()
    {
        $savedPosts = SavedPost::where('user_id', Auth::id())->with(['user', 'post'])->get();
        $news = News::paginate(24);
        return view('admin.news.index', [
            'news' => $news,
            'savedPosts' => $savedPosts
        ]);
    }
}
