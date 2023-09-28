<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
        User::truncate();
        User::create([
            'name' => 'wdwd',
            'level' => 'admin',
            'email' => 'hrayhansyah@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60), // Use Str::random() without quotes
        ]);// jika mau menambahkan user isi setelah disini , lalu jalankan command php artisan db:seed --class=UserSeeder

        User::create([
            'name' => 'haycal',
            'level' => 'admin',
            'email' => 'haycal@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60), // Use Str::random() without quotes
        ]);
        User::create([
            'name' => 'habibi',
            'level' => 'admin',
            'email' => 'habibi@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
    }
}
