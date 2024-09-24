<?php

namespace App\Http\Controllers\RealState;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RealStateController extends Controller
{
    public function show($id){
        $realState = Property::with('images')->find($id);
        Log::info(json_encode($realState));
        return view('batdongsan.index', [
            'realState' => $realState,
            'images' => $realState->images
        ]);
    }
}
