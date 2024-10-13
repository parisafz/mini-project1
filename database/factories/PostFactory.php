<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * کلاس PostFactory برای تولید نمونه‌های تصادفی از مدل Post استفاده می‌شود.
 *
 * این کلاس به شما امکان می‌دهد تا داده‌های تستی برای مدل پست ایجاد کنید.
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * تعریف وضعیت پیش‌فرض مدل.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(20),
            'body' => fake()->paragraph(100),
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}
