<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urllog extends Model
{
    use HasFactory;
       protected $fillable = [
        'url',


    ];
     public function visitorlog()
    {
        return $this->belongsToMany(Visitorlog::class,'visitorlog_urllog');
    }
}
