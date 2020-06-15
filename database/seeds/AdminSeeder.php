<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'Yuyuan',
            'email' => 'admin@admin.com',
            'password' => bcrypt('111111'),
        ]);
    }
}
