<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name'=>'PC']);
        Category::create(['name'=>'Laptop']);
        Category::create(['name'=>'Màn hình máy tính']);
        //Thuộc SSD - HDD - USB
        $parentSHU = Category::create(['name'=>'SSD - HDD - USB']);
        $parentSHU->children()->createMany([
            ['name'=>'SSD'],
            ['name'=>'HDD'],
            ['name'=>'USB'],
        ]);
         //Thuộc SSD - HDD - USB
        //Thuộc Linh kiện
        $parentLK = Category::create(['name'=>'Linh Kiện']);
        $parentLK->children()->createMany([
            ['name'=>'CPU - Bộ vi xử lý'],
            ['name'=>'Mainboard - Bo mạch chủ'],
            ['name'=>'Case - Thùng máy'],
            ['name'=>'PSU - Nguồn máy tính'],
            ['name'=>'VGA - Card màn hình'],
            ['name'=>'Bộ nhớ RAM'],
            ['name'=>'Tản nhiệt PC'],
        ]);
        //Thuộc Linh kiện
        //Thuộc Phụ kiện
        $parentPK = Category::create(['name'=>'Phụ Kiện']);
        $parentPK->children()->createMany([
            ['name'=>'Phụ Kiện Laptop'],
            ['name'=>'Phụ Kiện Gear'],
            ['name'=>'Phụ kiện Tản nhiệt'],
            ['name'=>'Phụ kiện VGA & Nguồn'],
            ['name'=>'Phụ kiện Màn hình'],
            ['name'=>'Phụ kiện Ổ cứng'],
            ['name'=>'Phụ kiện Mạng'],
        ]);
        //Thuộc Phụ kiện
        //Thuộc Phím Chuột Tai Nghe
        $parentPCT =  Category::create(['name'=>'Phím, Chuột, Tai Nghe']);
        $parentPCT->children()->createMany([
            ['name'=>'Phím'],
            ['name'=>'Chuột'],
            ['name'=>'Tai Nghe'],
        ]);
        //Thuộc Phím Chuột Tai Nghe
        Category::create(['name'=>'Ghế Gaming']);
    }
}
