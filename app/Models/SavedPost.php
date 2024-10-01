<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedPost extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'post_id'];

    // Mối quan hệ với người dùng
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Mối quan hệ với bài đăng bất động sản
    public function post()
    {
        return $this->belongsTo(Property::class);
    }
}
