<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table('users')->insert([
            'name' => 'Trung Nguyen',
            'email' => 'kevinnguyen510@gmail.com',
            'password' => bcrypt('P200323!'),
      ]);
    }
}
