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
        'BooksName',
        'genre',
        'author',
        'date_of_publication',
        'description',
        'amount',
        'isAvailable'
    ];
}
