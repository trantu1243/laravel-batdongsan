<?php

namespace App\Http\Controllers\Admin\Batdongsan;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendingBatdonsanController extends Controller
{
    public function show(){
        $realStates = Property::with(['user'])->where('post_status', 'pending_approval')->get();
        $user = Auth::user();
        return view('admin.batdongsan.pending', [
            'realStates' => $realStates,
            'user' => $user
        ]);
    }

}
