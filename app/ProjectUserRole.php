<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUserRole extends Model
{
    public function role()
    {
        return $this->belongsTo('App\Role','role_id','id');
    }
}
