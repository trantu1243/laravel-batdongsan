<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\SavedPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function show(Request $request)
    {
        $query = Property::with(['images', 'province', 'huyen']);

        if ($request->has('property_type') && $request->input('property_type')) {
            $query->where('property_type', $request->input('property_type'));
        }
        if ($request->has('CategoryIdsAsString') && $request->input('CategoryIdsAsString')) {
            $query->where('property_category', $request->input('CategoryIdsAsString'));
        }
        if ($request->has('gia_tri_tinh_chon') && $request->input('gia_tri_tinh_chon')) {
            $query->where('city', $request->input('gia_tri_tinh_chon'));
        }
        if ($request->has('DistrictIdsAsString') && $request->input('DistrictIdsAsString')) {
            Log::info(json_encode($request->input('DistrictIdsAsString')));
            $query->whereIn('district', $request->input('DistrictIdsAsString'));
        }
        if ($request->has('WardIdsAsString') && $request->input('WardIdsAsString')) {
            $query->whereIn('commune', $request->input('WardIdsAsString'));
        }
        if ($request->has('priceMin') && $request->input('priceMin')) {
            $query->where('price', '>=', intval($request->input('priceMin')) * 1000000);
        }
        if ($request->has('priceMax') && $request->input('priceMax')) {
            $query->where('price', '<=', intval($request->input('priceMax')) * 1000000);
        }
        if ($request->has('areaMin') && $request->input('areaMin')) {
            $query->where('area', '>=', $request->input('areaMin'));
        }
        if ($request->has('areaMax') && $request->input('areaMax')) {
            $query->where('area', '<=', $request->input('areaMax'));
        }
        if ($request->has('RoomNumersAsString') && $request->input('RoomNumersAsString')) {
            $query->whereIn('num_of_bedrooms', $request->input('RoomNumersAsString'));
        }
        if ($request->has('DirectionsAsString') && $request->input('DirectionsAsString')) {
            $query->whereIn('house_direction', $request->input('DirectionsAsString'));
        }
        if ($request->has('title') && $request->input('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }

        $query->orderBy('created_at', 'desc');

        $properties = $query->paginate(24);

        $savedPosts = SavedPost::where('user_id', Auth::id())->get();
        // $properties = Property::all(); // Hoặc phương thức lấy property của bạn

        // return view('your_view_name', compact('savedPosts', 'properties'));

        return view('category.index', [
            'properties' => $properties,
            'filters' => $request->all(),
            'savedPosts' => $savedPosts
        ]);
    }
}
