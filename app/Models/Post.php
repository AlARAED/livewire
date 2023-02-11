<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;


class Post extends Model
{
    use HasFactory;
    protected $guarded = array();

    public function Category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function User()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


}
