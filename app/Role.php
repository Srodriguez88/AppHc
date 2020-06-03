<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Table Role
    protected $fillable = [
        'name', 'slug', 'description', 'estado'
    ];

    //Relationship

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }

    //Store

    //Validations

    //Data Restore

    //Other Operations

}
