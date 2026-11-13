<?php

namespace Database\Seeders;

use App\Models\Advertise;
use Illuminate\Database\Seeder;

class AdvertiseSeeder extends Seeder
{
    public const BANNER = 'https://jawaaf.com/storage/01M7ACH5G9GW5B81SNKESVVC75.jpg';

    public function run(): void
    {
        $companies = [
            'Himalayan Bank', 'Ncell Axiata', 'Nepal Telecom', 'Daraz Nepal', 'Yeti Airlines',
            'Chaudhary Group', 'Hotel Annapurna', 'Sajilo Mart', 'Kathmandu University', 'Buddha Air',
        ];

        foreach ($companies as $i => $company) {
            Advertise::forceCreate([
                'company_name' => $company,
                'contact_no' => '98' . str_pad((string) (41000000 + $i * 137531), 8, '0', STR_PAD_LEFT),
                'expiry_date' => now()->addDays(30 * ($i + 1))->toDateString(),
                'banner' => self::BANNER,
                'redirect_link' => 'https://example.com/' . str($company)->slug(),
            ]);
        }
    }
}
