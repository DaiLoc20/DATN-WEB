<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Category
        $CategoryPC = Category::where('name','PC')->first();
        $CategoryLaptop = Category::where('name','Laptop')->first();
        $CategoryMan = Category::where('name','Màn hình máy tính')->first();

        $CategorySSD = Category::where('name','SSD')->first();
        $CategoryHDD = Category::where('name','HDD')->first();
        $CategoryUSB = Category::where('name','USB')->first();

        $CategoryCPU = Category::where('name','CPU - Bộ vi xử lý')->first();
        $CategoryMAIN =  Category::where('name','Mainboard - Bo mạch chủ')->first();
        $CategoryCASE =  Category::where('name','Case - Thùng máy')->first();
        $CategoryPSU =  Category::where('name','PSU - Nguồn máy tính')->first();
        $CategoryVGA = Category::where('name','VGA - Card màn hình')->first();
        $CategoryRAM = Category::where('name','Bộ nhớ RAM')->first();
        $CategoryTNPC = Category::where('name','Tản nhiệt PC')->first();

        $CategoryPKLT = Category::where('name','Phụ Kiện Laptop')->first();
        $CategoryPKGE = Category::where('name','Phụ Kiện Gear')->first();
        $CategoryPKTN = Category::where('name','Phụ kiện Tản nhiệt')->first();
        $CategoryPKVGA = Category::where( 'name','Phụ kiện VGA & Nguồn')->first();
        $CategoryPKMH = Category::where('name','Phụ kiện Màn hình')->first();
        $CategoryPKOC = Category::where('name','Phụ kiện Ổ cứng')->first();
        $CategoryPKMG = Category::where('name','Phụ kiện Mạng')->first();

        $CategoryPH = Category::where('name','Phím')->first();
        $CategoryCH = Category::where('name','Chuột')->first();
        $CategoryTN = Category::where('name',' Tai Nghe')->first();

        $CategoryGHE = Category::where('name','Ghế Gaming')->first();
        //Category


        //Brand
        $BrandASUS = Brand::where('name','ASUS')->first();
        $BrandACER = Brand::where('name','ACER')->first();
        $BrandDELL = Brand::where('name','DELL')->first();
        $BrandHP = Brand::where('name','HP')->first();
        $BrandMSI = Brand::where('name','MSI')->first();
        $BrandLENOVO = Brand::where('name','LENOVO')->first();
        $BrandGIGABYTE = Brand::where('name','GIGABYTE')->first();
        $BrandKINGMAX= Brand::where('name','KINGMAX')->first();
        $BrandKINGFAST = Brand::where('name','KINGFAST')->first();
        $BrandKINGSTON= Brand::where('name','KINGSTON')->first();
        $BrandINTEL = Brand::where('name','INTEL')->first();
        $BrandSAMSUNG = Brand::where('name','SAMSUNG')->first();
        $BrandADATA = Brand::where('name','ADATA')->first();
        $BrandCORSAIR = Brand::where('name','CORSAIR')->first();
        $BrandCOLORFUL = Brand::where('name','COLORFUL')->first();
        $BrandVGANVIDI = Brand::where('name','VGA NVIDIA')->first();
        $BrandVGAADM = Brand::where('name','VGA ADM')->first();
        $BrandVIEWSONIC = Brand::where('name','VIEWSONIC')->first();
        $BrandAOC = Brand::where('name','AOC')->first();
        $BrandEDRA = Brand::where('name','E-Dra')->first();
        $BrandVSP = Brand::where('name','VSP')->first();
        $BrandAMD = Brand::where('name','AMD')->first();
        //Brand

    }
}
