<?php

namespace App\Http\Controllers\Admin\Batdongsan;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;

class BatdongsanDetailController extends Controller
{
    public function show($id){
        $realState = Property::with(['user', 'images'])->find($id);
        $images = PropertyImage::where('property_id', $realState->id)->get();
        return view('admin.batdongsan.detail',[
            'realState' => $realState,
            'images' => $images
        ]);
    }

    public function accept($id){
        $realState = Property::find($id);
        $realState->post_status = 'active';
        $realState->save();
        toastr()->success('Duyệt thành công');
        return back();
    }
}
