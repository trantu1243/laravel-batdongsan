<?php

namespace App\Http\Controllers\RealState;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealStateRequest;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostRealStateController extends Controller
{
    public function show(){
        $user = Auth::user();
        return view('batdongsan.post', [
            'user' => $user
        ]);
    }

    public function create(RealStateRequest $request){
        $realState = Property::create([
            'user_id' => Auth::id(),
            'property_type' => $request->input('property_type'),
            'property_category' => $request->input('property_category'),
            'city' => $request->input('city'),
            'district' => $request->input('district'),
            'commune' => $request->input('commune'),
            'detailAddress' => $request->input('detailAddress'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'area' => $request->input('area'),
            'price' => str_replace('.', '', $request->input('price')),
            'price_unit' => $request->input('price_unit'),
            'legal_documents' => $request->input('legal_documents'),
            'num_of_bedrooms' => $request->input('num_of_bedrooms'),
            'num_of_bathrooms' => $request->input('num_of_bathrooms'),
            'num_of_floors' => $request->input('num_of_floors'),
            'house_direction' => $request->input('house_direction'),
            'balcony_direction' => $request->input('balcony_direction'),
            'furniture' => $request->input('furniture'),
            'video_link' => $request->input('video_link'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'post_days' => $request->input('post_days'),
            'start_date' => $request->input('start_date'),
            'post_status' => 'pending_approval',
        ]);


        foreach ($request->file('file') as $file) {
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('files/image', $fileName, 'public');

            PropertyImage::create([
                'property_id' => $realState->id,
                'image_url' =>  "/storage/files/image/{$fileName}",
            ]);
        }

        toastr()->success('Đã tạo bất động sản thành công');
        return redirect(route('manage'));
    }
}
