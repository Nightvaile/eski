<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $katSeed = [
//            [
//                'parent_id',
//                'name',
//                'status',
//            ],
//            [
//                'parent_id' => null,
//                'name' => 'Erkek',
//                'status' => '1',
//            ],
//            [
//                'parent_id' => null,
//                'name' => 'Kadın',
//                'status' => '1',
//            ],
//            [
//                'parent_id' => null,
//                'name' => 'Çocuk',
//                'status' => '1',
//            ],
//            //Giyim
//            [
//                'parent_id' => '1',
//                'name' => 'Giyim',
//                'status' => '1',
//            ],
//            [
//                'parent_id' => '2',
//                'name' => 'Giyim',
//                'status' => '1',
//            ],
//            [
//                'parent_id' => '3',
//                'name' => 'Giyim',
//                'status' => '1',
//            ],
//            //Ayakkabı
//            [
//                'parent_id' => '1',
//                'name' => 'Ayakkabı',
//                'status' => '1',
//            ],
//            [
//                'parent_id' => '2',
//                'name' => 'Ayakkabı',
//                'status' => '1',
//            ],
//            [
//                'parent_id' => '3',
//                'name' => 'Ayakkabı',
//                'status' => '1',
//            ],
//            //Aksesuar
//            [
//                'parent_id' => '1',
//                'name' => 'Aksesuar',
//                'status' => '1',
//            ],
//            [
//                'parent_id' => '2',
//                'name' => 'Aksesuar',
//                'status' => '1',
//            ],
//            [
//                'parent_id' => '3',
//                'name' => 'Aksesuar',
//                'status' => '1',
//            ],
//            //Pantalon
//            [
//                'parent_id' => '1',
//                'name' => 'Pantalon',
//                'status' => '1',
//            ],
//            [
//                'parent_id' => '2',
//                'name' => 'Pantalon',
//                'status' => '1',
//            ],
//            [
//                'parent_id' => '3',
//                'name' => 'Pantalon',
//                'status' => '1',
//            ],
//        ];
//        foreach ($katSeed as $katData) {
//            Category::create($katData);
//        }

        $erkek = Category::create([
            'parent_id' => null,
            'name' => 'Erkek',
            'status' => '1',
        ]);
        $kadin = Category::create([
            'parent_id' => null,
            'name' => 'Kadın',
            'status' => '1',
        ]);
        $cocuk = Category::create([
            'parent_id' => null,
            'name' => 'Çocuk',
            'status' => '1',
        ]);
//        $=Category::create([
//            'parent_id' => $->id,
//            'name' => '',
//            'status' => '1',
//        ]);
//        $=Category::create([
//            'parent_id' => $->id,
//            'name' => '',
//            'status' => '1',
//        ]);
//        $=Category::create([
//            'parent_id' => $->id,
//            'name' => '',
//            'status' => '1',
//        ]);
        $e_Giyim=Category::create([
            'parent_id' => $erkek->id,
            'name' => 'Giyim',
            'status' => '1',
        ]);
        $k_Giyim=Category::create([
            'parent_id' => $kadin->id,
            'name' => 'Giyim',
            'status' => '1',
        ]);
        $c_Giyim=Category::create([
            'parent_id' => $cocuk->id,
            'name' => 'Giyim',
            'status' => '1',
        ]);
        $e_Ayakkabi=Category::create([
            'parent_id' => $erkek->id,
            'name' => 'Ayakkabı',
            'status' => '1',
        ]);
        $k_Ayakkabi=Category::create([
            'parent_id' => $kadin->id,
            'name' => 'Ayakkabı',
            'status' => '1',
        ]);
        $c_Ayakkabi=Category::create([
            'parent_id' => $cocuk->id,
            'name' => 'Ayakkabı',
            'status' => '1',
        ]);
        $e_Aksesuar=Category::create([
            'parent_id' => $erkek->id,
            'name' => 'Aksesuar',
            'status' => '1',
        ]);
        $k_Aksesuar=Category::create([
            'parent_id' => $kadin->id,
            'name' => 'Aksesuar',
            'status' => '1',
        ]);
        $c_Aksesuar=Category::create([
            'parent_id' => $cocuk->id,
            'name' => 'Aksesuar',
            'status' => '1',
        ]);

    }
}
