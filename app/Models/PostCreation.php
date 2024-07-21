<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCreation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
         'from',
         'to',
         'name',
         'fromTime',
         'toTime',
          'price',
          'class',
          'image'
     ];
}