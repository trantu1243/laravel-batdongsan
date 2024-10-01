<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SavedPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Giả sử bạn có 5 người dùng với ID từ 1 đến 5
        // Tạo một số bài viết mẫu
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 3; $j++) { // Mỗi người dùng lưu 3 bài viết
                DB::table('saved_posts')->insert([
                    'user_id' => $i, // ID của người dùng
                    'post_id' => $j, // ID của bài viết, giả sử có 3 bài viết
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
