<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return HasMany
     */
    public function providers()
    {
        return $this->hasMany(Provider::class, 'user_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function post(Post $post)
    {
        return $this->posts->where('id', $post->id)->first();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }

    public function provider()
    {
        return $this->hasOne(Provider::class, 'user_id', 'id');
    }

    public function getAllPostThisDate($date = null)
    {
        if (!$date) $date = now()->today();
        return $this->posts()->whereDay('created_at', $date)->get();
    }

    public function scopeIsPostingLimitToday($query, $limit = 5)
    {
        return $this->getAllPostThisDate()->count() > $limit;
    }

    public function getAllCommentThisDate($date = null)
    {
        if (!$date) $date = now()->today();
        return $this->comments()->whereDay('created_at', $date)->get();
    }

    public function scopeIsCommentingLimitToday($query, $limit = 5)
    {
        return $this->getAllCommentThisDate()->count() > $limit;
    }
}
