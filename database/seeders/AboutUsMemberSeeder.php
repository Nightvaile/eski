<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUsMember;

class AboutUsMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $memberDatas = [
            [
                'name' => 'Nightvaile',
                'position' => 'Computer Engineer',
                'profile' => 'https://i.pinimg.com/736x/29/26/83/292683e3e62e96235caf8af8218b1045.jpg',
            ],
            [
                'name' => 'AkaliKDA',
                'position' => 'Cyber Security Specialist',
                'profile' => 'https://i.cnnturk.com/i/cnnturk/75/0x555/5e10348ebf214416e0623e26.jpg',
            ],
            [
                'name' => 'Mehmet Harun Kaya',
                'position' => 'Computer Programmer',
                'profile' => 'https://wallpapers.com/images/hd/miles-morales-falling-upside-down-turikai4inacualc.webp',
            ],
            [
                'name' => 'Ömür Emre Ömür',
                'position' => 'Computer Engineer',
                'profile' => "UserSide/images/User.png",
            ],
            [
                'name' => 'Nightvaile',
                'position' => 'Computer Engineer',
                'profile' => "UserSide/images/Tiger.png",
            ],
        ];
        foreach ($memberDatas as $memberData) {
            AboutUsMember::create($memberData);
        }
    }
}
