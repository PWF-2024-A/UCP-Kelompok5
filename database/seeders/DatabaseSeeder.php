<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Todo;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'is_admin' => true,
       ]);
       User::factory()->create([
           'name' => 'Raynanda Aqiyas Pramardhika',
           'email' => 'rpramardika@gmail.com',
           // 'is_admin' => false,
      ]);
      User::factory(100)->create();
      Todo::factory(500)->create();
      Category::factory(10)->create();

    }
}
