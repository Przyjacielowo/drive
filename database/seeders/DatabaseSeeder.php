<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        \App\Models\User::factory()->create([
            'name' => 'Bartek',
            'email' => 'bartlomiej@przyjacielowo.pl',
            'password' => bcrypt('123456'),
        ]);  
        
        \App\Models\User::factory()->create([
            'name' => 'Toemk',
            'email' => 'tomasz@przyjacielowo.pl',
            'password' => bcrypt('123456'),
        ]);
    }
}
