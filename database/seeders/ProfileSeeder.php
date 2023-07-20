<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = Profile::create([
            'fullname' => 'Khairunnisa',
            'tanggal_lahir' => date('12-10-2002'),
            'status' => 'Admin',
        ]);
    }
}
