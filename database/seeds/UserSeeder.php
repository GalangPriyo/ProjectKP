<?php

use App\User;
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
        User::create([
            'nama'              => 'Admin1',
            'email'             => 'admin1@gmail.com',
            'level'             => 'admin',
            'email_verified_at' => now(),
            'password'          => bcrypt('qwerty123'),
        ]);
        User::create([
            'nama'              => 'Admin2',
            'email'             => 'admin2@gmail.com',
            'level'             => 'admin',
            'email_verified_at' => now(),
            'password'          => bcrypt('qwerty123'),
        ]);
        User::create([
            'nama'              => 'Admin3',
            'email'             => 'admin3@gmail.com',
            'level'             => 'admin',
            'email_verified_at' => now(),
            'password'          => bcrypt('qwerty123'),
        ]);
        User::create([
            'nama'              => 'Admin4',
            'email'             => 'admin4@gmail.com',
            'level'             => 'admin',
            'email_verified_at' => now(),
            'password'          => bcrypt('qwerty123'),
        ]);
        User::create([
            'nama'              => 'Admin5',
            'email'             => 'admin5@gmail.com',
            'level'             => 'admin',
            'email_verified_at' => now(),
            'password'          => bcrypt('qwerty123'),
        ]);
        User::create([
            'nama'              => 'Kontributor1',
            'email'             => 'kontributor1@gmail.com',
            'level'             => 'kontributor',
            'email_verified_at' => now(),
            'password'          => bcrypt('asdfgh123'),
        ]);
        User::create([
            'nama'              => 'Kontributor2',
            'email'             => 'kontributor2@gmail.com',
            'level'             => 'kontributor',
            'email_verified_at' => now(),
            'password'          => bcrypt('asdfgh123'),
        ]);
        User::create([
            'nama'              => 'Kontributor3',
            'email'             => 'kontributor3@gmail.com',
            'level'             => 'kontributor',
            'email_verified_at' => now(),
            'password'          => bcrypt('asdfgh123'),
        ]);
        User::create([
            'nama'              => 'Kontributor4',
            'email'             => 'kontributor4@gmail.com',
            'level'             => 'kontributor',
            'email_verified_at' => now(),
            'password'          => bcrypt('asdfgh123'),
        ]);
        User::create([
            'nama'              => 'Kontributor5',
            'email'             => 'kontributor5@gmail.com',
            'level'             => 'kontributor',
            'email_verified_at' => now(),
            'password'          => bcrypt('asdfgh123'),
        ]);
        User::create([
            'nama'              => 'Kontributor6',
            'email'             => 'kontributor6@gmail.com',
            'level'             => 'kontributor',
            'email_verified_at' => now(),
            'password'          => bcrypt('asdfgh123'),
        ]);
        User::create([
            'nama'              => 'Kontributor7',
            'email'             => 'kontributor7@gmail.com',
            'level'             => 'kontributor',
            'email_verified_at' => now(),
            'password'          => bcrypt('asdfgh123'),
        ]);
        User::create([
            'nama'              => 'Kontributor8',
            'email'             => 'kontributor8@gmail.com',
            'level'             => 'kontributor',
            'email_verified_at' => now(),
            'password'          => bcrypt('asdfgh123'),
        ]);
        User::create([
            'nama'              => 'Kontributor9',
            'email'             => 'kontributor9@gmail.com',
            'level'             => 'kontributor',
            'email_verified_at' => now(),
            'password'          => bcrypt('asdfgh123'),
        ]);
        User::create([
            'nama'              => 'Kontributor10',
            'email'             => 'kontributor10@gmail.com',
            'level'             => 'kontributor',
            'email_verified_at' => now(),
            'password'          => bcrypt('asdfgh123'),
        ]);
    }
}
