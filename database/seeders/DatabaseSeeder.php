<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Edwin Gallardo',
            'email' => 'i@admin.com',
            'password' => bcrypt('12345')
        ]);

        Post::factory()->count(24)->create();
    }
}
