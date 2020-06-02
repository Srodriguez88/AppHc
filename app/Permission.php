<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    //Table Role
    protected $fillable = [
        'name', 'slug', 'description'
    ];

    //Relationship

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

 
    //Store

    //Validations

    //Data Restore

    //Other Operations

}
