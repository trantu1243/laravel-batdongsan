<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Property;
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

    public function edit($id){
        $realState = Property::find($id);

    }
}
