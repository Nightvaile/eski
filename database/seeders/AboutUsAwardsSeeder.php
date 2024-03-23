<?php

namespace Database\Seeders;

use App\Models\AboutUsAwards;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class AboutUsAwardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $awardsDatas = [
            [
                'name'=>'',
                'count'=>'',
                'img'=>"UserSide/images/about/awards-logo.png",
            ],
            [
                'name'=>'',
                'count'=>'',
                'img'=>"UserSide/images/about/awards-logo.png",
            ],
            [
                'name'=>'',
                'count'=>'',
                'img'=>"UserSide/images/about/awards-logo.png",
            ],
            [
                'name'=>'',
                'count'=>'',
                'img'=>"UserSide/images/about/awards-logo.png",
            ],
            [
                'name'=>'',
                'count'=>'',
                'img'=>"UserSide/images/about/awards-logo.png",
            ],
        ];
        foreach ($awardsDatas as $memberData) {
            AboutUsAwards::create($memberData);
        }
    }
}
