<?php

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
        \DB::table('users')->insert([
            'name' => 'fendi',
            'email' => 'fendilaw41@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
