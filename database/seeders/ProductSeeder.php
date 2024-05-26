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
        //Brand
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

            'name' => 'Bàn phím cơ Dare-U EK87 V2 White',
            'price' => 450000,
            'image' => ' ',
            'CategoryID' =>$CategoryPH->id,
            'BrandID' => $BrandDAREU->id,
        ]);

        Product::create([

            'name' => 'Bàn Phím Cơ Gaming E-Dra EK387L Pink',
            'price' => 450000,
            'image' => ' ',
            'CategoryID' =>$CategoryPH->id,
            'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Bàn phím cơ E-Dra EK398 - Beta',
            'price' => 470000,
            'image' => ' ',
            'CategoryID' =>$CategoryPH->id,
            'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Bàn phím Gaming Rapoo V500 Pro 87 Dual Mode Wireless',
            'price' => 580000,
            'image' => ' ',
            'CategoryID' =>$CategoryPH->id,
            'BrandID' => $BrandRAPOO->id,
        ]);

        Product::create([

            'name' => 'Bàn phím cơ E-Dra EK398L - Beta',
            'price' => 630000,
            'image' => ' ',
            'CategoryID' =>$CategoryPH->id,
            'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Bàn phím cơ Dare-U EK1280s v2',
            'price' => 660000,
            'image' => ' ',
            'CategoryID' =>$CategoryPH->id,
            'BrandID' => $BrandDAREU->id,
        ]);

        Product::create([

            'name' => 'Bàn phím quang cơ Gaming Dare-U EK98X PBT Black - Grey',
            'price' => 890000,
            'image' => ' ',
            'CategoryID' =>$CategoryPH->id,
            'BrandID' => $BrandDAREU->id,
        ]);

        Product::create([

            'name' => 'Bàn phím cơ Akko MonsGeek MG108 Prunus Lannesiana',
            'price' => 990000,
            'image' => ' ',
            'CategoryID' =>$CategoryPH->id,
            'BrandID' => $BrandAKKO->id,
        ]);

        Product::create([

            'name' => 'Bàn Phím Cơ Akko 3087 Plus Prunus Lannesiana',
            'price' => 1290000,
            'image' => ' ',
            'CategoryID' =>$CategoryPH->id,
            'BrandID' => $BrandAKKO->id,
        ]);

        Product::create([

            'name' => 'Bàn Phím Akko 3098S SpongeBob',
            'price' => 2310000,
            'image' => ' ',
            'CategoryID' =>$CategoryPH->id,
            'BrandID' => $BrandAKKO->id,
        ]);

        Product::create([

            'name' => 'Chuột Logitech G102 Gen II Lightsync',
            'price' => 375000,
            'image' => ' ',
            'CategoryID' =>$CategoryCH->id,
            'BrandID' => $BrandLOGITECH->id,
        ]);

        Product::create([

            'name' => 'Chuột Rapoo VT200 Gaming RGB',
            'price' => 420000,
            'image' => ' ',
            'CategoryID' =>$CategoryCH->id,
            'BrandID' => $BrandRAPOO->id,
        ]);

        Product::create([

            'name' => 'Chuột Gaming Fuhlen G90',
            'price' => 340000,
            'image' => ' ',
            'CategoryID' =>$CategoryCH->id,
            'BrandID' => $BrandFUHLEN->id,
        ]);

        Product::create([

            'name' => 'Chuột Logitech G403 Hero Gaming',
            'price' => 890000,
            'image' => ' ',
            'CategoryID' =>$CategoryCH->id,
            'BrandID' => $BrandLOGITECH->id,
        ]);

        Product::create([

            'name' => 'Chuột E-Dra EM618 Gaming RGB',
            'price' => 550000,
            'image' => ' ',
            'CategoryID' =>$CategoryCH->id,
            'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Chuột Logitech G402 Hyperion Fury',
            'price' => 620000,
            'image' => ' ',
            'CategoryID' =>$CategoryCH->id,
            'BrandID' => $BrandLOGITECH->id,
        ]);

        Product::create([

            'name' => 'Chuột Razer Viper 8KHz',
            'price' => 1650000,
            'image' => ' ',
            'CategoryID' =>$CategoryCH->id,
            'BrandID' => $BrandRAZER->id,
        ]);

        Product::create([

            'name' => 'Chuột Gaming Razer DeathAdder Essential - Ergonomic Đen',
            'price' => 490000,
            'image' => ' ',
            'CategoryID' =>$CategoryCH->id,
            'BrandID' => $BrandRAZER->id,
        ]);

        Product::create([

            'name' => 'Chuột Gaming Fuhlen G90 ProX Green',
            'price' => 500000,
            'image' => ' ',
            'CategoryID' =>$CategoryCH->id,
            'BrandID' => $BrandFUHLEN->id,
        ]);

        Product::create([

            'name' => 'Chuột Gaming không dây Rapoo VT950S Black',
            'price' => 1390000,
            'image' => ' ',
            'CategoryID' =>$CategoryCH->id,
            'BrandID' => $BrandRAPOO->id,
        ]);

        Product::create([

            'name' => 'Tai nghe Gaming Fuhlen H5',
            'price' => 210000,
            'image' => ' ',
            'CategoryID' =>$CategoryTN->id,
            'BrandID' => $BrandFUHLEN->id,
        ]);

        Product::create([

            'name' => 'Tai nghe Gaming Dare-U EH406',
            'price' => 290000,
            'image' => ' ',
            'CategoryID' =>$CategoryTN->id,
            'BrandID' => $BrandDAREU->id,
        ]);

        Product::create([

            'name' => 'Tai Nghe Rapoo VH310',
            'price' => 330000,
            'image' => ' ',
            'CategoryID' =>$CategoryTN->id,
            'BrandID' => $BrandRAPOO->id,
        ]);

        Product::create([

            'name' => 'Tai Nghe Gaming Dare-U EH416 7.1 RGB',
            'price' => 350000,
            'image' => ' ',
            'CategoryID' =>$CategoryTN->id,
            'BrandID' => $BrandDAREU->id,
        ]);

        Product::create([

            'name' => 'Tai Nghe Gaming Rapoo VH500C',
            'price' => 450000,
            'image' => ' ',
            'CategoryID' =>$CategoryTN->id,
            'BrandID' => $BrandRAPOO->id,
        ]);

        Product::create([

            'name' => 'Tai nghe Gaming Corsair HS55 Carbon',
            'price' => 820000,
            'image' => ' ',
            'CategoryID' =>$CategoryTN->id,
            'BrandID' => $BrandCORSAIR->id,
        ]);
        Product::create([

            'name' => 'Tai nghe Gaming Logitech G335',
            'price' => 1220000,
            'image' => ' ',
            'CategoryID' =>$CategoryTN->id,
            'BrandID' => $BrandLOGITECH->id,
        ]);

        Product::create([

            'name' => 'Tai nghe Razer BlackShark V2 X',
            'price' => 1119000,
            'image' => ' ',
            'CategoryID' =>$CategoryTN->id,
            'BrandID' => $BrandRAZER->id,
        ]);

        Product::create([

            'name' => 'Tai nghe Razer Electra V2-Digital',
            'price' => 1750000,
            'image' => ' ',
            'CategoryID' =>$CategoryTN->id,
            'BrandID' => $BrandRAZER->id,
        ]);

        Product::create([

            'name' => 'Tai nghe Gaming Corsair Virtuoso RGB Wireless High Fidelity',
            'price' => 3590000,
            'image' => ' ',
            'CategoryID' =>$CategoryTN->id,
            'BrandID' => $BrandCORSAIR->id,
        ]);

        Product::create([

            'name' => 'Ghế Gaming E-Dra Yummy EGC232 V2-Đen',
            'price' => 1750000,
            'image' => ' ',
            'CategoryID' =>$CategoryGHE->id,
            'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Ghế Gaming E-Dra Yummy EGC232 V2-Đỏ Đen',
            'price' => 1750000,
            'image' => ' ',
            'CategoryID' =>$CategoryGHE->id,
            'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Ghế Gaming E-Dra Skeleton EGC220',
            'price' => 3590000,
            'image' => ' ',
            'CategoryID' =>$CategoryGHE->id,
            'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Ghế Gaming Cooler Master Caliber R3',
            'price' => 4000000,
            'image' => ' ',
            'CategoryID' =>$CategoryGHE->id,
            'BrandID' => $BrandCOOLERMASTER->id,
        ]);

        Product::create([

            'name' => 'Ghế Gaming Corsair TC100 RELAXED Leatherette',
            'price' => 4100000,
            'image' => ' ',
            'CategoryID' =>$CategoryGHE->id,
            'BrandID' => $BrandCORSAIR->id,
        ]);

        Product::create([

            'name' => 'Ghế Gaming E-Dra Nemesis EGC221-Trắng',
            'price' => 4290000,
            'image' => ' ',
            'CategoryID' =>$CategoryGHE->id,
            'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Ghế Gaming E-Dra Nemesis EGC221-Đỏ',
            'price' => 4390000,
            'image' => ' ',
            'CategoryID' =>$CategoryGHE->id,
            'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Ghế Corsair T3 Rush Fabric gaming (2023)-Xám trắng',
            'price' => 6690000,
            'image' => ' ',
            'CategoryID' =>$CategoryGHE->id,
            'BrandID' => $BrandCORSAIR->id,
        ]);

        Product::create([

            'name' => 'Ghế Corsair T3 Rush Fabric gaming (2023)-Xám than',
            'price' => 6690000,
            'image' => ' ',
            'CategoryID' =>$CategoryGHE->id,
            'BrandID' => $BrandCORSAIR->id,
        ]);

        Product::create([

            'name' => 'Ghế Corsair T3 Rush Fabric gaming (2023)-Nâu than',
            'price' => 6690000,
            'image' => ' ',
            'CategoryID' =>$CategoryGHE->id,
            'BrandID' => $BrandCORSAIR->id,
        ]);
    }
}
