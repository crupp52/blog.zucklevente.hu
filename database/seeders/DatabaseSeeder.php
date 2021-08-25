<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Zuck Levente',
            'email'             => 'hello@zucklevente.hu',
            'username'          => 'leventezuck',
            'password'          => Hash::make('titkos123'),
            'email_verified_at' => now(),
        ]);

        User::factory()
            ->has(Post::factory()
                ->count(10))
            ->count(10)
            ->create();
    }
}
