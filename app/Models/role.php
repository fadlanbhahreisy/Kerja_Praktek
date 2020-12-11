<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsTo('App\Models\users', 'role_id', 'id');
    }
}