<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Motor extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $dates = [ 'created_at'];

    // public function images(){
    //     return $this->hasMany(Image::class);
    // }
}
