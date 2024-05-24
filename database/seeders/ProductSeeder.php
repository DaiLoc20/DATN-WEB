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
        $CategoryPC = Category::where('name','PC')->first();
        $CategoryLaptop = Category::where('name','Laptop')->first();
        $CategoryMan = Category::where('name','Màn hình máy tính')->first();
        $CategoryLK = Category::where('name','Linh kiện')->first();
        $CategoryPK = Category::where('name','Phụ kiện')->first();
        $CategoryPCT = Category::where('name','Phím ,Chuột, Tai Nghe')->first();
        $CategoryGHE = Category::where('name','Ghế Gaming')->first();
        $CategorySSD = Category::where('name','SSD')->first();
        $CategoryHDD = Category::where('name','HDD')->first();
        $CategoryUSB = Category::where('name','USB')->first();

        $BrandASUS = Brand::where('name','ASUS')->first();
        $BrandACER = Brand::where('name','ACER')->first();
        $BrandDELL = Brand::where('name','DELL')->first();
        $BrandHP = Brand::where('name','HP')->first();
        $BrandMSI = Brand::where('name','MSI')->first();
        $BrandLENOVO = Brand::where('name','LENOVO')->first();
        $BrandGIGABYTE = Brand::where('name','GIGABYTE')->first();
        $BrandKINGMAX= Brand::where('name','KINGMAX')->first();
        $BrandKINGFAST = Brand::where('name','KINGFAST')->first();
        $BrandINTEL = Brand::where('name','INTEL')->first();
        $BrandSAMSUNG = Brand::where('name','SAMSUNG')->first();
        $BrandADATA = Brand::where('name','ADATA')->first();
        $BrandCORSAIR = Brand::where('name','CORSAIR')->first();
        $BrandCOLORFUL = Brand::where('name','COLORFUL')->first();
        $BrandVGANVIDI = Brand::where('name','VGA NVIDIA')->first();
        $BrandVGAADM = Brand::where('name','VGA ADM')->first();



        Product::create([

            'name' => 'PC Gaming STAR CHICKEN MINI',
            'price' => 6990000,
            'image' => ' ',
            'CategoryID' =>$CategoryPC->id,
            'BrandID' => $BrandVGANVIDI->id,
        ]);


        Product::create([

            'name' => 'PC Gaming STAR CHICKEN PLUS WHITE',
            'price' => 10195000,
            'image' => ' ',
            'CategoryID' => $CategoryPC->id,
            'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([

            'name' => 'PC Gaming STAR CYPHER',
            'price' => 11490000,
            'image' => ' ',
            'CategoryID' => $CategoryPC->id,
            'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([

            'name' => 'PC Gaming STAR CHICKEN ASSASSIN',
            'price' => 11770000,
            'image' => ' ',
            'CategoryID' =>  $CategoryPC->id,
            'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([

            'name' => 'PC Gaming STAR CHICKEN PLUS',
            'price' => 12900000,
            'image' => ' ',
            'CategoryID' =>  $CategoryPC->id,
            'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([

            'name' => 'PC Gaming STAR CHICKEN AKIRA',
            'price' => 12900000,
            'image' => ' ',
            'CategoryID' =>  $CategoryPC->id,
            'BrandID' => $BrandVGANVIDI->id,
        ]);


        Product::create([

            'name' => 'PC Gaming STAR RELAW',
            'price' => 15495000,
            'image' => ' ',
            'CategoryID' =>  $CategoryPC->id,
            'BrandID' => $BrandVGANVIDI->id,
        ]);


        Product::create([

            'name' => 'PC Gaming STAR CHICKEN AQUA',
            'price' => 20240000,
            'image' => ' ',
            'CategoryID' =>  $CategoryPC->id,
            'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([

            'name' => 'PC Gaming STAR JETT',
            'price' => 2495000,
            'image' => ' ',
            'CategoryID' =>  $CategoryPC->id,
            'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([

            'name' => 'PC Gaming STAR ZERO TO HERO',
            'price' => 27660000,
            'image' => ' ',
            'CategoryID' =>  $CategoryPC->id,
            'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([

            'name' => 'PC Gaming STAR CHICKEN SUPER LUCE',
            'price' => 12980000,
            'image' => ' ',
            'CategoryID' =>  $CategoryPC->id,
            'BrandID' => $BrandVGAADM->id,
        ]);

        Product::create([

            'name' => 'Laptop Acer Aspire 3 A315 59 381E',
            'price' => 9490000,
            'image' => ' ',
            'CategoryID' =>$CategoryLaptop->id,
            'BrandID' => $BrandACER->id,
        ]);

        Product::create([

            'name' => 'Laptop ASUS Vivobook 14 X1404ZA NK386W',
            'price' => 9890000,
            'image' => ' ',
            'CategoryID' =>$CategoryLaptop->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Laptop ASUS Vivobook X1504ZA NJ582W',
            'price' => 9990000,
            'image' => ' ',
            'CategoryID' =>$CategoryLaptop->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Laptop HP 15s-fq5231TU',
            'price' => 11900000,
            'image' => ' ',
            'CategoryID' =>$CategoryLaptop->id,
            'BrandID' => $BrandHP->id,
        ]);

        Product::create([

            'name' => 'Laptop Asus Vivobook X1605VA MB105W',
            'price' => 14890000,
            'image' => ' ',
            'CategoryID' =>$CategoryLaptop->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Laptop Acer Nitro V 15 ANV15 51 58AN',
            'price' => 18790000,
            'image' => ' ',
            'CategoryID' =>$CategoryLaptop->id,
            'BrandID' => $BrandACER->id,
        ]);

        Product::create([

            'name' => 'Laptop Gaming Lenovo Legion 5 R7000 APH9',
            'price' => 24990000,
            'image' => ' ',
            'CategoryID' =>$CategoryLaptop->id,
            'BrandID' => $BrandLENOVO->id,
        ]);

        Product::create([

            'name' => 'Laptop Gaming Lenovo LOQ 15IRX9 83DV0092VN',
            'price' => 31449000,
            'image' => ' ',
            'CategoryID' =>$CategoryLaptop->id,
            'BrandID' => $BrandLENOVO->id,
        ]);

        Product::create([

            'name' => 'Laptop Gaming ASUS ROG Strix G16 G614JU N3135W',
            'price' => 31890000,
            'image' => ' ',
            'CategoryID' =>$CategoryLaptop->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Laptop Gaming Lenovo Legion 7 16IRX9 - White',
            'price' => 63490000,
            'image' => ' ',
            'CategoryID' =>$CategoryLaptop->id,
            'BrandID' => $BrandLENOVO->id,
        ]);
    }
}
