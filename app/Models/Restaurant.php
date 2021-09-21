<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'rest_name',
        'rest_category',
        'rest_address',
        'rest_city',
        'rest_charge',
        'rest_desc',
        'rest_web',
        'rest_logo',
        'rest_cover',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
