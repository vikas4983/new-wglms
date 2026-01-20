<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Saurabh & Vaishnavi',
            'email' => 'admin@saurabhwedsvaishnavi.com',
            'password' => Hash::make('India@2026'),
        ]);
    }
}
