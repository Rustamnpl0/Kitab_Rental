<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;
    protected $table ='Donations';
    protected $fillable =[
        'BooksName',
        'Booksimage',
        'Author',
        'DateOfPublication',
        'Genre',
      
        
    ];
}


