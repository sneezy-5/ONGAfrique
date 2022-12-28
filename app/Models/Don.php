<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Don extends Model
{
    use HasFactory;
    
    protected $fillable = 
    [
        'last_name' ,
        'first_name' ,
        'email' ,
        'country' ,
        'city' ,
        'address',
        'amount' ,
        'phone',
        'honneur',
        'honnoree'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
