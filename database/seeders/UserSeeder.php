<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('user123')
            ], [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('user123')
            ]
        ];
        foreach ($data as $key => $d) {
            User::create($d);
        }
    }
}
