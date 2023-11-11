<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->role_as = "1";
        $user->password = bcrypt('admin@123');
        $user->save();


    }
}
