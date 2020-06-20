<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'created_by', 'body', 'price', 'image', 'features'];

    protected $casts = [
        'features' => 'array',
        'is_featured' => 'boolean'
    ];

    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
