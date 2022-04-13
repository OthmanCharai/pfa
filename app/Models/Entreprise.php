<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'adresse',
        'link',
        'walet',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
