<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    use HasFactory;
    protected $fillable = [
        'link',
        'proposals',
        'nb_pub',
        'earning',
        'category',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
