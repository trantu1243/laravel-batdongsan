<?php

namespace App\Http\Controllers\RealState;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Property;
use App\Models\SavedPost;
use Database\Seeders\SavedPostSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        // Ghi log
        // Log::info('Lưu bài viết đã được lưu');

        // Tìm hoặc tạo bản ghi mới nếu không có
        $savedPost = SavedPost::firstOrCreate(
            [
                'user_id' => Auth::id(),
                'post_id' => $postId,
            ]
        );

        // Kiểm tra xem bản ghi đã tồn tại chưa
        if ($savedPost->wasRecentlyCreated) {
            $post = Property::find($postId);
            Notification::create([
                'user_id' => $post->user_id,
                'property_id' => $postId,
                'content' => Auth::user()->name . " đã lưu 1 tin của bạn",
                'type' => "save",
                'seen' => false
            ]);
            return redirect()->back()->with('success', 'Tin đã được lưu');
        } else {
            return redirect()->back()->with('info', 'Tin đã được lưu trước đó');
        }
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
