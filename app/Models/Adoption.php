<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'spaces',
        'img',
        'datetime',
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}