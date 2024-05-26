<?php

namespace Database\Seeders;

use App\Models\Fillter;
use App\Models\Product;
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
            ['name'=>'2.8K'],
            ['name'=>'4K'],
            ['name'=>'Độ phân giải khác'],
        ]);

        $parentRAM = Fillter::create(['name'=>'RAM']);
        $parentRAM->children()->createMany([
            ['name'=>'4GB'],
            ['name'=>'8GB'],
            ['name'=>'16GB'],
            ['name'=>'32GB'],
            ['name'=>'Trên 32GB'],
        ]);


        $parentCPU = Fillter::create(['name'=>'CPU']);
        $parentCPU->children()->createMany([
            ['name'=>'CPU INTEL'],
            ['name'=>'CPU AMD'],
            ['name'=>'INTEL CELERON'],
            ['name'=>'INTEL PENTIUM'],
            ['name'=>'Core i3'],
            ['name'=>'Core i5'],
            ['name'=>'Core i7'],
            ['name'=>'Core i9'],
            ['name'=>'Ryzen 3'],
            ['name'=>'Ryzen 5'],
            ['name'=>'Ryzen 7'],
        ]);

        $parentTHEHECPU = Fillter::create(['name'=>'Thế hệ CPU']);
        $parentTHEHECPU->children()->createMany([
            ['name'=>'PC Intel Gen10th'],
            ['name'=>'PC Intel Gen11th'],
            ['name'=>'PC Intel Gen12th'],
            ['name'=>'PC Intel Gen13th'],
        ]);

        $parentNHUCAU= Fillter::create(['name'=>'Theo nhu cầu']);
        $parentNHUCAU->children()->createMany([
            ['name'=>'Văn Phòng'],
            ['name'=>'Gaming'],
            ['name'=>'Đồ Hoạ'],
        ]);

        $parentDUNGLUONG = Fillter::create(['name'=>'Dung lượng']);
        $parentDUNGLUONG->children()->createMany([
            ['name'=>'128GB'],
            ['name'=>'240GB'],
            ['name'=>'256GB'],
            ['name'=>'360GB'],
            ['name'=>'480GB'],
            ['name'=>'500GB'],
            ['name'=>'512GB'],
            ['name'=>'1TB'],
            ['name'=>'2TB'],
            ['name'=>'4TB'],
        ]);

        $parentTGPH = Fillter::create(['name'=>'Thời gian phản hồi']);
        $parentTGPH->children()->createMany([
            ['name'=>'0.5ms (GTG)'],
            ['name'=>'1ms (GTG)'],
            ['name'=>'2ms (GTG)'],
            ['name'=>'4ms (GTG)'],
            ['name'=>'5ms (GTG)'],
            ['name'=>'8ms (GTG)'],
            ['name'=>'10ms (GTG)'],
            ['name'=>'12ms (GTG)'],
        ]);

        $parentTAMNEN = Fillter::create(['name'=>'Tấm nền']);
        $parentTAMNEN->children()->createMany([
            ['name'=>'IPS'],
            ['name'=>'PLS'],
            ['name'=>'VA'],
            ['name'=>'TN'],
        ]);
        $parentKTMH = Fillter::create(['name'=>'Kích thước màn hình']);
        $parentKTMH->children()->createMany([
            ['name'=>'11.6 inch'],
            ['name'=>'12.3 inch'],
            ['name'=>'12.4 inch'],
            ['name'=>'12.5 inch'],
            ['name'=>'13 inch'],
            ['name'=>'13.3 inch'],
            ['name'=>'13.4 inch'],
            ['name'=>'13.5 inch'],
            ['name'=>'14 inch'],
            ['name'=>'14.5 inch'],
            ['name'=>'15 inch'],
            ['name'=>'15.6 inch'],
            ['name'=>'16 inch'],
            ['name'=>'17 inch'],
            ['name'=>'17.3 inch'],
            ['name'=>'22 inch'],
            ['name'=>'24 inch'],
            ['name'=>'27 inch'],
            ['name'=>'32 inch'],
            ['name'=>'34 inch'],
        ]);




    }
}
