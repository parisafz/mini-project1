<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * کلاس Post نمایانگر مدل پست در پایگاه‌داده است.
 *
 * این کلاس مسئول مدیریت ویژگی‌ها و روابط مربوط به پست‌ها می‌باشد.
 */
class Post extends Model
{
    use HasFactory;

    // ویژگی‌های قابل پر کردن
    protected $fillable = ['title', 'body', 'user_id', 'image'];

    /**
     * تعریف رابطه بین پست و کاربر.
     *
     * این متد مشخص می‌کند که هر پست به یک کاربر تعلق دارد.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * تعریف رابطه بین پست و کامنت‌ها.
     *
     * این متد مشخص می‌کند که هر پست می‌تواند چندین کامنت داشته باشد.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // protected $hidden = ['id'];
    // protected $visible = ['title'];
}
