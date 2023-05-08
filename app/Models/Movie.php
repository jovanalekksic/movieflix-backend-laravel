<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'description',
        'picture',
        'rating',
        'studio_id',
        'user_id',
        'genre_id',
        'name',

    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }
    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
