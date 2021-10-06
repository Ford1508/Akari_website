<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
        'category_id',
        'name',
        'content',
        'count_like',
        'view',
        'image',
        'location',
        'price',
        'count_favorite',
        'type',
        'status'
    ];
    protected $table = "posts";
}
