<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function show(){

        $newRealStates = Property::with(['images' => function ($query) {
                $query->limit(1);
            }])
            ->where('post_status', 'active')
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();
        Log::info(json_encode($newRealStates[0]->images));
        return view('index', [
            'newRealStates' => $newRealStates
        ]);
    }
}
