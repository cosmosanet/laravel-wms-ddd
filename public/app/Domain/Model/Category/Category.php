<?php

namespace App\Domain\Model\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'id',
        'name',
        'description',
    ];
}
