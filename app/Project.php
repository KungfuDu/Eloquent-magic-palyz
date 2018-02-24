<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function fullProjectUsersRoles(){

        return $this->hasMany('App\ProjectUser','project_id','id')->with('user','projectUserRoles.role');
    }
}
