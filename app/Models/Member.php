<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'nom' ,
        'date_naissance' ,
        'fonction' ,
        'picture' ,
        'phone' ,
        'email',
        'region' ,
        'address',
        'section',
        'civilite'
    ];
}
