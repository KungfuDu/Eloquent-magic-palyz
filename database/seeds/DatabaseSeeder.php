<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Project;
use App\Role;
use App\RoleUser;
use App\ProjectUser;
use App\ProjectUserRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            $user = new User;
            $user->email = "user-{$i}@gmail.com";
            $user->name = "user-{$i}";
            $user->password = "qwe213";
            $user->save();
        }
        for ($i=0; $i < 5; $i++) { 
            $project = new Project;
            $project->name = "project-{$i}";
            $project->description = "project-{$i} : lorem ipsum";
            $project->save();
        }

        $role = new Role;
        $role->name = "Developer";
        $role->description = "";
        $role->save();
        $roleb = new Role;
        $roleb->name = "Manager";
        $roleb->description = "";
        $roleb->save();
        $rolec = new Role;
        $rolec->name = "Designer";
        $rolec->description = "";
        $rolec->save();

        $roleUser = new RoleUser;
        $roleUser->role_id = 1;
        $roleUser->user_id = 1;
        $roleUser->save();
        $roleUser = new RoleUser;
        $roleUser->role_id = 1;
        $roleUser->user_id = 2;
        $roleUser->save();
        $roleUser = new RoleUser;
        $roleUser->role_id = 3;
        $roleUser->user_id = 1;
        $roleUser->save();
        $roleUser = new RoleUser;
        $roleUser->role_id = 2;
        $roleUser->user_id = 4;
        $roleUser->save();

        $projectuser = new ProjectUser;
        $projectuser->project_id = 1;
        $projectuser->user_id = 1;
        $projectuser->save();
        $projectuser = new ProjectUser;
        $projectuser->project_id = 2;
        $projectuser->user_id = 1;
        $projectuser->save();        
        $projectuser = new ProjectUser;
        $projectuser->project_id = 1;
        $projectuser->user_id = 2;
        $projectuser->save();
        $projectuser = new ProjectUser;
        $projectuser->project_id = 3;
        $projectuser->user_id = 3;
        $projectuser->save();        
        $projectuser = new ProjectUser;
        $projectuser->project_id = 1;
        $projectuser->user_id = 3;
        $projectuser->save();

        $pur = new ProjectUserRole;
        $pur->project_user_id = 1;
        $pur->role_id = 1;
        $pur->save();
        $pur = new ProjectUserRole;
        $pur->project_user_id = 1;
        $pur->role_id = 2;
        $pur->save();
        $pur = new ProjectUserRole;
        $pur->project_user_id = 2;
        $pur->role_id = 1;
        $pur->save();
        $pur = new ProjectUserRole;
        $pur->project_user_id = 3;
        $pur->role_id = 1;
        $pur->save();
        // $this->call(UsersTableSeeder::class);
    }
}
