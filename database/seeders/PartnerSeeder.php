<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat 8 data partner dummy menggunakan Faker
        Partner::create([
            'name' => 'PT Telkom Indonesia',
            'logo_url' => 'https://placeholder.co/200x200'
        ]);

        Partner::create([
            'name' => 'PT Bank Mandiri',
            'logo_url' => 'https://placeholder.co/200x200'
        ]);

        Partner::create([
            'name' => 'PT Pertamina',
            'logo_url' => 'https://placeholder.co/200x200'
        ]);

        Partner::create([
            'name' => 'PT PLN',
            'logo_url' => 'https://placeholder.co/200x200'
        ]);

        Partner::create([
            'name' => 'PT Garuda Indonesia',
            'logo_url' => 'https://placeholder.co/200x200'
        ]);

        Partner::create([
            'name' => 'PT Astra International',
            'logo_url' => 'https://placeholder.co/200x200'
        ]);

        Partner::create([
            'name' => 'PT Indofood',
            'logo_url' => 'https://placeholder.co/200x200'
        ]);

        Partner::create([
            'name' => 'PT Unilever Indonesia',
            'logo_url' => 'https://placeholder.co/200x200'
        ]);
    }
}
