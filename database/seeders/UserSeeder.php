<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => config('admin.default.name'),
            'email' => config('admin.default.email'),
            'password' => bcrypt(config('admin.default.password')),
        ]);
    }
}
