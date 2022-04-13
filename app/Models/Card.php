<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'card_number',
        'name',
        'exp_date',
        'cvv',
        'is_primary',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
