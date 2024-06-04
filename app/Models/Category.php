<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'type',
        'price',
        'usage'
    ];
    public function cars(){
        return $this->hasMany(Car::class);
    }
    use HasFactory;
}
