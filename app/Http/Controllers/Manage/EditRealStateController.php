<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditRealStateRequest;
use App\Models\District;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\Province;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EditRealStateController extends Controller
{
    public function show($id){
        $name = Auth::user()->name;
        $realState = Property::find($id);
        $provinces = Province::all();
        $province_id = Province::where('_id', $realState->city)->first()->id;
        $districts = District::where('province_id', $province_id)->get();
        $district_id = District::where('_id', $realState->district)->first()->id;
        $wards = Ward::where('district_id', $district_id)->get();

        Log::info(json_encode($districts));
        return view('manage.edit', [
            'name' => $name,
            'realState' => $realState,
            'provinces' => $provinces,
            'districts' => $districts,
            'wards' => $wards
        ]);
    }

    public function edit($id, EditRealStateRequest $request){
        $realState = Property::find($id);

        $realState->property_type = $request->input('property_type');
        $realState->property_category = $request->input('property_category');
        $realState->city = $request->input('city');
        $realState->district = $request->input('district');
        $realState->commune = $request->input('commune');
        $realState->detailAddress = $request->input('detailAddress');
        $realState->title = $request->input('title');
        $realState->description = $request->input('description');
        $realState->area = $request->input('area');
        $realState->price = $request->input('price');
        $realState->price_unit = $request->input('price_unit');
        $realState->legal_documents = $request->input('legal_documents');
        $realState->num_of_bedrooms = $request->input('num_of_bedrooms');
        $realState->num_of_bathrooms = $request->input('num_of_bathrooms');
        $realState->num_of_floors = $request->input('num_of_floors');
        $realState->house_direction = $request->input('house_direction');
        $realState->balcony_direction = $request->input('balcony_direction');
        $realState->furniture = $request->input('furniture');
        $realState->video_link = $request->input('video_link');
        $realState->name = $request->input('name');
        $realState->email = $request->input('email');
        $realState->phone = $request->input('phone');
        $realState->post_days = $request->input('post_days');
        $realState->start_date = $request->input('start_date');

        $realState->save();

        toastr()->success("Chỉnh sửa thành công");
        return back();

    }
}
