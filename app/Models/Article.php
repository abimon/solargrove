<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'author_id','path','is_published'];
    public function author(){
        return $this->belongsTo(User::class,'author_id','id');
    }
}
