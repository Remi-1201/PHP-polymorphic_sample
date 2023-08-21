<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
    ];

    public function tag()
    {
        return $this->morphMany(Tag::class, 'taggable');
    }
}
