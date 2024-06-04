<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagCar extends Model
{
    protected $fillable=[
        'car_id','tag_id'
    ];
    use HasFactory;
    
    public function Car(){
        return $this ->belongsTo(TagCar::class);
    }
    public function Tag(){
        return $this->belongsTo(Tag::class);
    }
}
