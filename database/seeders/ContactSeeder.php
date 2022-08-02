<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'deskripsi_contact' => 'deskritpsi contact',
            'alamat_contact' => 'alamat contact',
            'email_contact' => 'email contact',
            'call_contact' => 'call contact',
        ]);
    }
}
