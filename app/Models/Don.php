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
        'amount' ,
        'phone',
        'honneur',
        'honnoree',
        'user_id'
    ];

    // public static function boot ()
    // {
    //     parent::boot();

    //     self::creating(function($don)
    // {
    //    $don->user()->associate(auth()->user()->dons->amount);
    //    $don->dons()->associate(request()->amount);
    // });
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
}
