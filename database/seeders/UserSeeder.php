<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Gunar Quispe',
            'phone'=>'63387743',
            'email'=>'gunarq@gmail.com',
            'profile'=>'ADMIN',
            'status'=>'ACTIVE',
            'password'=>bcrypt('12345678'),
        ]);
        User::create([
            'name'=>'Maribel Cuscaya',
            'phone'=>'604560393',
            'email'=>'maribel@gmail.com',
            'profile'=>'EMPLOYEE',
            'status'=>'ACTIVE',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
