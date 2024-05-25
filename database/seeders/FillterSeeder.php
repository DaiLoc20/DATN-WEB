<?php

namespace Database\Seeders;

use App\Models\Fillter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FillterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parentGIA = Fillter::create(['name'=>'Giá']);
        $parentGIA->children()->createMany([
            ['name'=>'Dưới 10 triệu'],
            ['name'=>'Từ 10 đến 15 triệu'],
            ['name'=>'Từ 20 đến 25 triệu'],
            ['name'=>'Từ 25 đến 35 triệu'],
            ['name'=>'Từ 35 đến 45 triệu'],
            ['name'=>'Từ 45 đến 60 triệu'],
        ]);

        $parentTSQ = Fillter::create(['name'=>'Tần số quét']);
        $parentTSQ->children()->createMany([
            ['name'=>'60Hz'],
            ['name'=>'75Hz'],
            ['name'=>'100Hz'],
            ['name'=>'120Hz'],
            ['name'=>'144Hz'],
            ['name'=>'165Hz'],
            ['name'=>'240Hz'],

        ]);

        $parentDPG = Fillter::create(['name'=>'Độ phân giải']);
        $parentDPG->children()->createMany([
            ['name'=>'HD'],
            ['name'=>'HD+'],
            ['name'=>'Full HD'],
            ['name'=>'240Hz'],
            ['name'=>'2.8K'],
            ['name'=>'4K'],
            ['name'=>'Độ phân giải khác'],
        ]);

    }
}
