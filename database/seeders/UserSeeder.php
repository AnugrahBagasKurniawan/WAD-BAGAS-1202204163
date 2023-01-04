<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name'=> 'Amanda Aurellie',
            'email'=> 'Amanda@gmail.com',
            'no_hp'=> '089682004764',
            'password'=> bcrypt('123'),

        ]);
    }
}
