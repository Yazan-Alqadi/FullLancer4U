<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Http\Requests\NovaRequest;

class Profession extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'client_service', 'service_id', 'user_id')->withPivot('status')->withTimestamps();
    }
   
}
