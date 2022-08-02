<?php

namespace Database\Seeders;

use App\Models\DeskripsiTeam;
use Illuminate\Database\Seeder;

class DeskripsiTimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeskripsiTeam::create([
            'deskripsi' => 'deskripsi team',
        ]);
    }
}
