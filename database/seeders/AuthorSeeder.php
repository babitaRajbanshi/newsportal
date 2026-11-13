<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public const IMAGE = 'https://codeit.com.np/storage/01KKTTSY50WXVXMB3AWJTFJSPA.avif';

    public function run(): void
    {
        $names = [
            'Ramesh Adhikari',
            'Sita Sharma',
            'Bikash Thapa',
            'Anita Gurung',
            'Prakash Karki',
            'Sunita Rai',
            'Dipak Shrestha',
            'Mina Tamang',
            'Suresh Poudel',
            'Kabita Basnet',
        ];

        foreach ($names as $name) {
            Author::forceCreate([
                'name' => $name,
                'image' => self::IMAGE,
            ]);
        }
    }
}
