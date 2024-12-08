<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Property;
use App\Models\SavedPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function show()
    {
        $savedPosts = SavedPost::where('user_id', Auth::id())->get();



        $newRealStates = Property::with(['images' => function ($query) {
            $query->limit(1);
        }])
            ->where('post_status', 'active')
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();
        return view('index', [
            'newRealStates' => $newRealStates,
            'savedPosts' => $savedPosts
        ]);
    }
}
