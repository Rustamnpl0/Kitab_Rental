<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table ='books';
    protected $fillable =[
         'image',
        'Books name',
        'genre',
        'author',
        'is available',
        'date_of_publication',
        'description',
        'amount'
    ];
}
