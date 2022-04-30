<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrator', 
            'email' => 'admin@gmail.com',
            'password' => FacadesHash::make('12345678'),
            'alamat' => 'Indramayu' ,
            'telepon' => '082314567782',
            'foto' => 'avatar.jpg'
        ]);
         
        $role = Role::find(1);

        $permissions = Permission::pluck('id', 'id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
