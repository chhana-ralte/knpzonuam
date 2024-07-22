<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bial;
use App\Models\Role;
use App\Models\Role_User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Role::truncate();
        Bial::truncate();
        // User::factory(10)->create();
        User::create([
            'name' => 'Admin User',
            'username' => 'Admin',
            'password' => 'admin',
            'level' => '5'
        ]);
        for($i=1;$i<10;$i++){
            Bial::create([
                'bial' => $i
            ]);
        }
        Role::create([
            'role' => 'Super',
            'level' => 5
        ]);
        Role::create([
            'role' => 'Admin',
            'level' => 4
        ]);
        Role::create([
            'role' => 'Zirtirtu',
            'level' => 2
        ]);
        Role::create([
            'role' => 'Member',
            'level' => 1
        ]);
        Role_User::create([
            'role_id' => 1,
            'user_id' => 1
        ]);
        //$this->call(MemberSeeder::class);
    }
}
