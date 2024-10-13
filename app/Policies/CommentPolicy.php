<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\Response;

/**
 * کلاس CommentPolicy مسئول مدیریت مجوزهای دسترسی برای مدل کامنت است.
 *
 * این کلاس تعیین می‌کند که کاربر چه اقداماتی را می‌تواند بر روی کامنت‌ها انجام دهد.
 */
class CommentPolicy
{
    /**
     * تعیین اینکه آیا کاربر می‌تواند هر مدل را مشاهده کند یا خیر.
     *
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * تعیین اینکه آیا کاربر می‌تواند مدل را مشاهده کند یا خیر.
     *
     * @param User $user
     * @param Comment $comment
     * @return bool
     */
    public function view(User $user, Comment $comment): bool
    {
        //
    }

    /**
     * تعیین اینکه آیا کاربر می‌تواند مدل‌های جدید ایجاد کند یا خیر.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * تعیین اینکه آیا کاربر می‌تواند مدل را به‌روزرسانی کند یا خیر.
     *
     * @param User $user
     * @param Comment $comment
     * @return bool
     */
    public function update(User $user, Comment $comment): bool
    {
        //
    }

    /**
     * تعیین اینکه آیا کاربر می‌تواند مدل را حذف کند یا خیر.
     *
     * @param User $user
     * @param Comment $comment
     * @return bool
     */
    public function delete(User $user, Comment $comment): bool
    {
        //
    }

    /**
     * تعیین اینکه آیا کاربر می‌تواند مدل را بازیابی کند یا خیر.
     *
     * @param User $user
     * @param Comment $comment
     * @return bool
     */
    public function restore(User $user, Comment $comment): bool
    {
        //
    }

    /**
     * تعیین اینکه آیا کاربر می‌تواند مدل را به‌طور دائم حذف کند یا خیر.
     *
     * @param User $user
     * @param Comment $comment
     * @return bool
     */
    public function forceDelete(User $user, Comment $comment): bool
    {
        //
    }
}
