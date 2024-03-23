<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactSocial;

class ContactSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socials=[
            [
                'name'=>'facebook',
                'url'=>"https://tr-tr.facebook.com/",
            ],
            [
                'name'=>'twitter',
                'url'=>"https://twitter.com/?lang=tr",
            ],
            [
                'name'=>'dribbble',
                'url'=>"https://dribbble.com/shots",
            ],
            [
                'name'=>'google',
                'url'=>"https://www.google.com/intl/tr/gmail/about/",
            ],
            [
                'name'=>'pinterest',
                'url'=>"https://tr.pinterest.com/",
            ],
        ];
        foreach ($socials as $social) {
            ContactSocial::create($social);
        }
    }
}
