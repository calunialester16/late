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
                'last_name' => 'Calunia',
                'first_name' => 'Lester',
                'middle_name' => 'Cosinero',
                'address' => 'Guiwanon, Tubigon, Bohol',
                'birth_date' => '2002-02-12',
                'phone_number' => '09817947036',
                'email' => 'calunialester07@gmail.com',
                'initial_deposit' => 50000,
            ],
        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
