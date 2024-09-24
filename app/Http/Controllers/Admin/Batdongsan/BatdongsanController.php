<?php

namespace App\Http\Controllers\Admin\Batdongsan;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class BatdongsanController extends Controller
{
    public function show(){
        $realStates = Property::paginate(15);
        return view('admin.batdongsan.index', [
            'realStates' => $realStates
        ]);
    }
}
