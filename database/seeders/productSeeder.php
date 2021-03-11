<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Perfume',
                'price' => '2000',
                'category' => 'Gadget',
                'description' => 'Perfume with great fragrance',
                'gallery' => 'https://www.takeit2day.com/image/cache/data/french-fragrance/mont%20blanc/mont-blanc-emblem-intense-edt-100-ml-600x800-0.jpg'
            ],
            [
                'name' => 'airpods',
                'price' => '4500',
                'category' => 'Accessory',
                'description' => 'A copy great music great 8D quality',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMrv0ucQN8pBiQoqTRwYA2cIFZh61IZdrCVA&usqp=CAU'
            ],
        ]);
    }
}
