<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Admin::create([
            'name' => 'Admin',
            'email' => 'gradiph@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
