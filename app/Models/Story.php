<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getTitleAttribute($attribute)
    {
        return Str::title($attribute);
    }
}
