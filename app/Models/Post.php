<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    //use HasFactory;

    // table name
    //protected $table = 'posts';   
    //primary key
    //protected $primaryKey='item_id';
    // timestamps
    //public $timestamps= false;
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }


}
