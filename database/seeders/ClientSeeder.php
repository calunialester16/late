<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Lenteria',
                'first_name' => 'Benjie',
                'middle_name' => 'Basio',
                'address' => 'Pob. Centro, Clarin, Bohol',
                'birth_date' => '1979-10-02',
                'phone_number' => '09090892350',
                'email' => 'benjielenteria@yahoo.com'
            ],
            [
                'last_name' => 'Lentrix',
                'first_name' => 'Hawkman',
                'middle_name' => 'Machiacode',
                'address' => 'Pob. Centro, Clarin, Bohol',
                'birth_date' => '1979-10-02',
                'phone_number' => '09090892350',
                'email' => 'hawkmanlentrix@gmail.com'
            ],
            [
                'last_name' => 'Iphitech',
                'first_name' => 'Bench',
                'middle_name' => 'Developer',
                'address' => 'Pob. Centro, Clarin, Bohol',
                'birth_date' => '1979-10-02',
                'phone_number' => '09090892350',
                'email' => 'iphitech.lenteria.benjie@gmail.com'
            ],
        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
