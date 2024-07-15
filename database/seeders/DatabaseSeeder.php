<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bial;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'username' => 'test',
            'password' => 'password'
        ]);
        for($i=1;$i<10;$i++){
            Bial::factory()->create([
                'bial' => $i
            ]);
        }
        $this->call(MemberSeeder::class);
    }
}
