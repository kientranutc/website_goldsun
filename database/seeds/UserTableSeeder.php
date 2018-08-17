<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'fullname' => 'Trần Chung Kiên',
            'email' => 'kienkienutc95@gmail.com',
            'password' => bcrypt('admin@123'),
        ]);
    }
}
