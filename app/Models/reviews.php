<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;
    protected $table ='reviews';
    protected $fillable =[
        'Email',
        'comment',
        
    ];
}
