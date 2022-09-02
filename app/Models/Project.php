<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1, $id)
 * @method static find(int $id)
 * @method static findOrFail($id)
 * @method static latest()
 */
class Project extends Model
{
    use HasFactory;


    protected $guarded = [];



    protected $casts =[
        'deadline' => 'date'
    ];




    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
