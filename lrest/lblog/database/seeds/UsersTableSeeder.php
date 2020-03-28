<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        // Make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('admin');

        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => 'admin',
        ]);


        for ($i=0; $i <10 ; $i++) { 
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);        
        }

    }
}
