<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Jenssegers\Mongodb\Eloquent\Model;
class Post extends Model
{
    use HasFactory;
    use HybridRelations ;


    protected $connection = 'mongodb';

    protected $guarded = [];
    protected $collection = 'posts';


    public function user(){
        return $this->belongsTo(User::class);
    }



}
