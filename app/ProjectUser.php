<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
        public function user()
        {
           return $this->belongsTo('App\User');
        }

        public function projectUserRoles()
        {
            return $this->hasMany('App\ProjectUserRole','project_user_id','id');
        }

       

}
