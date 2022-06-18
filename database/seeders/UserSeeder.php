<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // call all seeder
        $this->call([
            ProductSeeder::class
        ]);

        // user seeder 
        $user = [
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user1234'),
                'role' => 'pembeli'
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ]
        ];
     
        foreach($user as $value) {
            User::insert($value);
        }
    }
}
