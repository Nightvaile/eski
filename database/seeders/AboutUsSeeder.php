<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $AboutData = [
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at mollis libero.
            Mauris pellentesque risus quis egestas porta. Curabitur justo risus, luctus eu luctus dignissim, vulputate eu leo.
             Donec sit amet urna purus.Nullam a dolor vestibulum, vehicula velit a, volutpat risus.
             Sed ligula purus, ullamcorper nec malesuada in, facilisis ac elit. Aenean viverra iaculis dui, sed sagittis dolor mollis pellentesque.
             Quisque tempor sed mi eget faucibus. Curabitur varius non ante vitae fermentum. Fusce eu pulvinar elit, nec aliquam arcu.
             Curabitur accumsan velit quis odio accumsan malesuada nec et tellus.
             Etiam lobortis mi ut quam porttitor, eget tincidunt nisl semper. Morbi posuere a sem at dignissim.
             Etiam vitae diam vel metus auctor tempus consectetur quis lectus. Duis nisl lorem, tincidunt quis posuere nec, tincidunt et velit.
             Fusce sit amet enim molestie, cursus velit dignissim, fringilla elit. In convallis pharetra nisl, sed scelerisque neque elementum nec.
             Pellentesque quis dolor eu libero luctus iaculis. Vestibulum sapien mi, sagittis ut eros et, malesuada sollicitudin nunc.
             Pellentesque neque libero, tincidunt eu feugiat at, consectetur id massa. In in eleifend eros.',
            'link-name' => 'Linkedln',
            'link'=>'https://www.linkedin.com/in/mehmet-harun-kaya-7b094b23b/',
            'img'=>null,
            'video'=>null,

        ];
        AboutUs::create($AboutData);
    }
}
