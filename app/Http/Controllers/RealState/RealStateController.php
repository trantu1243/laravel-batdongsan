<?php

namespace App\Http\Controllers\RealState;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\SavedPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RealStateController extends Controller
{
    public function show($id)
    {
        $savedPosts = SavedPost::where('user_id', Auth::id())->get();
        $realState = Property::with('images')->find($id);
        Log::info(json_encode($realState));
        return view('batdongsan.index', [
            'realState' => $realState,
            'images' => $realState->images,
            'savedPosts' => $savedPosts
        ]);
    }
}
