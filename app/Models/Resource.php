<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = ['talleres_id', 'titulo', 'tipo', 'file_path'];

    public function talleres()
    {
        return $this->belongsTo(Talleres::class);
    }
}
