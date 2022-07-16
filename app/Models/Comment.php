<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory,SoftDeletes;

    const RELEVENT=0,IRRELEVENT=1;

    protected $fillable = [
       'user_id','post_id','status','comment' 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}