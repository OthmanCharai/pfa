<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'link',
        'publishing_price',
        'category_id',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function commands(){

        return $this->belongsToMany(User::class)->withPivot('status')->withPivot('id')->withTimestamps();
    }

    public function liked(){
        return $this->belongsToMany(User::class,'favorites','product_id','user_id')->withTimestamps();
    }

    /* local scope  */


}
