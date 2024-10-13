<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * کلاس UserFactory برای تولید نمونه‌های تصادفی از مدل User استفاده می‌شود.
 *
 * این کلاس به شما امکان می‌دهد تا داده‌های تستی برای مدل کاربر ایجاد کنید.
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * رمز عبور فعلی که توسط کارخانه استفاده می‌شود.
     *
     * @var string|null
     */
    protected static ?string $password;

    /**
     * تعریف وضعیت پیش‌فرض مدل.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(), // تاریخ تأیید ایمیل
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * مشخص کردن اینکه آدرس ایمیل مدل باید تأیید نشده باشد.
     *
     * @return static
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
