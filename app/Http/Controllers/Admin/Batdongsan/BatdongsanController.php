<?php

namespace App\Http\Controllers\Admin\Batdongsan;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BatdongsanController extends Controller
{
    public function show(){
        $realStates = Property::paginate(15);
        return view('admin.batdongsan.index', [
            'realStates' => $realStates
        ]);
    }

    public function destroy($id){
        $realState = Property::find($id);
        $images = PropertyImage::where('property_id', $realState->id)->get();

        foreach ($images as $image){
            Storage::delete($image->image_url);
            $image->delete();
        }

        $realState->delete();
        toastr()->success('Xóa thành công');
        return back();
    }
}
