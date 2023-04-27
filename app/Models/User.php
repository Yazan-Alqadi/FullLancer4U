<?php

namespace App\Models;

use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use  HasApiTokens, HasFactory, Notifiable;
    use HybridRelations ;
    use CanResetPassword;

    protected $connection = "mysql" ;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'full_name',
        'email',
        'password',
        'google_id',
        'phone',
        'address',
        'bio',
        'is_freelancer',
    ];
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function freelancer()
    {
        return $this->hasOne(Freelancer::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }


    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }



    public function sent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function received()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    public function notification()
    {
        return $this->hasMany(Notification::class, 'user_id');
    }

    public function notification_re()
    {
        return $this->hasMany(Notification::class, 'reciver_id');
    }

    public function threads()
    {
        return $this->hasMany(Thread::class, 'user_id');
    }
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function services()
    {
        return $this->belongsToMany(Profession::class, 'client_service', 'user_id', 'service_id')->withPivot('status')->withTimestamps();
    }

    public function category()
    {
        return $this->BelongsToMany(Category::class, 'user_category', 'user_id', 'category_id');
    }
}
