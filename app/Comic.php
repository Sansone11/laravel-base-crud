<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{ 'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
    protected $fillable =[
       
    ];
}
