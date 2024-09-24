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
            'property_type' => $request->input(''),
            'property_category' => $request->input(''),
            'city' => $request->input(''),
            'district' => $request->input(''),
            'commune' => $request->input(''),
            'detailAddress' => $request->input(''),
            'title' => $request->input(''),
            'description' => $request->input(''),
            'area' => $request->input(''),
            'price' => $request->input(''),
            'price_unit' => $request->input(''),
            'legal_documents' => $request->input(''),
            'num_of_bedrooms' => $request->input(''),
            'num_of_bathrooms' => $request->input(''),
            'num_of_floors' => $request->input(''),
            'house_direction' => $request->input(''),
            'balcony_direction' => $request->input(''),
            'furniture' => $request->input(''),
            'video_link' => $request->input(''),
            'name' => $request->input(''),
            'email' => $request->input(''),
            'phone' => $request->input(''),
            'post_days' => $request->input(''),
            'start_date' => $request->input(''),
            'post_status' => 'pending_revision',
        ]);


        foreach ($request->file('file') as $file) {
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('files/image', $fileName, 'public');

            PropertyImage::create([
                'property_id' => $realState->id,
                'image_url' =>  "/storage/files/image/{$fileName}",
            ]);
        }

        return redirect(route('manage'));
    }
}
