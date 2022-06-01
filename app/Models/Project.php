<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
