<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Brand::create(['name'=>'ASUS']);
      Brand::create(['name'=>'ACER']);
      Brand::create(['name'=>'DELL']);
      Brand::create(['name'=>'HP']);
      Brand::create(['name'=>'MSI']);
      Brand::create(['name'=>'LENOVO']);
      Brand::create(['name'=>'GIGABYTE']);
      Brand::create(['name'=>'KINGMAX']);
      Brand::create(['name'=>'KINGSTON']);
      Brand::create(['name'=>'KINGFAST']);
      Brand::create(['name'=>'INTEL']);
      Brand::create(['name'=>'SAMSUNG']);
      Brand::create(['name'=>'ADATA']);
      Brand::create(['name'=>'CORSAIR']);
      Brand::create(['name'=>'COLORFUL']);
      Brand::create(['name'=>'VGA NVIDIA']);
      Brand::create(['name'=>'VGA ADM']);
      Brand::create(['name'=>'VIEWSONIC']);
      Brand::create(['name'=>'AOC']);
    }
}
