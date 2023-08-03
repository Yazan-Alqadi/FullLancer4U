<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\HybridRelations;

class Comment extends Model
{
    use HasFactory;
    use HybridRelations;


    protected $connection = 'mongodb';
    protected $guarded = [];

    protected $collection = 'comments';



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
