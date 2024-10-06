<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AddNewsController extends Controller
{
    public function show(){
        return view('admin.news.add-news');
    }

    public function create(Request $request){
        try{
            $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'author' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,svg,gif,pdf,webp',
        ]);

        $file = $request->file('image');

        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('files/image', $fileName, 'public');

        News::create([
            'title' => $request->input('title'),
            'image' => "/storage/files/image/{$fileName}",
            'content' => $request->input('content'),
            'author' => $request->input('author'),
        ]);
        toastr()->success('Tạo tin tức thành công');
        return redirect(route('admin.news'));
        }
        catch (\Exception $e){
            Log::info($e);
            toastr()->error("");
            return back();
        }
    }
}
