<?php

namespace App\Http\Controllers\Admin\Batdongsan;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class BatdongsanDetailController extends Controller
{
    public function show($id){
        $realState = Property::with(['user', 'images'])->find($id);
        return view('admin.batdongsan.detail',[
            'realState' => $realState
        ]);
    }
}
