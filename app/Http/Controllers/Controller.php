<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use App\User;
use App\Project;
use App\Role;
use App\RoleUser;
use App\ProjectUser;
use App\ProjectUserRole;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(Request $request)
    {

        $projects = Project::with('fullProjectUsersRoles')->get();
        // dd($projects);
        $data = [];
        return view('index', array("projects" => $projects));
    }


}
