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
        Category::create(['name'=>'Linh kiện']);
        Category::create(['name'=>'Phụ kiện']);
        Category::create(['name'=>'Phím ,Chuột, Tai Nghe']);
        Category::create(['name'=>'Ghế Gaming']);
        Category::create(['name'=>'SSD']);
        Category::create(['name'=>'HDD']);
        Category::create(['name'=>'USB']);
    }
}
