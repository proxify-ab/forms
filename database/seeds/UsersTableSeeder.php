<?php

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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => bcrypt('123456'),
            'is_admin' => false,
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
