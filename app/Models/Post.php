<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use softDeletes;
    protected $date = ['delete_at'];
    protected $fillable = ['title','body'];
    // use HasFactory;
    public function comments()
    {
        return $this->hasMany(Comments::class)->whereNull('parent_id');
    }
}
