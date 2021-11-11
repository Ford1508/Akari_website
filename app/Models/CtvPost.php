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
    'status',
    'image',
    ];
    protected $table = "ctv_posts";
    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'post_id', 'id');
    }
}
