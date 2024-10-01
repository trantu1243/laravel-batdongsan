<?php

namespace App\Http\Controllers\RealState;

use App\Http\Controllers\Controller;
use App\Models\SavedPost;
use Database\Seeders\SavedPostSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavedPostController extends Controller
{

    // Hiển thị các bài đăng đã lưu của người dùng hiện tại
    public function show()
    {
        $savedPosts = SavedPost::where('user_id', Auth::id())->with(['user', 'post'])->get();
        // $this->call(SavedPostSeeder::class);
        return view('saved_posts.index', compact('savedPosts'));
        // 
    }

    // Lưu bài đăng bất động sản
    public function save(Request $request, $postId)
    {
        $savedPost = SavedPost::create([
            'user_id' => Auth::id(),
            'post_id' => $postId,
        ]);

        return redirect()->back()->with('success', 'Tin đã được lưu');
    }

    // Xóa bài đăng đã lưu
    public function destroy($id)
    {
        $savedPost = SavedPost::where('user_id', Auth::id())->where('post_id', $id)->first();

        if ($savedPost) {
            $savedPost->delete();
            return redirect()->back()->with('success', 'Đã xóa tin đã lưu');
        }

        return redirect()->back()->with('error', 'Không tìm thấy tin đã lưu');
    }
}
