<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'deskripsi_profil_1' => 'deskripsi profil 1',
            'deskripsi_profil_2' => 'deskripsi profil 2',
            'gambar_profil' => 'gambar-profil.jpg',
        ]);
    }
}
