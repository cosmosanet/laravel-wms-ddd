<?php

namespace App\Domain\Model\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $fillable = [
        'name',
    ];
}
