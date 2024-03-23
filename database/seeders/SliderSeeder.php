<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            /*[
            'image'=>'',
            'name'=>'',
            'content'=>'',
            'link'=>'',
            'status'=>'1',
            'position'=>'',
        ],*/
            [
                'image' => 'UserSide/images/slider/slider-1.jpg',
                'name' => 'Erkek',
                'content' => 'Trendleri Yakalayın.',
                'link' => '#',
                'status' => '1',
                'position' => 'text-center',
            ],
            [
                'image' => 'UserSide/images/slider/slider-2.jpg',
                'name' => 'Çocuk',
                'content' => 'Çocuk olmak her zaman güzeldir.',
                'link' => '#',
                'status' => '1',
                'position' => 'text-right',
            ],
            [
                'image' => 'UserSide/images/slider/slider-3.jpg',
                'name' => 'Kadın',
                'content' => 'Güzelliğinin doğası<br>detaylarda saklıdır.',
                'link' => '#',
                'status' => '1',
                'position' => 'text-left',
            ],
            //pasif
            [
                'status' => '0',
            ],
            //aktif boşluk varsa migrationdan geliyordur
            [
                'status' => '0',
            ],
            //aktif boşluk yoksa htmlde ki default çalışıyordur
            [
                'content' => null,
                'image' => null,
                'link' => null,
                'name' => null,
                'position' => null,
                'status' => '0',
//                'position'=> DB::raw('COALESCE(position, NULL)') // bunu insert ederken kullandık
            ],
        ];
        foreach ($sliders as $sliderData) {
            Slider::create($sliderData);
        }

        // Alternatif olarak, insert() fonksiyonu ile birden fazla satırı aynı anda ekleyebilirsiniz
//        Slider::insert($sliders);
    }
}
