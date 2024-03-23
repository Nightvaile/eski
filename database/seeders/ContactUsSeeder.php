<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactUs;
class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $info=[
            'adress'=>'Mustafa Kemal Paşa, Vadipark Bilişim Akademisi, Uzman Cd, 34275 Arnavutköy/İstanbul',
            'phone'=>'4444 5 97',
            'fax'=>'0 (212) 682 04 08',
            'mail'=>'arnavutkoy@arnavutkoy.bel.tr',
        ];
        ContactUs::create($info);
    }
}
