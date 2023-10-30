<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    // for anable using function like `create()`
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }


}
