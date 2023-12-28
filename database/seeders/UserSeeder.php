<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id'        => '9af569ed-002a-48be-87ee-f67909e4e70f',
            'email'     => 'jihannhayaa@gmail.com',
            'username'  => 'jihannhayaa',
            'password'  => bcrypt('jihan'),
            'bio'       => 'Sevima Internship'
        ]);
    }
}
