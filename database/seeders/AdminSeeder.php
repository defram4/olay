<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@royalsystems.md',
            'password' => bcrypt('FGDasd312RE3d!!@3defes'),
            'role_id' => 1
        ]);
    }
}
