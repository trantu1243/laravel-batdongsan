<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(){
        $news = News::paginate(24);
        return view('admin.news.index', [
            'news' => $news
        ]);
    }

}
