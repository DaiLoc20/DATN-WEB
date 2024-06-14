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
            ['name'=>'Dưới 10 triệu','ProductID'=> 1 ],
            ['name'=>'Dưới 10 triệu','ProductID'=> 12 ],
            ['name'=>'Từ 10 đến 20 triệu','ProductID'=> 2],
            ['name'=>'Từ 10 đến 20 triệu','ProductID'=> 3],
            ['name'=>'Từ 10 đến 20 triệu','ProductID'=> 4],
            ['name'=>'Từ 10 đến 20 triệu','ProductID'=> 5],
            ['name'=>'Từ 10 đến 20 triệu','ProductID'=> 6],
            ['name'=>'Từ 10 đến 20 triệu','ProductID'=> 7],
            ['name'=>'Từ 10 đến 20 triệu','ProductID'=> 8],
            ['name'=>'Từ 10 đến 20 triệu','ProductID'=> 9],
            ['name'=>'Từ 10 đến 20 triệu','ProductID'=> 10],
            ['name'=>'Từ 10 đến 20 triệu','ProductID'=> 11],
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
            ['name'=>'8GB','ProductID'=>1],
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
            ['name'=>'Core i3',
             'ProductID'=> 1

            ],
            ['name'=>'Core i5'],
            ['name'=>'Core i7'],
            ['name'=>'Core i9'],
            ['name'=>'Ryzen 3'],
            ['name'=>'Ryzen 5'],
            ['name'=>'Ryzen 7'],
        ]);

        $parentTHEHECPU = Fillter::create(['name'=>'Thế hệ CPU']);
        $parentTHEHECPU->children()->createMany([
            ['name'=>'PC Intel Gen10th','ProductID'=> 1],
            ['name'=>'PC Intel Gen11th'],
            ['name'=>'PC Intel Gen12th'],
            ['name'=>'PC Intel Gen13th'],
        ]);

        $parentNHUCAU= Fillter::create(['name'=>'Theo nhu cầu']);
        $parentNHUCAU->children()->createMany([
            ['name'=>'Văn Phòng'],
            ['name'=>'Gaming','ProductID'=> 1 ],
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

        $parentHANG = Fillter::create(['name'=>'Hãng']);
        $parentHANG->children()->createMany([
            ['name'=>'ASUS'],
            ['name'=>'ACER'],
            ['name'=>'DELL'],
            ['name'=>'HP'],
            ['name'=>'MSI'],
            ['name'=>'LENOVO'],
            ['name'=>'GIGABYTE'],
            ['name'=>'KINGMAX'],
            ['name'=>'KINGFAST'],
            ['name'=>'KINGSTON'],
            ['name'=>'INTEL'],
            ['name'=>'SAMSUNG'],
            ['name'=>'ADATA'],
            ['name'=>'CORSAIR'],
            ['name'=>'COLORFULL'],
            ['name'=>'VGA NVIDIA'],
            ['name'=>'VGA AMD'],
            ['name'=>'VIEWSONIC'],
            ['name'=>'AOC'],
            ['name'=>'E-DRA'],
            ['name'=>'VSP'],
            ['name'=>'AMD'],
            ['name'=>'WESTERN'],
            ['name'=>'ASROCK'],
            ['name'=>'XIGMATEK'],
            ['name'=>'REDMOON'],
            ['name'=>'COOLER MASTER'],
            ['name'=>'Dare-U'],
            ['name'=>'Rapoo'],
            ['name'=>'Akko'],
            ['name'=>'Logitech'],
            ['name'=>'Fuhlen'],
            ['name'=>'Razer'],
            ['name'=>'COOLMOON'],
            ['name'=>'KINGMASTER'],
            ['name'=>'TENDA'],

        ]);

        $parentPKLT = Fillter::create(['name'=>'Phụ kiện laptop']);
        $parentPKLT->children()->createMany([
            ['name'=>'Ba lô & túi'],
            ['name'=>'Đế tản nhiệt'],
            ['name'=>'Bộ vệ sinh'],
            ['name'=>'Pin & Adapter'],
        ]);

        $parentPKG = Fillter::create(['name'=>'Phụ kiện gear']);
        $parentPKG->children()->createMany([
            ['name'=>'Keycap'],
            ['name'=>'Nút lick chuột'],
            ['name'=>'Nút nguồn'],
            ['name'=>'Giá đỡ tai nghe'],
        ]);

        $parentPKTN = Fillter::create(['name'=>'Phụ kiện tản nhiệt']);
        $parentPKTN->children()->createMany([
            ['name'=>'Keo tản nhiệt'],
            ['name'=>'Gong socket'],
            ['name'=>'Hub điều khiển'],
        ]);

        $parentPKVGAN = Fillter::create(['name'=>'Phụ kiện VGA & Nguồn']);
        $parentPKVGAN->children()->createMany([
            ['name'=>'Giá đỡ VGA'],
            ['name'=>'Cáp nguồn nối dài'],
        ]);

        $parentPKMH = Fillter::create(['name'=>'Phụ kiện màn hình']);
        $parentPKMH->children()->createMany([
            ['name'=>'Chân màn hình'],
            ['name'=>'Cáp màn hình'],
        ]);

        $parentPKOC = Fillter::create(['name'=>'Phụ kiện ổ cứng']);
        $parentPKOC->children()->createMany([
            ['name'=>'Caddy Bay'],
            ['name'=>'Thanh tản nhiệt'],
            ['name'=>'Cáp sata'],
        ]);

        $parentPKM = Fillter::create(['name'=>'Phụ kiện mạng']);
        $parentPKM->children()->createMany([
            ['name'=>'Đầu mạng'],
            ['name'=>'Cáp mạng'],
            ['name'=>'Card mạng'],
        ]);
    }
}
