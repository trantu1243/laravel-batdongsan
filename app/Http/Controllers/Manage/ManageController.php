<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\SavedPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    public function show()
    {
        $savedPosts = SavedPost::where('user_id', Auth::id())->get();
        $id =  Auth::id();
        $name = Auth::user()->name;
        $realStates = Property::where('user_id', $id)->get();
        $totalCount = Property::where('user_id', $id)->count();
        return view('manage.index', [
            'name' => $name,
            'realStates' => $realStates,
            'totalCount' => $totalCount,
            'savedPosts' => $savedPosts
        ]);
    }
}
