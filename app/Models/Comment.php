<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * کلاس Comment نمایانگر مدل کامنت در پایگاه‌داده است.
 *
 * این کلاس مسئول مدیریت ارتباطات و ویژگی‌های مربوط به کامنت‌ها می‌باشد.
 */
class Comment extends Model
{
    use HasFactory;

    /**
     * تعریف رابطه بین کامنت و پست.
     *
     * این متد مشخص می‌کند که هر کامنت به یک پست تعلق دارد.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
