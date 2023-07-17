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
            [
                'last_name' => 'Balili',
                'first_name' => 'Louise Demean',
                'middle_name' => 'V.',
                'address' => 'Ilijan Norte, Tubigon, Bohol',
                'birth_date' => '2000-09-09',
                'phone_number' => '09993138692',
                'email' => 'balililouisedemean@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Flores',
                'first_name' => 'Rosalino',
                'middle_name' => 'Tumabang',
                'phone_number' => '09359766852',
                'address' => 'Pinayagan Sur, Tubigon, Bohol.',
                'birth_date' => '2002-12-29',
                'email' => 'fross0988@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Calunia',
                'first_name' => 'Lester',
                'middle_name' => 'Tumabang',
                'phone_number' => '09359766852',
                'address' => 'Pinayagan Sur, Tubigon, Bohol.',
                'birth_date' => '2002-12-29',
                'email' => 'wencalunia78@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Calunia',
                'first_name' => 'Hanie',
                'middle_name' => 'Cosinero',
                'phone_number' => '09359766852',
                'address' => 'Pinayagan Sur, Tubigon, Bohol.',
                'birth_date' => '2002-12-29',
                'email' => 'iyancalunia01@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Encina',
                'first_name' => 'Altair Jeriko',
                'middle_name' => 'Basco',
                'phone_number' => '09753767355',
                'address' => 'Poolba, Tubigon, Bohol.',
                'birth_date' => '2001-12-08',
                'email' => 'altenci0812@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Caminos',
                'first_name' => 'Apple Jean',
                'middle_name' => 'Andoy',
                'phone_number' => '0977455645',
                'address' => 'Calape, Bohol.',
                'birth_date' => '2000-08-04',
                'email' => 'applegwaps23@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Calunia',
                'first_name' => 'Hanie Allayna',
                'middle_name' => 'Cosinero',
                'phone_number' => '0977455645',
                'address' => 'Calape, Bohol.',
                'birth_date' => '2000-08-04',
                'email' => 'hanieallaynacalunia@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Reid',
                'first_name' => 'Robert James',
                'middle_name' => 'V.',
                'phone_number' => '0977455645',
                'address' => 'Los Angeles, California.',
                'birth_date' => '2000-08-04',
                'email' => 'robertjreid27@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Flores',
                'first_name' => 'Maribel',
                'middle_name' => 'C.',
                'phone_number' => '0977455645',
                'address' => 'Calape, Bohol.',
                'birth_date' => '2000-08-04',
                'email' => 'mrblflrs9301@gmail.com',
                'initial_deposit' => 20000,
            ],
        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
