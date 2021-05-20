<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

        //relacion muchos a muchos
    public function offices()
    {
        return $this->belongsToMany('App\Models\Office');
            
    }
}
