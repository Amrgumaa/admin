<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class vulog extends Model
{
    use HasFactory;
    protected $table = 'visitorlog_urllog';
      protected $fillable = [
        'visitorlog_id',
         'urllog_id',];
}
