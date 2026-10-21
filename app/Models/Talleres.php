<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Talleres extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'image'];

    public function resources()
    {
        return $this->hasMany(Resource::class);
    }
}
