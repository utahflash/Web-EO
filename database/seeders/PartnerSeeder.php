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
        // Buat data partner dengan logo_path yang akan diisi melalui admin panel
        Partner::create([
            'name' => 'PT Telkom Indonesia',
            'logo_path' => null
        ]);

        Partner::create([
            'name' => 'PT Bank Mandiri',
            'logo_path' => null
        ]);

        Partner::create([
            'name' => 'PT Pertamina',
            'logo_path' => null
        ]);

        Partner::create([
            'name' => 'PT PLN',
            'logo_path' => null
        ]);

        Partner::create([
            'name' => 'PT Garuda Indonesia',
            'logo_path' => null
        ]);

        Partner::create([
            'name' => 'PT Astra International',
            'logo_path' => null
        ]);

        Partner::create([
            'name' => 'PT Indofood',
            'logo_path' => null
        ]);

        Partner::create([
            'name' => 'PT Unilever Indonesia',
            'logo_path' => null
        ]);
    }
}
