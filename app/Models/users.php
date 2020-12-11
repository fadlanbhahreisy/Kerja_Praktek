<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    public function role()
    {
        return $this->hasMany('App\Models\role', 'role_id', 'id');
    }
}
