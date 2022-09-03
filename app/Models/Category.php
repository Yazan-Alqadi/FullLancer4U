<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function professions()
    {
        return $this->hasMany(Profession::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_category', 'user_id', 'category_id');
    }

}
