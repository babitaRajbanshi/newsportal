<?php

namespace Database\Seeders;

use App\Models\Advertise;
use Illuminate\Database\Seeder;

class AdvertiseSeeder extends Seeder
{
    public const BANNER = 'https://jawaaf.com/storage/01M7ACH5G9GW5B81SNKESVVC75.jpg';

    public function run(): void
    {
        // Remove the old ads so there are no duplicates
        Advertise::query()->delete();

        $companies = [
            'Himalayan Bank'       => 'https://www.himalayanbank.com',
            'Ncell Axiata'         => 'https://www.ncell.axiata.com',
            'Nepal Telecom'        => 'https://www.ntc.net.np',
            'Daraz Nepal'          => 'https://www.daraz.com.np',
            'Yeti Airlines'        => 'https://www.yetiairlines.com',
            'Chaudhary Group'      => 'https://www.chaudharygroup.com',
            'Hotel Annapurna'      => 'https://www.annapurna.com.np',
            'Sajilo Mart'          => 'https://www.sajilomart.com',
            'Kathmandu University' => 'https://ku.edu.np',
            'Buddha Air'           => 'https://www.buddhaair.com',
        ];

        $i = 0;
        foreach ($companies as $company => $link) {
            Advertise::forceCreate([
                'company_name' => $company,
                'contact_no' => '98' . str_pad((string) (41000000 + $i * 137531), 8, '0', STR_PAD_LEFT),
                'expiry_date' => now()->addDays(30 * ($i + 1))->toDateString(),
                'banner' => self::BANNER,
                'redirect_link' => $link,
            ]);
            $i++;
        }
    }
}
