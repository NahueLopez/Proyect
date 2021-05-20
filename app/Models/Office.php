<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //relacion uno a muchos
    public function users(){

        return $this->hasMany('App\Models\User');
    }
        //relacion muchos a muchos
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category')
                    ->as('categor')
                    ->withTimestamps();;
    }
}
