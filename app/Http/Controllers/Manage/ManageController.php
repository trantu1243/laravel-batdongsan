<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    public function show(){
        $id =  Auth::id();
        $realStates = Property::where('user_id', $id)->get();
        $totalCount = Property::where('user_id', $id)->count();
        return view('manage.index', [
            'realStates' => $realStates,
            'totalCount' => $totalCount
        ]);
    }
}
