<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * کلاس User نمایانگر مدل کاربر در پایگاه‌داده است.
 *
 * این کلاس مسئول مدیریت ویژگی‌ها و روابط مربوط به کاربران می‌باشد.
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * ویژگی‌هایی که قابل پر کردن هستند.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'api_token'
    ];

    /**
     * ویژگی‌هایی که باید در هنگام سریالیزه کردن مخفی شوند.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * ویژگی‌هایی که باید تبدیل شوند.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * دریافت تمام پست‌ها برای کاربر.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function post()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * دریافت نام کامل کاربر.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
