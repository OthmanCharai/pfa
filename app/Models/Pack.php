<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;
    protected $fillable = [
        'proposals',
        'plan',
        'prix',
        'payement_date',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
