<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Fillter;

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
        $BrandWESTERN = Brand::where('name','WESTERN')->first();
        $BrandASROCK = Brand::where('name','ASROCK')->first();
        $BrandXIGMATEK = Brand::where('name','XIGMATEK')->first();
        $BrandREDMOON = Brand::where('name','REDMOON')->first();
        $BrandCOOLERMASTER = Brand::where('name','COOLER MASTER')->first();
        $BrandDAREU = Brand::where('name','Dare-U')->first();
        $BrandRAPOO = Brand::where('name','Rapoo')->first();
        $BrandAKKO = Brand::where('name','Akko')->first();
        $BrandLOGITECH = Brand::where('name','Logitech')->first();
        $BrandFUHLEN = Brand::where('name','Fuhlen')->first();
        $BrandRAZER = Brand::where('name','Razer')->first();

        $BrandCOOLMOON = Brand::where('name','COOLMOON')->first();
        $BrandLLS = Brand::where('name','LianLiStrimer')->first();
        $BrandVGA = Brand::where('name','VGA')->first();
        $BrandKINGMASTER = Brand::where('name','KINGMASTER')->first();
        $BrandTENDA = Brand::where('name','TENDA')->first();
        //Brand

       Product::create([
            'name' => 'PC Gaming STAR CHICKEN MINI | GT 1030, Intel',
            'price' => 6990000,'image' => ' ','CategoryID' =>$CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN PLUS WHITE',
            'price' => 10195000,'image' => ' ', 'CategoryID' => $CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create(['name' => 'PC Gaming STAR CYPHER',
        'price' => 11490000,'image' => ' ','CategoryID' => $CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN ASSASSIN',
            'price' => 11770000, 'image' => ' ','CategoryID' =>  $CategoryPC->id, 'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN PLUS',
            'price' => 12900000, 'image' => ' ','CategoryID' =>  $CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN AKIRA',
            'price' => 12900000, 'image' => ' ','CategoryID' =>  $CategoryPC->id, 'BrandID' => $BrandVGANVIDI->id,
        ]);


        Product::create([
            'name' => 'PC Gaming STAR RELAW',
            'price' => 15495000,'image' => ' ','CategoryID' =>  $CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);


        Product::create([
            'name' => 'PC Gaming STAR CHICKEN AQUA',
            'price' => 20240000, 'image' => ' ','CategoryID' =>  $CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR JETT',
            'price' => 2495000, 'image' => ' ','CategoryID' =>  $CategoryPC->id, 'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR ZERO TO HERO',
            'price' => 27660000, 'image' => ' ','CategoryID' =>  $CategoryPC->id, 'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN SUPER LUCE',
            'price' => 12980000,'image' => ' ','CategoryID' =>  $CategoryPC->id,'BrandID' => $BrandVGAADM->id,
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

        Product::create([

            'name' => 'Màn hình Gaming Asus VA24EHF',
            'price' => 2350000,
            'image' => ' ',
            'CategoryID' =>$CategoryMan->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Màn hình 27 inch Asus VA27EHF',
            'price' => 2950000,
            'image' => ' ',
            'CategoryID' =>$CategoryMan->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Màn Hình 27 inch Viewsonic VX2718-P-MHD',
            'price' => 3580000,
            'image' => ' ',
            'CategoryID' =>$CategoryMan->id,
            'BrandID' => $BrandVIEWSONIC->id,
        ]);

        Product::create([

            'name' => 'Màn Hình Gaming Viewsonic VX2719-PC-MHD',
            'price' => 4340000,
            'image' => ' ',
            'CategoryID' =>$CategoryMan->id,
            'BrandID' => $BrandVIEWSONIC->id,
        ]);

        Product::create([

            'name' => 'Màn Hình Gaming Asus VG27VQ',
            'price' => 4850000,
            'image' => ' ',
            'CategoryID' =>$CategoryMan->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Màn hình AOC 27G2SP/74',
            'price' => 4480000,
            'image' => ' ',
            'CategoryID' =>$CategoryMan->id,
            'BrandID' => $BrandAOC->id,
        ]);

        Product::create([

            'name' => 'Màn hình AOC 27B3CA2/74',
            'price' => 3990000,
            'image' => ' ',
            'CategoryID' =>$CategoryMan->id,
            'BrandID' => $BrandAOC->id,
        ]);

        Product::create([

            'name' => 'Màn hình 27 inch AOC Agon Pro PD27S/74',
            'price' => 8590000,
            'image' => ' ',
            'CategoryID' =>$CategoryMan->id,
            'BrandID' => $BrandAOC->id,
        ]);

        Product::create([

            'name' => 'Màn Hình LCD 24 inch Dell S2422HZ',
            'price' => 3990000,
            'image' => ' ',
            'CategoryID' =>$CategoryMan->id,
            'BrandID' => $BrandDELL->id,
        ]);

        Product::create([

            'name' => 'Màn hình đồ hoạ Dell Ultrasharp U2424H',
            'price' => 5670000,
            'image' => ' ',
            'CategoryID' =>$CategoryMan->id,
            'BrandID' => $BrandDELL->id,
        ]);

        Product::create([

            'name' => 'Ổ cứng SSD Adata SU650 120GB',
            'price' => 290000,
            'image' => ' ',
            'CategoryID' =>$CategorySSD->id,
            'BrandID' => $BrandADATA->id,
        ]);

        Product::create([

            'name' => 'Ổ Cứng SSD 128G Colorful SL300',
            'price' => 270000,
            'image' => ' ',
            'CategoryID' =>$CategorySSD->id,
            'BrandID' => $BrandCOLORFUL->id,
        ]);

        Product::create([

            'name' => 'Ổ cứng SSD Kingfast F6M.2 256GB',
            'price' => 390000,
            'image' => ' ',
            'CategoryID' =>$CategorySSD->id,
            'BrandID' => $BrandKINGFAST->id,
        ]);

        Product::create([

            'name' => 'Ổ Cứng SSD 256GB Colorful SL500',
            'price' => 450000,
            'image' => ' ',
            'CategoryID' =>$CategorySSD->id,
            'BrandID' => $BrandCOLORFUL->id,
        ]);

        Product::create([

            'name' => 'Ổ Cứng SSD Colorful SL500 360GB',
            'price' => 460000,
            'image' => ' ',
            'CategoryID' =>$CategorySSD->id,
            'BrandID' => $BrandCOLORFUL->id,
        ]);

        Product::create([

            'name' => 'Ổ cứng HDD 1TB Western Blue',
            'price' => 1240000,
            'image' => ' ',
            'CategoryID' =>$CategoryHDD->id,
            'BrandID' => $BrandWESTERN->id,
        ]);

        Product::create([

            'name' => 'Ổ Cứng HDD 2TB Western Blue',
            'price' => 1530000,
            'image' => ' ',
            'CategoryID' =>$CategoryHDD->id,
            'BrandID' => $BrandWESTERN->id,
        ]);

        Product::create([

            'name' => 'Ổ cứng HDD 1TB Western Black',
            'price' => 2190000,
            'image' => ' ',
            'CategoryID' =>$CategoryHDD->id,
            'BrandID' => $BrandWESTERN->id,
        ]);

        Product::create([

            'name' => 'Ổ Cứng HDD 4TB Western Blue',
            'price' => 2620000,
            'image' => ' ',
            'CategoryID' =>$CategoryHDD->id,
            'BrandID' => $BrandWESTERN->id,
        ]);

        Product::create([

            'name' => 'Ổ cứng HDD 2TB Western Black',
            'price' => 3190000,
            'image' => ' ',
            'CategoryID' =>$CategoryHDD->id,
            'BrandID' => $BrandWESTERN->id,
        ]);

        Product::create([

            'name' => 'USB 32G Kingston DataTraveler Exodia DTX/32GB 3.2',
            'price' => 69000,
            'image' => ' ',
            'CategoryID' =>$CategoryUSB->id,
            'BrandID' => $BrandKINGSTON->id,
        ]);

        Product::create([

            'name' => 'Usb 64G Kingston Data Traveler DTX/64G',
            'price' => 130000,
            'image' => ' ',
            'CategoryID' =>$CategoryUSB->id,
            'BrandID' => $BrandKINGSTON->id,
        ]);

        Product::create([

            'name' => 'Thùng máy Case E-Dra ECS1103',
            'price' => 219000,
            'image' => ' ',
            'CategoryID' =>$CategoryCASE->id,
            'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Thùng máy Case VSP V2880',
            'price' => 225000,
            'image' => ' ',
            'CategoryID' =>$CategoryCASE->id,
            'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'Thùng máy Case VSP V200 - Đen',
            'price' => 279000,
            'image' => ' ',
            'CategoryID' =>$CategoryCASE->id,
            'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'Thùng máy Case VSP Esport Gaming KB09 Black',
            'price' => 329000,
            'image' => ' ',
            'CategoryID' =>$CategoryCASE->id,
            'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'Thùng máy Case VSP V3-603P Pink',
            'price' => 425000,
            'image' => ' ',
            'CategoryID' =>$CategoryCASE->id,
            'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'CPU Intel Core i3 10105F',
            'price' => 1750000,
            'image' => ' ',
            'CategoryID' =>$CategoryCPU->id,
            'BrandID' => $BrandINTEL->id,
        ]);

        Product::create([

            'name' => 'CPU Intel Core I5 12400F',
            'price' => 3290000,
            'image' => ' ',
            'CategoryID' =>$CategoryCPU->id,
            'BrandID' => $BrandINTEL->id,
        ]);

        Product::create([

            'name' => 'CPU Intel Core I7 12700F',
            'price' => 6590000,
            'image' => ' ',
            'CategoryID' =>$CategoryCPU->id,
            'BrandID' => $BrandINTEL->id,
        ]);

        Product::create([

            'name' => 'CPU AMD Ryzen 3 4100',
            'price' => 1990000,
            'image' => ' ',
            'CategoryID' =>$CategoryCPU->id,
            'BrandID' => $BrandAMD->id,
        ]);

        Product::create([

            'name' => 'CPU AMD Ryzen 5 5600G',
            'price' => 3490000,
            'image' => ' ',
            'CategoryID' =>$CategoryCPU->id,
            'BrandID' => $BrandAMD->id,
        ]);

        Product::create([

            'name' => 'Mainboard Asus H310M-K Prime R2.0',
            'price' => 1250000,
            'image' => ' ',
            'CategoryID' =>$CategoryMAIN->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Mainboard Gigabyte H310M D2VX-SI 2.0',
            'price' => 1250000,
            'image' => ' ',
            'CategoryID' =>$CategoryMAIN->id,
            'BrandID' => $BrandGIGABYTE->id,
        ]);

        Product::create([

            'name' => 'Mainboard ASUS Prime H610I Plus D4',
            'price' => 1720000,
            'image' => ' ',
            'CategoryID' =>$CategoryMAIN->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Mainboard Gigabyte B550M Aorus Elite',
            'price' => 2790000,
            'image' => ' ',
            'CategoryID' =>$CategoryMAIN->id,
            'BrandID' => $BrandGIGABYTE->id,
        ]);

        Product::create([

            'name' => 'Mainboard MSI PRO B760-P WIFI',
            'price' => 3300000,
            'image' => ' ',
            'CategoryID' =>$CategoryMAIN->id,
            'BrandID' => $BrandMSI->id,
        ]);

        Product::create([

            'name' => 'Card màn hình VGA ASUS GT 1030 2GB GDDR5 Phoenix OC Edition',
            'price' => 1920000,
            'image' => ' ',
            'CategoryID' =>$CategoryVGA->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Card màn hình VGA ASUS Dual GeForce GTX 1650 OC Edition 4GB GDDR6 EVO',
            'price' => 3390000,
            'image' => ' ',
            'CategoryID' =>$CategoryVGA->id,
            'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Card màn hình VGA ASRock RX 5600 6G CLD 2 Fan',
            'price' => 3490000,
            'image' => ' ',
            'CategoryID' =>$CategoryVGA->id,
            'BrandID' => $BrandASROCK->id,
        ]);

        Product::create([

            'name' => 'Card màn hình VGA ASRock Radeon RX 5600 6GB GDDR6 PGD2',
            'price' => 3990000,
            'image' => ' ',
            'CategoryID' =>$CategoryVGA->id,
            'BrandID' => $BrandASROCK->id,
        ]);

        Product::create([

            'name' => 'Card màn hình VGA GIGABYTE GeForce RTX 3050 EAGLE OC 6G',
            'price' => 5050000,
            'image' => ' ',
            'CategoryID' =>$CategoryVGA->id,
            'BrandID' => $BrandGIGABYTE->id,
        ]);

        Product::create([

            'name' => 'Nguồn Xigmatek X-Power III 350',
            'price' => 360000,
            'image' => ' ',
            'CategoryID' =>$CategoryPSU->id,
            'BrandID' => $BrandXIGMATEK->id,
        ]);

        Product::create([

            'name' => 'Nguồn VSP Delta P350W',
            'price' => 390000,
            'image' => ' ',
            'CategoryID' =>$CategoryPSU->id,
            'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'Nguồn VSP Delta P450W',
            'price' => 480000,
            'image' => ' ',
            'CategoryID' =>$CategoryPSU->id,
            'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'Nguồn Xigmatek Z Power-II 550',
            'price' => 590000,
            'image' => ' ',
            'CategoryID' =>$CategoryPSU->id,
            'BrandID' => $BrandXIGMATEK->id,
        ]);

        Product::create([

            'name' => 'Nguồn Xigmatek Z Power-II 650',
            'price' => 690000,
            'image' => ' ',
            'CategoryID' =>$CategoryPSU->id,
            'BrandID' => $BrandXIGMATEK->id,
        ]);

        Product::create([

            'name' => 'Ram Laptop Kingston 4GB DDR4 2666Mhz',
            'price' => 290000,
            'image' => ' ',
            'CategoryID' =>$CategoryRAM->id,
            'BrandID' => $BrandKINGSTON->id,
        ]);

        Product::create([

            'name' => 'Ram Laptop Adata Premier 4GB DDR4 2666MHz',
            'price' => 290000,
            'image' => ' ',
            'CategoryID' =>$CategoryRAM->id,
            'BrandID' => $BrandADATA->id,
        ]);

        Product::create([

            'name' => 'Ram PC Adata XPG D10 DDR4 8GB 3200Mhz White',
            'price' => 470000,
            'image' => ' ',
            'CategoryID' =>$CategoryRAM->id,
            'BrandID' => $BrandADATA->id,
        ]);

        Product::create([

            'name' => 'Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz',
            'price' => 540000,
            'image' => ' ',
            'CategoryID' =>$CategoryRAM->id,
            'BrandID' => $BrandKINGSTON->id,
        ]);

        Product::create([

            'name' => 'Ram Laptop Kingston 8GB DDR4 3200MHz',
            'price' => 550000,
            'image' => ' ',
            'CategoryID' =>$CategoryRAM->id,
            'BrandID' => $BrandKINGSTON->id,
        ]);

        Product::create([

            'name' => 'Fan Case Redmoon F3 Led RGB - Đen',
            'price' => 95000,
            'image' => ' ',
            'CategoryID' =>$CategoryTNPC->id,
            'BrandID' => $BrandREDMOON->id,
        ]);

        Product::create([

            'name' => 'Fan Case Redmoon F3 Led RGB - Trắng',
            'price' => 95000,
            'image' => ' ',
            'CategoryID' =>$CategoryTNPC->id,
            'BrandID' => $BrandREDMOON->id,
        ]);

        Product::create([

            'name' => 'Tản Nhiệt Khí Cooler Master HYPER 212 SPECTRUM V3',
            'price' => 360000,
            'image' => ' ',
            'CategoryID' =>$CategoryTNPC->id,
            'BrandID' => $BrandCOOLERMASTER->id,
        ]);

        Product::create([

            'name' => 'Tản Nhiệt CPU Cooler Master Hyper 212 Spectrum V2 RGB',
            'price' => 590000,
            'image' => ' ',
            'CategoryID' =>$CategoryTNPC->id,
            'BrandID' => $BrandCOOLERMASTER->id,
        ]);

        Product::create([

            'name' => 'Tản nhiệt CPU Cooler Master Masterliquid ML360L V2 ARGB AiO Cooling',
            'price' => 2250000,
            'image' => ' ',
            'CategoryID' =>$CategoryTNPC->id,
            'BrandID' => $BrandCOOLERMASTER->id,
        ]);

        Product::create([
            'name' => 'Adapter Laptop Asus 20V - 7.5A - 150W ĐTN 6.0 * 3.7 hàng zin',
            'price' => 986000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKLT->id,
            'BrandID' => $BrandASUS->id,
        ]);
        Product::create([
            'name' => 'Pin HP 740 G2, 745 G2, 840 G1,G2 CM03XL (44WH-6cell)',
            'price' => 1075000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKLT->id,
            'BrandID' => $BrandHP->id,
        ]);
        Product::create([
            'name' => 'Pin HP ProBook 430/ 440/ 450 G5/ 470 G4 / RR03XL (48Wh-3cell)',
            'price' => 1200000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKLT->id,
            'BrandID' => $BrandHP->id,
        ]);
        Product::create([
            'name' => 'Pin laptop Dell Inspiron 15 7559/ 7567/ 357F9 (74WH)',
            'price' => 1390000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKLT->id,
            'BrandID' => $BrandDELL->id,
        ]);
        Product::create([
            'name' => 'Adapter Laptop Acer 19V- 3.42A-65W | đầu nhỏ 3.0mm*1.1mm',
            'price' => 480000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKLT->id,
            'BrandID' => $BrandACER->id,
        ]);
        Product::create([
            'name' => 'Adapter Laptop Acer 19V-3.42A-65W | Đầu 5.5mm*1.7 mm',
            'price' => 455000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKLT->id,
            'BrandID' => $BrandACER->id,
        ]);
        Product::create([
            'name' => 'Adapter Laptop Lenoge Lenovo 20V - 2A',
            'price' => 130000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKLT->id,
            'BrandID' => $BrandLENOVO->id,
        ]);
        Product::create([
            'name' => 'Adapter Laptop Lenoge Samsung 19V - 3.16A',
            'price' => 130000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKLT->id,
            'BrandID' => $BrandSAMSUNG->id,
        ]);

        Product::create([
            'name' => 'Keycap Cooler Master SK650',
            'price' => 99000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKGE->id,
            'BrandID' => $BrandCOOLERMASTER->id,
        ]);
        Product::create([
            'name' => 'Keycap ABS nhiều màu 104 phím (giao ngẫu nhiên)',
            'price' => 135000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Keycap Nút bàn phím 104 nút chất liệu PBT nhiều màu',
            'price' => 185000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Keycap Doubleshot xuyên Led cho Game thủ chuyên PUBG',
            'price' => 85000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Nút Click Chuột Thường',
            'price' => 10000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Giá treo Headphone (kèm Nút nguồn lớn)',
            'price' => 115000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Nút nguồn Fami Alienware kèm giá treo tai nghe',
            'price' => 145000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Giá treo Headphone Logo Star (kèm Nút nguồn lớn)',
            'price' => 125000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Giá treo Headphone Xiberia (Đen)',
            'price' => 250000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Keo tản nhiệt HY510 | Tuýp 20G',
            'price' => 12000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKTN->id,
        ]);
        Product::create([
            'name' => 'Keo tản nhiệt HY510 | Hủ 100G',
            'price' => 52000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKTN->id,
        ]);
        Product::create([
            'name' => 'Gông chống cong Magic - Dành CPU Socket 1700',
            'price' => 89000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKTN->id,
        ]);
        Product::create([
            'name' => 'Bộ Hub + Remote Fan RGB Coolmoon',
            'price' => 89000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKTN->id,
        ]);
        Product::create([
            'name' => 'Keo tản nhiệt Arctic MX4 8G (ACTCP00008B)',
            'price' => 599000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKTN->id,
        ]);
        Product::create([
            'name' => 'Cáp Riser Asus ROG Strix Cable | 240mm, PCI-E 3.0, hỗ trợ dựng VGA',
            'price' => 450000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKVGA->id,
            'BrandID' => $BrandASUS ->id,
        ]);
        Product::create([
            'name' => 'Cáp Module Cooler Master PCIe 5.0 Cong 90 Độ (Type-2)',
            'price' => 240000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKVGA->id,
            'BrandID' => $BrandCOOLERMASTER ->id,
        ]);
        Product::create([
            'name' => 'Giá đỡ VGA Coolmoon CM-GH 2 (Đen)',
            'price' => 169000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKVGA->id,
            'BrandID' => $BrandCOOLMOON ->id,
        ]);
        Product::create([
            'name' => 'Dây Led Coolmoon C200EX + Dây nối dài EX24 24 pin màu trắng',
            'price' => 430000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKVGA->id,
            'BrandID' => $BrandCOOLMOON ->id,
        ]);
        Product::create([
            'name' => 'Dây nguồn nối dài Lian Li Strimer Plus V2',
            'price' => 1749000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKVGA->id,
            'BrandID' => $BrandLLS ->id,
        ]);
        Product::create([
            'name' => 'Khung dựng VGA Cooler Master V3 | Kèm Riser PCIE 4.0',
            'price' => 1440000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKVGA->id,
            'BrandID' => $BrandCOOLERMASTER->id,
        ]);
        Product::create([
            'name' => 'Cáp DisplayPort qua DisplayPort 1.8m',
            'price' => 55000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMH->id,

        ]);
        Product::create([
            'name' => 'Cáp VGA ZIN 1.5m | Không nhiễu QSD',
            'price' => 35000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMH->id,
            'BrandID' => $BrandVGA->id,
        ]);
        Product::create([
            'name' => 'Cáp HDMI 20M - Dây Dẹt',
            'price' => 135000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Cáp VGA trắng 1.5m - 2 đầu xanh loại tốt',
            'price' => 18000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Giá treo màn hình North Bayou F80 - Đen | 17 - 30 inch',
            'price' => 329000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Giá treo màn hình North Bayou H180 - Xám | 17 - 27 inch',
            'price' => 54000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Giá treo màn hình AOC AM400S - Silver | 17 - 34 inch',
            'price' => 829000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMH->id,
            'BrandID' => $BrandAOC->id,
        ]);
        Product::create([
            'name' => 'Giá treo màn hình North Bayou FC55 - Đen | 24 - 35 inch',
            'price' => 1790000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Cáp VGA Cao Cấp LCD Unitek Chống Nhiễu 5M YC505G',
            'price' => 110000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMH->id,
            'BrandID' => $BrandVGA->id,
        ]);

        Product::create([
            'name' => 'Thanh Tản Nhiệt M.2 SSD NVMe Thermorysis',
            'price' => 55000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKOC->id,
        ]);

        Product::create([
            'name' => 'Cáp chuyển đổi nguồn Sata qua ATA (IDE)',
            'price' => 15000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKOC->id,
        ]);

        Product::create([
            'name' => 'Cáp Sata dài 85cm Foxconn (Sata Drive/Server Board) (QSD)',
            'price' => 10000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKOC->id,
        ]);
        Product::create([
            'name' => 'Caddy Bay Mỏng 9.5mm (Lắp thay SSD cho Laptop)',
            'price' => 37000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKOC->id,
        ]);
        Product::create([
            'name' => 'Caddy Bay Dày 12.5mm (Lắp thay SSD cho Laptop)',
            'price' => 37000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKOC->id,
        ]);

        Product::create([
            'name' => 'Cáp Mạng Đúc Sẵn 1.5M Kingmaster',
            'price' => 9000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMG->id,
            'BrandID' =>$BrandKINGMASTER->id,
        ]);
        Product::create([
            'name' => 'Cáp Lan đúc sẵn 5M loại tốt Kingmaster',
            'price' => 25000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMG->id,
            'BrandID' =>$BrandKINGMASTER->id,
        ]);
        Product::create([
            'name' => 'Cáp Lan đúc sẵn 2M loại tốt Kingmaster',
            'price' => 11000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMG->id,
            'BrandID' =>$BrandKINGMASTER->id,
        ]);
        Product::create([
            'name' => 'Cáp Lan đúc sẵn 3M loại tốt Kingmaster',
            'price' => 15000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMG->id,
            'BrandID' =>$BrandKINGMASTER->id,
        ]);
        Product::create([
            'name' => 'Cáp Lan đúc sẵn 25M loại tốt Kingmaster',
            'price' => 80000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMG->id,
            'BrandID' =>$BrandKINGMASTER->id,
        ]);
        Product::create([
            'name' => 'Card PCIE Wifi 6 Asus PCE-AX3000 (No Box)',
            'price' => 639000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMG->id,
            'BrandID' =>$BrandASUS->id,
        ]);
        Product::create([
            'name' => 'Hộp đầu mạng RJ45 Tenda 5E (100c/hộp)',
            'price' => 95000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMG->id,
            'BrandID' =>$BrandTENDA->id,
        ]);
        Product::create([
            'name' => 'Card Mạng Không Dây TP-Link TL-WN781ND',
            'price' => 160000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMG->id,

        ]);
        Product::create([
            'name' => 'Router Wifi Asus RT AX53U AX1800',
            'price' => 1279000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMG->id,
            'BrandID' =>$BrandASUS->id,
        ]);
        Product::create([
            'name' => 'Router Wifi Asus RT AX1800HP',
            'price' => 1390000,
            'image' => ' ',
            'CategoryID' =>$CategoryPKMG->id,
            'BrandID' =>$BrandASUS->id,
        ]);




    }
}
