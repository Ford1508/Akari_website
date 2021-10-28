<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CtvPost extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = 
    [
    'name',
    'title',
    'adress',
    'theme',
    'type',
    'price',
    'location',
    'content',
    ];
    protected $table = "ctv_posts";
}
