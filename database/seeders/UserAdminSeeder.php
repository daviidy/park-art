<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'first_name'=>'Administrator',
         'last_name'=>'Admin', 
         'email'=>'admin@admin.ci',
          'description'=>'Administrator',
          'password'=>bcrypt('password'),
          'role_id'=>3]);
    }
}
