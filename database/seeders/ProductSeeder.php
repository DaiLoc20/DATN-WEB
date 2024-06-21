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
            'price' => 6990000,'image' => 'public/img_datn/pc/PC Gaming STAR CHICKEN MINI.jpg, public/img_datn/pc/PC Gaming STAR CHICKEN MINI(1).jp, public/img_datn/pc/PC Gaming STAR CHICKEN MINI(2).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN MINI(3).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN MINI(4).jpg','CategoryID' =>$CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN PLUS WHITE',
            'price' => 10195000,'image' => 'public/img_datn/pc/PC Gaming STAR CHICKEN PLUS White.jpg, public/img_datn/pc/PC Gaming STAR CHICKEN PLUS White(1).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN PLUS White(2).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN PLUS White(3).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN PLUS White(4).jpg ', 'CategoryID' => $CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create(['name' => 'PC Gaming STAR CYPHER',
        'price' => 11490000,'image' => 'public/img_datn/pc/PC Gaming STAR CYPHER.jpg, public/img_datn/pc/PC Gaming STAR CYPHER(1).jpg, public/img_datn/pc/PC Gaming STAR CYPHER(2).jpg, public/img_datn/pc/PC Gaming STAR CYPHER(3).jpg, public/img_datn/pc/PC Gaming STAR CYPHER(4).jpg ','CategoryID' => $CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN ASSASSIN',
            'price' => 11770000, 'image' => 'public/img_datn/pc/PC Gaming STAR CHICKEN ASSASSIN.jpg ','CategoryID' =>  $CategoryPC->id, 'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN PLUS',
            'price' => 12900000, 'image' => 'public/img_datn/pc/PC Gaming STAR CHICKEN PLUS White.jpg, public/img_datn/pc/PC Gaming STAR CHICKEN PLUS White(1).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN PLUS White(2).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN PLUS White(3).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN PLUS White(4).jpg ','CategoryID' =>  $CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN AKIRA',
            'price' => 12900000, 'image' => 'public/img_datn/pc/PC Gaming STAR CHICKEN AKIRA.jpg ','CategoryID' =>  $CategoryPC->id, 'BrandID' => $BrandVGANVIDI->id,
        ]);


        Product::create([
            'name' => 'PC Gaming STAR RELAW',
            'price' => 15495000,'image' => 'public/img_datn/pc/PC Gaming STAR RELAW.jpg ','CategoryID' =>  $CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);


        Product::create([
            'name' => 'PC Gaming STAR CHICKEN AQUA',
            'price' => 20240000, 'image' => 'public/img_datn/pc/PC Gaming STAR CHICKEN AQUA.jpg, public/img_datn/pc/PC Gaming STAR CHICKEN AQUA(1).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN AQUA(2).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN AQUA(3).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN AQUA(4).jpg ','CategoryID' =>  $CategoryPC->id,'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR JETT',
            'price' => 2495000, 'image' => 'public/img_datn/pc/PC Gaming STAR JETT.jpg ','CategoryID' =>  $CategoryPC->id, 'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR ZERO TO HERO',
            'price' => 27660000, 'image' => 'public/img_datn/pc/PC Gaming STAR ZERO TO HERO.jpg, public/img_datn/pc/PC Gaming STAR ZERO TO HERO(1).jpg, public/img_datn/pc/PC Gaming STAR ZERO TO HERO(2).jpg, public/img_datn/pc/PC Gaming STAR ZERO TO HERO(3).jpg, public/img_datn/pc/PC Gaming STAR ZERO TO HERO(4).jpg ','CategoryID' =>  $CategoryPC->id, 'BrandID' => $BrandVGANVIDI->id,
        ]);

        Product::create([
            'name' => 'PC Gaming STAR CHICKEN SUPER LUCE',
            'price' => 12980000,'image' => 'public/img_datn/pc/PC Gaming STAR CHICKEN SUPER LUCE.jpg, public/img_datn/pc/PC Gaming STAR CHICKEN SUPER LUCE(1).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN SUPER LUCE(2).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN SUPER LUCE(3).jpg, public/img_datn/pc/PC Gaming STAR CHICKEN SUPER LUCE(4).jpg ','CategoryID' =>  $CategoryPC->id,'BrandID' => $BrandVGAADM->id,
        ]);

        Product::create([
            'name' => 'Laptop Acer Aspire 3 A315 59 381E',
            'price' => 9490000,'image' => 'public/img_datn/laptop/Laptop Acer Aspire 3 A315 59 381E.jpg, public/img_datn/laptop/Laptop Acer Aspire 3 A315 59 381E(1).jpg, public/img_datn/laptop/Laptop Acer Aspire 3 A315 59 381E(2).jpg, public/img_datn/laptop/Laptop Acer Aspire 3 A315 59 381E(3).jpg, public/img_datn/laptop/Laptop Acer Aspire 3 A315 59 381E(4).jpg ','CategoryID' =>$CategoryLaptop->id,'BrandID' => $BrandACER->id,
        ]);

        Product::create([
            'name' => 'Laptop ASUS Vivobook 14 X1404ZA NK386W',
            'price' => 9890000,'image' => 'public/img_datn/laptop/Laptop ASUS Vivobook 14 X1404ZA NK386W.jpg, public/img_datn/laptop/Laptop ASUS Vivobook 14 X1404ZA NK386W(1).jpg, public/img_datn/laptop/Laptop ASUS Vivobook 14 X1404ZA NK386W(2).jpg, public/img_datn/laptop/Laptop ASUS Vivobook 14 X1404ZA NK386W(3).jpg, public/img_datn/laptop/Laptop ASUS Vivobook 14 X1404ZA NK386W(4).jpg ','CategoryID' =>$CategoryLaptop->id,'BrandID' => $BrandASUS->id,
        ]);

        Product::create([
            'name' => 'Laptop ASUS Vivobook X1504ZA NJ582W',
            'price' => 9990000,'image' => 'public/img_datn/laptop/Laptop ASUS Vivobook X1504ZA NJ582W.jpg, public/img_datn/laptop/Laptop ASUS Vivobook X1504ZA NJ582W(1).jpg, public/img_datn/laptop/Laptop ASUS Vivobook X1504ZA NJ582W(2).jpg, public/img_datn/laptop/Laptop ASUS Vivobook X1504ZA NJ582W(3).jpg, public/img_datn/laptop/Laptop ASUS Vivobook X1504ZA NJ582W(4).jpg ','CategoryID' =>$CategoryLaptop->id,'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Laptop HP 15s-fq5231TU',
            'price' => 11900000,'image' => 'public/img_datn/laptop/Laptop HP 15s-fq5231TU.jpg, public/img_datn/laptop/Laptop HP 15s-fq5231TU(1).jpg, public/img_datn/laptop/Laptop HP 15s-fq5231TU(2).jpg, public/img_datn/laptop/Laptop HP 15s-fq5231TU(3).jpg, public/img_datn/laptop/Laptop HP 15s-fq5231TU(4).jpg ','CategoryID' =>$CategoryLaptop->id,'BrandID' => $BrandHP->id,
        ]);

        Product::create([

            'name' => 'Laptop Asus Vivobook X1605VA MB105W',
            'price' => 14890000,'image' => 'public/img_datn/laptop/Laptop Asus Vivobook X1605VA MB105W.jpg, public/img_datn/laptop/Laptop Asus Vivobook X1605VA MB105W(1).jpg,public/img_datn/laptop/Laptop Asus Vivobook X1605VA MB105W(2).jpg,public/img_datn/laptop/Laptop Asus Vivobook X1605VA MB105W(3).jpg,public/img_datn/laptop/Laptop Asus Vivobook X1605VA MB105W(4).jpg ','CategoryID' =>$CategoryLaptop->id,'BrandID' => $BrandASUS->id,

        ]);

        Product::create([

            'name' => 'Laptop Acer Nitro V 15 ANV15 51 58AN',
            'price' => 18790000,'image' => 'public/img_datn/laptop/Laptop Acer Nitro V 15 ANV15 51 58AN.jpg, public/img_datn/laptop/Laptop Acer Nitro V 15 ANV15 51 58AN(1).jpg, public/img_datn/laptop/Laptop Acer Nitro V 15 ANV15 51 58AN(2).jpg, public/img_datn/laptop/Laptop Acer Nitro V 15 ANV15 51 58AN(3).jpg, public/img_datn/laptop/Laptop Acer Nitro V 15 ANV15 51 58AN(4).jpg ','CategoryID' =>$CategoryLaptop->id,'BrandID' => $BrandACER->id,
        ]);

        Product::create([

            'name' => 'Laptop Gaming Lenovo Legion 5 R7000 APH9',
            'price' => 24990000,'image' => 'public/img_datn/laptop/Laptop Gaming Lenovo Legion 5 R7000 APH9.jpg, public/img_datn/laptop/Laptop Gaming Lenovo Legion 5 R7000 APH9(1).jpg, public/img_datn/laptop/Laptop Gaming Lenovo Legion 5 R7000 APH9(2).jpg, public/img_datn/laptop/Laptop Gaming Lenovo Legion 5 R7000 APH9(3).jpg, public/img_datn/laptop/Laptop Gaming Lenovo Legion 5 R7000 APH9(4).jpg ','CategoryID' =>$CategoryLaptop->id,'BrandID' => $BrandLENOVO->id,
        ]);

        Product::create([

            'name' => 'Laptop Gaming Lenovo LOQ 15IRX9 83DV0092VN',
            'price' => 31449000,'image' => 'public/img_datn/laptop/Laptop Gaming Lenovo LOQ 15IRX9 83DV0092VN.jpg, public/img_datn/laptop/Laptop Gaming Lenovo LOQ 15IRX9 83DV0092VN(1).jpg, public/img_datn/laptop/Laptop Gaming Lenovo LOQ 15IRX9 83DV0092VN(2).jpg, public/img_datn/laptop/Laptop Gaming Lenovo LOQ 15IRX9 83DV0092VN(3).jpg, public/img_datn/laptop/Laptop Gaming Lenovo LOQ 15IRX9 83DV0092VN(4).jpg ','CategoryID' =>$CategoryLaptop->id,'BrandID' => $BrandLENOVO->id,
        ]);

        Product::create([

            'name' => 'Laptop Gaming ASUS ROG Strix G16 G614JU N3135W',
            'price' => 31890000,'image' => 'public/img_datn/laptop/Laptop Gaming ASUS ROG Strix G16 G614JU N3135W.jpg, public/img_datn/laptop/Laptop Gaming ASUS ROG Strix G16 G614JU N3135W(1).jpg, public/img_datn/laptop/Laptop Gaming ASUS ROG Strix G16 G614JU N3135W(2).jpg, public/img_datn/laptop/Laptop Gaming ASUS ROG Strix G16 G614JU N3135W(3).jpg, public/img_datn/laptop/Laptop Gaming ASUS ROG Strix G16 G614JU N3135W(4).jpg ','CategoryID' =>$CategoryLaptop->id,'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Laptop Gaming Lenovo Legion 7 16IRX9 - White',
            'price' => 63490000,'image' => 'public/img_datn/laptop/Laptop Gaming Lenovo Legion 7 16IRX9 - White.jpg, public/img_datn/laptop/Laptop Gaming Lenovo Legion 7 16IRX9 - White(1).jpg, public/img_datn/laptop/Laptop Gaming Lenovo Legion 7 16IRX9 - White(2).jpg, public/img_datn/laptop/Laptop Gaming Lenovo Legion 7 16IRX9 - White(3).jpg, public/img_datn/laptop/Laptop Gaming Lenovo Legion 7 16IRX9 - White(4).jpg ','CategoryID' =>$CategoryLaptop->id,'BrandID' => $BrandLENOVO->id,
        ]);

        Product::create([

            'name' => 'Màn hình Gaming Asus VA24EHF',
            'price' => 2350000,'image' => 'public/img_datn/màn hình/Màn hình Gaming Asus VA24EHF.jpg, public/img_datn/màn hình/Màn hình Gaming Asus VA24EHF(1).jpg, public/img_datn/màn hình/Màn hình Gaming Asus VA24EHF(2).jpg, public/img_datn/màn hình/Màn hình Gaming Asus VA24EHF(3).jpg, public/img_datn/màn hình/Màn hình Gaming Asus VA24EHF(4).jpg ','CategoryID' =>$CategoryMan->id,'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Màn hình 27 inch Asus VA27EHF',
            'price' => 2950000,'image' => 'public/img_datn/màn hình/Màn hình 27 inch Asus VA27EHF.jpg ','CategoryID' =>$CategoryMan->id,'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Màn Hình 27 inch Viewsonic VX2718-P-MHD',
            'price' => 3580000,'image' => 'public/img_datn/màn hình/Màn Hình 27 inch Viewsonic VX2718-P-MHD.jpg ','CategoryID' =>$CategoryMan->id,'BrandID' => $BrandVIEWSONIC->id,
        ]);

        Product::create([

            'name' => 'Màn Hình Gaming Viewsonic VX2719-PC-MHD',
            'price' => 4340000,'image' => 'public/img_datn/màn hình/Màn Hình Gaming Viewsonic VX2719-PC-MHD.jpg, public/img_datn/màn hình/Màn Hình Gaming Viewsonic VX2719-PC-MHD(1).jpg, public/img_datn/màn hình/Màn Hình Gaming Viewsonic VX2719-PC-MHD(2).jpg, public/img_datn/màn hình/Màn Hình Gaming Viewsonic VX2719-PC-MHD(3).jpg, public/img_datn/màn hình/Màn Hình Gaming Viewsonic VX2719-PC-MHD(4).jpg ','CategoryID' =>$CategoryMan->id,'BrandID' => $BrandVIEWSONIC->id,
        ]);

        Product::create([

            'name' => 'Màn Hình Gaming Asus VG27VQ',
            'price' => 4850000,'image' => 'public/img_datn/màn hình/Màn Hình Gaming Asus VG27VQ.jpg ','CategoryID' =>$CategoryMan->id,'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Màn hình AOC 27G2SP/74',
            'price' => 4480000,'image' => 'public/img_datn/màn hình/Màn hình AOC 27G2SP74.jpg, public/img_datn/màn hình/Màn hình AOC 27G2SP74(1).jpg, public/img_datn/màn hình/Màn hình AOC 27G2SP74(2).jpg, public/img_datn/màn hình/Màn hình AOC 27G2SP74(3).jpg, public/img_datn/màn hình/Màn hình AOC 27G2SP74(4).jpg ','CategoryID' =>$CategoryMan->id,'BrandID' => $BrandAOC->id,
        ]);

        Product::create([

            'name' => 'Màn hình AOC 27B3CA2/74',
            'price' => 3990000,'image' => 'public/img_datn/màn hình/Màn hình AOC 27B3CA274.jpg, public/img_datn/màn hình/Màn hình AOC 27B3CA274(1).jpg, public/img_datn/màn hình/Màn hình AOC 27B3CA274(2).jpg, public/img_datn/màn hình/Màn hình AOC 27B3CA274(3).jpg, public/img_datn/màn hình/Màn hình AOC 27B3CA274(4).jpg ','CategoryID' =>$CategoryMan->id,'BrandID' => $BrandAOC->id,
        ]);

        Product::create([

            'name' => 'Màn hình 27 inch AOC Agon Pro PD27S/74',
            'price' => 8590000,'image' => 'public/img_datn/màn hình/Màn hình 27 inch AOC Agon Pro PD27S74.jpg, public/img_datn/màn hình/Màn hình 27 inch AOC Agon Pro PD27S74(1).jpg, public/img_datn/màn hình/Màn hình 27 inch AOC Agon Pro PD27S74(2).jpg, public/img_datn/màn hình/Màn hình 27 inch AOC Agon Pro PD27S74(3).jpg, public/img_datn/màn hình/Màn hình 27 inch AOC Agon Pro PD27S74(4).jpg ','CategoryID' =>$CategoryMan->id,'BrandID' => $BrandAOC->id,
        ]);

        Product::create([

            'name' => 'Màn Hình LCD 24 inch Dell S2422HZ',
            'price' => 3990000,'image' => 'public/img_datn/màn hình/Màn Hình LCD 24 inch Dell S2422HZ.jpg ','CategoryID' =>$CategoryMan->id,'BrandID' => $BrandDELL->id,
        ]);

        Product::create([

            'name' => 'Màn hình đồ hoạ Dell Ultrasharp U2424H',
            'price' => 5670000,'image' => 'public/img_datn/màn hình/Màn hình đồ hoạ Dell Ultrasharp U2424H.jpg, public/img_datn/màn hình/Màn hình đồ hoạ Dell Ultrasharp U2424H(1).jpg, public/img_datn/màn hình/Màn hình đồ hoạ Dell Ultrasharp U2424H(2).jpg, public/img_datn/màn hình/Màn hình đồ hoạ Dell Ultrasharp U2424H(3).jpg, public/img_datn/màn hình/Màn hình đồ hoạ Dell Ultrasharp U2424H(4).jpg ','CategoryID' =>$CategoryMan->id,'BrandID' => $BrandDELL->id,
        ]);

        Product::create([

            'name' => 'Ổ cứng SSD Adata SU650 120GB',
            'price' => 290000,'image' => 'public/img_datn/ssd-hdd-usb/Ổ cứng SSD Adata SU650 120GB.jpg, public/img_datn/ssd-hdd-usb/Ổ cứng SSD Adata SU650 120GB(1).jpg, public/img_datn/ssd-hdd-usb/Ổ cứng SSD Adata SU650 120GB(2).jpg ','CategoryID' =>$CategorySSD->id,'BrandID' => $BrandADATA->id,
        ]);

        Product::create([

            'name' => 'Ổ Cứng SSD 128G Colorful SL300',
            'price' => 270000,'image' => 'public/img_datn/ssd-hdd-usb/Ổ Cứng SSD 128G Colorful SL300.jpg, public/img_datn/ssd-hdd-usb/Ổ Cứng SSD 128G Colorful SL300(1).jpg, public/img_datn/ssd-hdd-usb/Ổ Cứng SSD 128G Colorful SL300(2).jpg, public/img_datn/ssd-hdd-usb/Ổ Cứng SSD 128G Colorful SL300(3).jpg ','CategoryID' =>$CategorySSD->id,'BrandID' => $BrandCOLORFUL->id,
        ]);

        Product::create([

            'name' => 'Ổ cứng SSD Kingfast F6M.2 256GB',
            'price' => 390000,'image' => 'public/img_datn/ssd-hdd-usb/Ổ cứng SSD Kingfast F6M.2 256GB.jpg, public/img_datn/ssd-hdd-usb/Ổ cứng SSD Kingfast F6M.2 256GB(1).jpg ','CategoryID' =>$CategorySSD->id,'BrandID' => $BrandKINGFAST->id,
        ]);

        Product::create([

            'name' => 'Ổ Cứng SSD 256GB Colorful SL500',
            'price' => 450000,'image' => 'public/img_datn/ssd-hdd-usb/Ổ Cứng SSD Colorful SL500 360GB.jpg ','CategoryID' =>$CategorySSD->id,'BrandID' => $BrandCOLORFUL->id,
        ]);

        Product::create([

            'name' => 'Ổ Cứng SSD Colorful SL500 360GB',
            'price' => 460000,'image' => 'public/img_datn/ssd-hdd-usb/Ổ Cứng SSD Colorful SL500 360GB.jpg, public/img_datn/ssd-hdd-usb/Ổ Cứng SSD Colorful SL500 360GB(1).jpg, public/img_datn/ssd-hdd-usb/Ổ Cứng SSD Colorful SL500 360GB(2).jpg ','CategoryID' =>$CategorySSD->id,'BrandID' => $BrandCOLORFUL->id,
        ]);

        Product::create([

            'name' => 'Ổ cứng HDD 1TB Western Blue',
            'price' => 1240000,'image' => 'public/img_datn/ssd-hdd-usb/Ổ cứng HDD 1TB Western Blue.jpg, public/img_datn/ssd-hdd-usb/Ổ cứng HDD 1TB Western Blue(1).jpg, public/img_datn/ssd-hdd-usb/Ổ cứng HDD 1TB Western Blue(2).jpg, public/img_datn/ssd-hdd-usb/Ổ cứng HDD 1TB Western Blue(3).jpg ','CategoryID' =>$CategoryHDD->id,'BrandID' => $BrandWESTERN->id,
        ]);

        Product::create([

            'name' => 'Ổ Cứng HDD 2TB Western Blue',
            'price' => 1530000,'image' => 'public/img_datn/ssd-hdd-usb/Ổ Cứng HDD 2TB Western Blue.jpg ','CategoryID' =>$CategoryHDD->id,'BrandID' => $BrandWESTERN->id,
        ]);

        Product::create([

            'name' => 'Ổ cứng HDD 1TB Western Black',
            'price' => 2190000,'image' => 'public/img_datn/ssd-hdd-usb/Ổ cứng HDD 1TB Western Black.jpg, public/img_datn/ssd-hdd-usb/Ổ cứng HDD 1TB Western Black(1).jpg, public/img_datn/ssd-hdd-usb/Ổ cứng HDD 1TB Western Black(2).jpg, public/img_datn/ssd-hdd-usb/Ổ cứng HDD 1TB Western Black(3).jpg ','CategoryID' =>$CategoryHDD->id,'BrandID' => $BrandWESTERN->id,
        ]);

        Product::create([

            'name' => 'Ổ Cứng HDD 4TB Western Blue',
            'price' => 2620000,'image' => 'public/img_datn/ssd-hdd-usb/Ổ Cứng HDD 4TB Western Blue.jpg ','CategoryID' =>$CategoryHDD->id,'BrandID' => $BrandWESTERN->id,
        ]);

        Product::create([

            'name' => 'Ổ cứng HDD 2TB Western Black',
            'price' => 3190000,'image' => 'public/img_datn/ssd-hdd-usb/Ổ cứng HDD 2TB Western Black.jpg ','CategoryID' =>$CategoryHDD->id,'BrandID' => $BrandWESTERN->id,
        ]);

        Product::create([

            'name' => 'USB 32G Kingston DataTraveler Exodia DTX/32GB 3.2',
            'price' => 69000,'image' => 'public/img_datn/ssd-hdd-usb/USB 32G Kingston DataTraveler Exodia DTX32GB 3.2.jpg, public/img_datn/ssd-hdd-usb/USB 32G Kingston DataTraveler Exodia DTX32GB 3.2(1).jpg, public/img_datn/ssd-hdd-usb/USB 32G Kingston DataTraveler Exodia DTX32GB 3.2(2).jpg ','CategoryID' =>$CategoryUSB->id,'BrandID' => $BrandKINGSTON->id,
        ]);

        Product::create([

            'name' => 'Usb 64G Kingston Data Traveler DTX/64G',
            'price' => 130000,'image' => 'public/img_datn/ssd-hdd-usb/Usb 64G Kingston Data Traveler DTX64G.jpg ','CategoryID' =>$CategoryUSB->id,'BrandID' => $BrandKINGSTON->id,
        ]);

        Product::create([

            'name' => 'Thùng máy Case E-Dra ECS1103',
            'price' => 219000,'image' => 'public/img_datn/linh kiện/Thùng máy Case E-Dra ECS1103.jpg ','CategoryID' =>$CategoryCASE->id,'BrandID' => $BrandEDRA->id,
        ]);

        Product::create([

            'name' => 'Thùng máy Case VSP V2880',
            'price' => 225000,'image' => 'public/img_datn/linh kiện/Thùng máy Case VSP V2880.jpg, public/img_datn/linh kiện/Thùng máy Case VSP V2880(1).jpg, public/img_datn/linh kiện/Thùng máy Case VSP V2880(2).jpg, public/img_datn/linh kiện/Thùng máy Case VSP V2880(3).jpg, public/img_datn/linh kiện/Thùng máy Case VSP V2880(4).jpg ','CategoryID' =>$CategoryCASE->id,'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'Thùng máy Case VSP V200 - Đen',
            'price' => 279000,'image' => 'public/img_datn/linh kiện/Thùng máy Case VSP V200-Đen.jpg, public/img_datn/linh kiện/Thùng máy Case VSP V200-Đen(1).jpg, public/img_datn/linh kiện/Thùng máy Case VSP V200-Đen(2).jpg, public/img_datn/linh kiện/Thùng máy Case VSP V200-Đen(3).jpg ','CategoryID' =>$CategoryCASE->id,'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'Thùng máy Case VSP Esport Gaming KB09 Black',
            'price' => 329000,'image' => 'public/img_datn/linh kiện/Thùng máy Case VSP Esport Gaming KB09 Black.jpg, public/img_datn/linh kiện/Thùng máy Case VSP Esport Gaming KB09 Black(1).jpg, public/img_datn/linh kiện/Thùng máy Case VSP Esport Gaming KB09 Black(2).jpg, public/img_datn/linh kiện/Thùng máy Case VSP Esport Gaming KB09 Black(3).jpg, public/img_datn/linh kiện/Thùng máy Case VSP Esport Gaming KB09 Black(4).jpg ','CategoryID' =>$CategoryCASE->id,'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'Thùng máy Case VSP V3-603P Pink',
            'price' => 425000,'image' => 'public/img_datn/linh kiện/Thùng máy Case VSP V3-603P Pink.jpg, public/img_datn/linh kiện/Thùng máy Case VSP V3-603P Pink(1).jpg, public/img_datn/linh kiện/Thùng máy Case VSP V3-603P Pink(2).jpg, public/img_datn/linh kiện/Thùng máy Case VSP V3-603P Pink(3).jpg, public/img_datn/linh kiện/Thùng máy Case VSP V3-603P Pink(4).jpg ','CategoryID' =>$CategoryCASE->id,'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'CPU Intel Core i3 10105F',
            'price' => 1750000,'image' => 'public/img_datn/linh kiện/CPU Intel Core i3 10105F.jpg ','CategoryID' =>$CategoryCPU->id,'BrandID' => $BrandINTEL->id,
        ]);

        Product::create([

            'name' => 'CPU Intel Core I5 12400F',
            'price' => 3290000,'image' => 'public/img_datn/linh kiện/CPU Intel Core I5 12400F.jpg ','CategoryID' =>$CategoryCPU->id,'BrandID' => $BrandINTEL->id,
        ]);

        Product::create([

            'name' => 'CPU Intel Core I7 12700F',
            'price' => 6590000,'image' => 'public/img_datn/linh kiện/CPU Intel Core I7 12700F.jpg ','CategoryID' =>$CategoryCPU->id,'BrandID' => $BrandINTEL->id,
        ]);

        Product::create([

            'name' => 'CPU AMD Ryzen 3 4100',
            'price' => 1990000,'image' => 'public/img_datn/linh kiện/CPU AMD Ryzen 3 4100.jpg ','CategoryID' =>$CategoryCPU->id,'BrandID' => $BrandAMD->id,
        ]);

        Product::create([

            'name' => 'CPU AMD Ryzen 5 5600G',
            'price' => 3490000,'image' => 'public/img_datn/linh kiện/CPU AMD Ryzen 5 5600G.jpg ','CategoryID' =>$CategoryCPU->id,'BrandID' => $BrandAMD->id,
        ]);

        Product::create([

            'name' => 'Mainboard Asus H310M-K Prime R2.0',
            'price' => 1250000,'image' => 'public/img_datn/linh kiện/Mainboard Asus H310M-K Prime R2.0.jpg, public/img_datn/linh kiện/Mainboard Asus H310M-K Prime R2.0(1).jpg, public/img_datn/linh kiện/Mainboard Asus H310M-K Prime R2.0(2).jpg, public/img_datn/linh kiện/Mainboard Asus H310M-K Prime R2.0(3).jpg, public/img_datn/linh kiện/Mainboard Asus H310M-K Prime R2.0(4).jpg ','CategoryID' =>$CategoryMAIN->id,'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Mainboard Gigabyte H310M D2VX-SI 2.0',
            'price' => 1250000,'image' => 'public/img_datn/linh kiện/Mainboard Gigabyte H310M D2VX-SI 2.0.jpg, public/img_datn/linh kiện/Mainboard Gigabyte H310M D2VX-SI 2.0(1).jpg, public/img_datn/linh kiện/Mainboard Gigabyte H310M D2VX-SI 2.0(2).jpg, public/img_datn/linh kiện/Mainboard Gigabyte H310M D2VX-SI 2.0(3).jpg ','CategoryID' =>$CategoryMAIN->id,'BrandID' => $BrandGIGABYTE->id,
        ]);

        Product::create([

            'name' => 'Mainboard ASUS Prime H610I Plus D4',
            'price' => 1720000,'image' => 'public/img_datn/linh kiện/Mainboard ASUS Prime H610I Plus D4.jpg, public/img_datn/linh kiện/Mainboard ASUS Prime H610I Plus D4(1).jpg, public/img_datn/linh kiện/Mainboard ASUS Prime H610I Plus D4(2).jpg, public/img_datn/linh kiện/Mainboard ASUS Prime H610I Plus D4(3).jpg, public/img_datn/linh kiện/Mainboard ASUS Prime H610I Plus D4(4).jpg ','CategoryID' =>$CategoryMAIN->id,'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Mainboard Gigabyte B550M Aorus Elite',
            'price' => 2790000,'image' => 'public/img_datn/linh kiện/Mainboard Gigabyte B550M Aorus Elite.jpg ','CategoryID' =>$CategoryMAIN->id,'BrandID' => $BrandGIGABYTE->id,
        ]);

        Product::create([

            'name' => 'Mainboard MSI PRO B760-P WIFI',
            'price' => 3300000,'image' => 'public/img_datn/linh kiện/Mainboard MSI PRO B760-P WIFI.jpg, public/img_datn/linh kiện/Mainboard MSI PRO B760-P WIFI(1).jpg, public/img_datn/linh kiện/Mainboard MSI PRO B760-P WIFI(2).jpg, public/img_datn/linh kiện/Mainboard MSI PRO B760-P WIFI(3).jpg, public/img_datn/linh kiện/Mainboard MSI PRO B760-P WIFI(4).jpg ','CategoryID' =>$CategoryMAIN->id,'BrandID' => $BrandMSI->id,
        ]);

        Product::create([

            'name' => 'Card màn hình VGA ASUS GT 1030 2GB GDDR5 Phoenix OC Edition',
            'price' => 1920000,'image' => 'public/img_datn/linh kiện/Card màn hình VGA ASUS GT 1030 2GB GDDR5 Phoenix OC Edition.jpg, public/img_datn/linh kiện/Card màn hình VGA ASUS GT 1030 2GB GDDR5 Phoenix OC Edition(1).jpg, public/img_datn/linh kiện/Card màn hình VGA ASUS GT 1030 2GB GDDR5 Phoenix OC Edition(2).jpg, public/img_datn/linh kiện/Card màn hình VGA ASUS GT 1030 2GB GDDR5 Phoenix OC Edition(3).jpg, public/img_datn/linh kiện/Card màn hình VGA ASUS GT 1030 2GB GDDR5 Phoenix OC Edition(4).jpg ','CategoryID' =>$CategoryVGA->id,'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Card màn hình VGA ASUS Dual GeForce GTX 1650 OC Edition 4GB GDDR6 EVO',
            'price' => 3390000,'image' => 'public/img_datn/linh kiện/Card màn hình VGA ASUS Dual GeForce GTX 1650 OC Edition 4GB GDDR6 EVO.jpg, public/img_datn/linh kiện/Card màn hình VGA ASUS Dual GeForce GTX 1650 OC Edition 4GB GDDR6 EVO(1).jpg, public/img_datn/linh kiện/Card màn hình VGA ASUS Dual GeForce GTX 1650 OC Edition 4GB GDDR6 EVO(2).jpg, public/img_datn/linh kiện/Card màn hình VGA ASUS Dual GeForce GTX 1650 OC Edition 4GB GDDR6 EVO(3).jpg, public/img_datn/linh kiện/Card màn hình VGA ASUS Dual GeForce GTX 1650 OC Edition 4GB GDDR6 EVO(4).jpg ','CategoryID' =>$CategoryVGA->id,'BrandID' => $BrandASUS->id,
        ]);

        Product::create([

            'name' => 'Card màn hình VGA ASRock RX 5600 6G CLD 2 Fan',
            'price' => 3490000,'image' => 'public/img_datn/linh kiện/Card màn hình VGA ASRock RX 5600 6G CLD 2 Fan.jpg, public/img_datn/linh kiện/Card màn hình VGA ASRock RX 5600 6G CLD 2 Fan(1).jpg, public/img_datn/linh kiện/Card màn hình VGA ASRock RX 5600 6G CLD 2 Fan(2).jpg, public/img_datn/linh kiện/Card màn hình VGA ASRock RX 5600 6G CLD 2 Fan(3).jpg, public/img_datn/linh kiện/Card màn hình VGA ASRock RX 5600 6G CLD 2 Fan(4).jpg ','CategoryID' =>$CategoryVGA->id,'BrandID' => $BrandASROCK->id,
        ]);

        Product::create([

            'name' => 'Card màn hình VGA ASRock Radeon RX 5600 6GB GDDR6 PGD2',
            'price' => 3990000,'image' => 'public/img_datn/linh kiện/Card màn hình VGA ASRock Radeon RX 5600 6GB GDDR6 PGD2.jpg, public/img_datn/linh kiện/Card màn hình VGA ASRock Radeon RX 5600 6GB GDDR6 PGD2(1).jpg, public/img_datn/linh kiện/Card màn hình VGA ASRock Radeon RX 5600 6GB GDDR6 PGD2(2).jpg, public/img_datn/linh kiện/Card màn hình VGA ASRock Radeon RX 5600 6GB GDDR6 PGD2(3).jpg, public/img_datn/linh kiện/Card màn hình VGA ASRock Radeon RX 5600 6GB GDDR6 PGD2(4).jpg ','CategoryID' =>$CategoryVGA->id,'BrandID' => $BrandASROCK->id,
        ]);

        Product::create([

            'name' => 'Card màn hình VGA GIGABYTE GeForce RTX 3050 EAGLE OC 6G',
            'price' => 5050000,'image' => 'public/img_datn/linh kiện/Card màn hình VGA GIGABYTE GeForce RTX 3050 EAGLE OC 6G.jpg, public/img_datn/linh kiện/Card màn hình VGA GIGABYTE GeForce RTX 3050 EAGLE OC 6G(1).jpg, public/img_datn/linh kiện/Card màn hình VGA GIGABYTE GeForce RTX 3050 EAGLE OC 6G(2).jpg, public/img_datn/linh kiện/Card màn hình VGA GIGABYTE GeForce RTX 3050 EAGLE OC 6G(3).jpg, public/img_datn/linh kiện/Card màn hình VGA GIGABYTE GeForce RTX 3050 EAGLE OC 6G(4).jpg ','CategoryID' =>$CategoryVGA->id,'BrandID' => $BrandGIGABYTE->id,
        ]);

        Product::create([

            'name' => 'Nguồn Xigmatek X-Power III 350',
            'price' => 360000,'image' => 'public/img_datn/linh kiện/Nguồn Xigmatek X-Power III 350.jpg, public/img_datn/linh kiện/Nguồn Xigmatek X-Power III 350(1).jpg, public/img_datn/linh kiện/Nguồn Xigmatek X-Power III 350(2).jpg, public/img_datn/linh kiện/Nguồn Xigmatek X-Power III 350(3).jpg, public/img_datn/linh kiện/Nguồn Xigmatek X-Power III 350(4).jpg ','CategoryID' =>$CategoryPSU->id,'BrandID' => $BrandXIGMATEK->id,
        ]);

        Product::create([

            'name' => 'Nguồn VSP Delta P350W',
            'price' => 390000,'image' => 'public/img_datn/linh kiện/Nguồn VSP Delta P350W..jpg, public/img_datn/linh kiện/Nguồn VSP Delta P350W(1).jpg, public/img_datn/linh kiện/Nguồn VSP Delta P350W(2).jpg, public/img_datn/linh kiện/Nguồn VSP Delta P350W(3).jpg, public/img_datn/linh kiện/Nguồn VSP Delta P350W(4).jpg ','CategoryID' =>$CategoryPSU->id,'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'Nguồn VSP Delta P450W',
            'price' => 480000,'image' => 'public/img_datn/linh kiện/Nguồn VSP Delta P450W.jpg, public/img_datn/linh kiện/Nguồn VSP Delta P450W(1).jpg, public/img_datn/linh kiện/Nguồn VSP Delta P450W(2).jpg, public/img_datn/linh kiện/Nguồn VSP Delta P450W(3).jpg ','CategoryID' =>$CategoryPSU->id,'BrandID' => $BrandVSP->id,
        ]);

        Product::create([

            'name' => 'Nguồn Xigmatek Z Power-II 550',
            'price' => 590000,'image' => 'public/img_datn/linh kiện/Nguồn Xigmatek Z Power-II 550.jpg, public/img_datn/linh kiện/Nguồn Xigmatek Z Power-II 550(1).jpg, public/img_datn/linh kiện/Nguồn Xigmatek Z Power-II 550(2).jpg, public/img_datn/linh kiện/Nguồn Xigmatek Z Power-II 550(3).jpg, public/img_datn/linh kiện/Nguồn Xigmatek Z Power-II 550(4).jpg ','CategoryID' =>$CategoryPSU->id,'BrandID' => $BrandXIGMATEK->id,
        ]);

        Product::create([

            'name' => 'Nguồn Xigmatek Z Power-II 650',
            'price' => 690000,'image' => 'public/img_datn/linh kiện/Nguồn Xigmatek Z Power-II 650.jpg, public/img_datn/linh kiện/Nguồn Xigmatek Z Power-II 650(1).jpg, public/img_datn/linh kiện/Nguồn Xigmatek Z Power-II 650(2).jpg, public/img_datn/linh kiện/Nguồn Xigmatek Z Power-II 650(3).jpg, public/img_datn/linh kiện/Nguồn Xigmatek Z Power-II 650(4).jpg ','CategoryID' =>$CategoryPSU->id,'BrandID' => $BrandXIGMATEK->id,
        ]);

        Product::create([

            'name' => 'Ram Laptop Kingston 4GB DDR4 2666Mhz',
            'price' => 290000,'image' => 'public/img_datn/linh kiện/Ram Laptop Kingston 4GB DDR4 2666Mhz.jpg ','CategoryID' =>$CategoryRAM->id,'BrandID' => $BrandKINGSTON->id,
        ]);

        Product::create([

            'name' => 'Ram Laptop Adata Premier 4GB DDR4 2666MHz',
            'price' => 290000,'image' => 'public/img_datn/linh kiện/Ram Laptop Adata Premier 4GB DDR4 2666MHz.jpg ','CategoryID' =>$CategoryRAM->id,'BrandID' => $BrandADATA->id,
        ]);

        Product::create([

            'name' => 'Ram PC Adata XPG D10 DDR4 8GB 3200Mhz White',
            'price' => 470000,'image' => 'public/img_datn/linh kiện/Ram PC Adata XPG D10 DDR4 8GB 3200Mhz White.jpg ','CategoryID' =>$CategoryRAM->id,'BrandID' => $BrandADATA->id,
        ]);

        Product::create([

            'name' => 'Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz',
            'price' => 540000,'image' => 'public/img_datn/linh kiện/Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz.jpg, public/img_datn/linh kiện/Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz(1).jpg, public/img_datn/linh kiện/Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz(2).jpg, public/img_datn/linh kiện/Ram PC Kingston Fury Beast 8GB DDR4 3200Mhz(3).jpg ','CategoryID' =>$CategoryRAM->id,'BrandID' => $BrandKINGSTON->id,
        ]);

        Product::create([

            'name' => 'Ram Laptop Kingston 8GB DDR4 3200MHz',
            'price' => 550000,'image' => 'public/img_datn/linh kiện/Ram Laptop Kingston 8GB DDR4 3200MHz.jpg, public/img_datn/linh kiện/Ram Laptop Kingston 8GB DDR4 3200MHz(1).jpg, public/img_datn/linh kiện/Ram Laptop Kingston 8GB DDR4 3200MHz(2).jpg, public/img_datn/linh kiện/Ram Laptop Kingston 8GB DDR4 3200MHz(3).jpg ','CategoryID' =>$CategoryRAM->id,'BrandID' => $BrandKINGSTON->id,
        ]);

        Product::create([

            'name' => 'Fan Case Redmoon F3 Led RGB - Đen',
            'price' => 95000,'image' => 'public/img_datn/linh kiện/Fan Case Redmoon F3 Led RGB - Đen.jpg, public/img_datn/linh kiện/Fan Case Redmoon F3 Led RGB - Đen(1).jpg, public/img_datn/linh kiện/Fan Case Redmoon F3 Led RGB - Đen(2).jpg, public/img_datn/linh kiện/Fan Case Redmoon F3 Led RGB - Đen(3).jpg ','CategoryID' =>$CategoryTNPC->id,'BrandID' => $BrandREDMOON->id,
        ]);

        Product::create([

            'name' => 'Fan Case Redmoon F3 Led RGB - Trắng',
            'price' => 95000,'image' => 'public/img_datn/linh kiện/Fan Case Redmoon F3 Led RGB - Trắng.jpg, public/img_datn/linh kiện/Fan Case Redmoon F3 Led RGB - Trắng(1).jpg ','CategoryID' =>$CategoryTNPC->id,'BrandID' => $BrandREDMOON->id,
        ]);

        Product::create([

            'name' => 'Tản Nhiệt Khí Cooler Master HYPER 212 SPECTRUM V3',
            'price' => 360000,'image' => 'public/img_datn/linh kiện/Tản Nhiệt Khí Cooler Master HYPER 212 SPECTRUM V3.jpg, public/img_datn/linh kiện/Tản Nhiệt Khí Cooler Master HYPER 212 SPECTRUM V3(1).jpg, public/img_datn/linh kiện/Tản Nhiệt Khí Cooler Master HYPER 212 SPECTRUM V3(2).jpg, public/img_datn/linh kiện/Tản Nhiệt Khí Cooler Master HYPER 212 SPECTRUM V3(3).jpg, public/img_datn/linh kiện/Tản Nhiệt Khí Cooler Master HYPER 212 SPECTRUM V3(4).jpg ','CategoryID' =>$CategoryTNPC->id,'BrandID' => $BrandCOOLERMASTER->id,
        ]);

        Product::create([

            'name' => 'Tản Nhiệt CPU Cooler Master Hyper 212 Spectrum V2 RGB',
            'price' => 590000,'image' => 'public/img_datn/linh kiện/Tản Nhiệt CPU Cooler Master Hyper 212 Spectrum V2 RGB.jpg, public/img_datn/linh kiện/Tản Nhiệt CPU Cooler Master Hyper 212 Spectrum V2 RGB(1).jpg, public/img_datn/linh kiện/Tản Nhiệt CPU Cooler Master Hyper 212 Spectrum V2 RGB(2).jpg, public/img_datn/linh kiện/Tản Nhiệt CPU Cooler Master Hyper 212 Spectrum V2 RGB(3).jpg, public/img_datn/linh kiện/Tản Nhiệt CPU Cooler Master Hyper 212 Spectrum V2 RGB(4).jpg ','CategoryID' =>$CategoryTNPC->id,'BrandID' => $BrandCOOLERMASTER->id,
        ]);

        Product::create([

            'name' => 'Tản nhiệt CPU Cooler Master Masterliquid ML360L V2 ARGB AiO Cooling',
            'price' => 2250000,'image' => 'public/img_datn/linh kiện/Tản nhiệt CPU Cooler Master Masterliquid ML360L V2 ARGB AiO Cooling.jpg, public/img_datn/linh kiện/Tản nhiệt CPU Cooler Master Masterliquid ML360L V2 ARGB AiO Cooling(1).jpg, public/img_datn/linh kiện/Tản nhiệt CPU Cooler Master Masterliquid ML360L V2 ARGB AiO Cooling(2).jpg, public/img_datn/linh kiện/Tản nhiệt CPU Cooler Master Masterliquid ML360L V2 ARGB AiO Cooling(3).jpg, public/img_datn/linh kiện/Tản nhiệt CPU Cooler Master Masterliquid ML360L V2 ARGB AiO Cooling(4).jpg ','CategoryID' =>$CategoryTNPC->id,'BrandID' => $BrandCOOLERMASTER->id,
        ]);

        Product::create([
            'name' => 'Adapter Laptop Asus 20V - 7.5A - 150W ĐTN 6.0 * 3.7 hàng zin',
            'price' => 986000,'image' => 'public/img_datn/phụ kiện laptop/Adapter Laptop Asus 19V 6.32A 120W.jpg ','CategoryID' =>$CategoryPKLT->id,'BrandID' => $BrandASUS->id,
        ]);
        Product::create([
            'name' => 'Pin HP 740 G2, 745 G2, 840 G1,G2 CM03XL (44WH-6cell)',
            'price' => 1075000,'image' => 'public/img_datn/phụ kiện laptop/Pin HP 740 G2, 745 G2, 840 G1,G2 CM03XL.jpg ','CategoryID' =>$CategoryPKLT->id,'BrandID' => $BrandHP->id,
        ]);
        Product::create([
            'name' => 'Pin HP ProBook 430/ 440/ 450 G5/ 470 G4 / RR03XL (48Wh-3cell)',
            'price' => 1200000,'image' => 'public/img_datn/phụ kiện laptop/Pin HP ProBook 430 440 450 G5 470 G4 RR03XL.jpg ','CategoryID' =>$CategoryPKLT->id,'BrandID' => $BrandHP->id,
        ]);
        Product::create([
            'name' => 'Pin laptop Dell Inspiron 15 7559/ 7567/ 357F9 (74WH)',
            'price' => 1390000,'image' => 'public/img_datn/phụ kiện laptop/Pin laptop Dell Inspiron 15 7559 7567 357F9.jpg ','CategoryID' =>$CategoryPKLT->id,'BrandID' => $BrandDELL->id,
        ]);
        Product::create([
            'name' => 'Adapter Laptop Acer 19V- 3.42A-65W | đầu nhỏ 3.0mm*1.1mm',
            'price' => 480000,'image' => 'public/img_datn/phụ kiện laptop/Adapter Laptop Acer 19V- 3.42A-65W.jpg ','CategoryID' =>$CategoryPKLT->id,'BrandID' => $BrandACER->id,
        ]);
        Product::create([
            'name' => 'Adapter Laptop Acer 19V-3.42A-65W | Đầu 5.5mm*1.7 mm',
            'price' => 455000,'image' => 'public/img_datn/phụ kiện laptop/Adapter Laptop Acer 19V-3.42A-65W.jpg ','CategoryID' =>$CategoryPKLT->id,'BrandID' => $BrandACER->id,
        ]);
        Product::create([
            'name' => 'Adapter Laptop Lenoge Lenovo 20V - 2A',
            'price' => 130000,'image' => 'public/img_datn/phụ kiện laptop/Adapter Laptop Lenoge Lenovo 20V.jpg ','CategoryID' =>$CategoryPKLT->id,'BrandID' => $BrandLENOVO->id,
        ]);
        Product::create([
            'name' => 'Adapter Laptop Lenoge Samsung 19V - 3.16A',
            'price' => 130000,'image' => 'public/img_datn/phụ kiện laptop/Adapter Laptop Lenoge Samsung 19V.jpg ','CategoryID' =>$CategoryPKLT->id,'BrandID' => $BrandSAMSUNG->id,
        ]);

        Product::create([
            'name' => 'Keycap Cooler Master SK650',
            'price' => 99000,'image' => 'public/img_datn/phụ kiện gear/Keycap Cooler Master SK650.jpg ','CategoryID' =>$CategoryPKGE->id,'BrandID' => $BrandCOOLERMASTER->id,
        ]);
        Product::create([
            'name' => 'Keycap ABS nhiều màu 104 phím (giao ngẫu nhiên)',
            'price' => 135000,'image' => 'public/img_datn/phụ kiện gear/Keycap ABS nhiều màu 104 phím.jpg, public/img_datn/phụ kiện gear/Keycap ABS nhiều màu 104 phím(1).jpg, public/img_datn/phụ kiện gear/Keycap ABS nhiều màu 104 phím(2).jpg ','CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Keycap Nút bàn phím 104 nút chất liệu PBT nhiều màu',
            'price' => 185000,'image' => 'public/img_datn/phụ kiện gear/Keycap Nút bàn phím 104 nút chất liệu PBT nhiều màu.jpg ','CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Keycap Doubleshot xuyên Led cho Game thủ chuyên PUBG',
            'price' => 85000,'image' => 'public/img_datn/phụ kiện gear/Keycap Doubleshot xuyên Led cho Game thủ chuyên PUBG.jpg ','CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Nút Click Chuột Thường',
            'price' => 10000,'image' => 'public/img_datn/phụ kiện gear/Nút Click Chuột Thường.jpg ','CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Giá treo Headphone (kèm Nút nguồn lớn)',
            'price' => 115000,'image' => 'public/img_datn/phụ kiện gear/Giá treo Headphone không Logo Star.jpg ','CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Nút nguồn Fami Alienware kèm giá treo tai nghe',
            'price' => 145000,'image' => 'public/img_datn/phụ kiện gear/Nút nguồn Fami Alienware kèm giá treo tai nghe.jpg ','CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Giá treo Headphone Logo Star (kèm Nút nguồn lớn)',
            'price' => 125000,'image' => 'public/img_datn/phụ kiện gear/Giá treo Headphone Logo Star.jpg, public/img_datn/phụ kiện gear/Giá treo Headphone Logo Star(1).jpg, public/img_datn/phụ kiện gear/Giá treo Headphone Logo Star(2).jpg, public/img_datn/phụ kiện gear/Giá treo Headphone Logo Star(3).jpg ','CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Giá treo Headphone Xiberia (Đen)',
            'price' => 250000,'image' => 'public/img_datn/phụ kiện gear/Giá treo Headphone Xiberia.jpg ','CategoryID' =>$CategoryPKGE->id,
        ]);
        Product::create([
            'name' => 'Keo tản nhiệt HY510 | Tuýp 20G',
            'price' => 12000,'image' => 'public/img_datn/phụ kiện tản nhiệt/Keo tản nhiệt HY510.jpg ','CategoryID' =>$CategoryPKTN->id,
        ]);
        Product::create([
            'name' => 'Keo tản nhiệt HY510 | Hủ 100G',
            'price' => 52000,'image' => 'public/img_datn/phụ kiện tản nhiệt/Keo tản nhiệt HY510 hủ.jpg ','CategoryID' =>$CategoryPKTN->id,
        ]);
        Product::create([
            'name' => 'Gông chống cong Magic - Dành CPU Socket 1700',
            'price' => 89000,'image' => 'public/img_datn/phụ kiện tản nhiệt/Gông chống cong Magic.jpg ','CategoryID' =>$CategoryPKTN->id,
        ]);
        Product::create([
            'name' => 'Bộ Hub + Remote Fan RGB Coolmoon',
            'price' => 89000,'image' => 'public/img_datn/phụ kiện tản nhiệt/Bộ Hub + Remote Fan RGB Coolmoon.jpg ','CategoryID' =>$CategoryPKTN->id,
        ]);
        Product::create([
            'name' => 'Keo tản nhiệt Arctic MX4 8G (ACTCP00008B)',
            'price' => 599000,'image' => 'public/img_datn/phụ kiện tản nhiệt/Keo tản nhiệt Arctic MX4 8G.jpg ','CategoryID' =>$CategoryPKTN->id,
        ]);
        Product::create([
            'name' => 'Cáp Riser Asus ROG Strix Cable | 240mm, PCI-E 3.0, hỗ trợ dựng VGA',
            'price' => 450000,'image' => 'public/img_datn/phụ kiện vga&nguồn/Cáp Riser Asus ROG Strix Cable.jpg, public/img_datn/phụ kiện vga&nguồn/Cáp Riser Asus ROG Strix Cable(1).jpg, public/img_datn/phụ kiện vga&nguồn/Cáp Riser Asus ROG Strix Cable(2).jpg, public/img_datn/phụ kiện vga&nguồn/Cáp Riser Asus ROG Strix Cable(3).jpg, public/img_datn/phụ kiện vga&nguồn/Cáp Riser Asus ROG Strix Cable(4).jpg ','CategoryID' =>$CategoryPKVGA->id,'BrandID' => $BrandASUS ->id,
        ]);
        Product::create([
            'name' => 'Cáp Module Cooler Master PCIe 5.0 Cong 90 Độ (Type-2)',
            'price' => 240000,'image' => 'public/img_datn/phụ kiện vga&nguồn/Cáp Module Cooler Master PCIe 5.0 Cong 90 Độ.jpg ','CategoryID' =>$CategoryPKVGA->id,'BrandID' => $BrandCOOLERMASTER ->id,
        ]);
        Product::create([
            'name' => 'Giá đỡ VGA Coolmoon CM-GH 2 (Đen)',
            'price' => 169000,'image' => 'public/img_datn/phụ kiện vga&nguồn/Giá đỡ VGA Coolmoon CM-GH 2 (Đen).jpg ','CategoryID' =>$CategoryPKVGA->id,'BrandID' => $BrandCOOLMOON ->id,
        ]);
        Product::create([
            'name' => 'Dây Led Coolmoon C200EX + Dây nối dài EX24 24 pin màu trắng',
            'price' => 430000,'image' => 'public/img_datn/phụ kiện vga&nguồn/Dây Led Coolmoon C200EX + Dây nối dài EX24 24 pin màu trắng.jpg ','CategoryID' =>$CategoryPKVGA->id,'BrandID' => $BrandCOOLMOON ->id,
        ]);
        Product::create([
            'name' => 'Dây nguồn nối dài Lian Li Strimer Plus V2',
            'price' => 1749000,'image' => 'public/img_datn/phụ kiện vga&nguồn/Dây nguồn nối dài Lian Li Strimer Plus V2.jpg ','CategoryID' =>$CategoryPKVGA->id,'BrandID' => $BrandLLS ->id,
        ]);
        Product::create([
            'name' => 'Khung dựng VGA Cooler Master V3 | Kèm Riser PCIE 4.0',
            'price' => 1440000,'image' => 'public/img_datn/phụ kiện vga&nguồn/Khung dựng VGA Cooler Master V3.jpg ','CategoryID' =>$CategoryPKVGA->id,'BrandID' => $BrandCOOLERMASTER->id,
        ]);
        Product::create([
            'name' => 'Cáp DisplayPort qua DisplayPort 1.8m',
            'price' => 55000,'image' => 'public/img_datn/phụ kiện màn hình/Cáp DisplayPort qua DisplayPort 1.8m.jpg ','CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Cáp VGA ZIN 1.5m | Không nhiễu QSD',
            'price' => 35000,'image' => 'public/img_datn/phụ kiện màn hình/Cáp VGA ZIN 1.5m.jpg ','CategoryID' =>$CategoryPKMH->id,'BrandID' => $BrandVGA->id,
        ]);
        Product::create([
            'name' => 'Cáp HDMI 20M - Dây Dẹt',
            'price' => 135000,'image' => 'public/img_datn/phụ kiện màn hình/Cáp HDMI 20M - Dây Dẹt.jpg ','CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Cáp VGA trắng 1.5m - 2 đầu xanh loại tốt',
            'price' => 18000,'image' => 'public/img_datn/phụ kiện màn hình/Cáp VGA trắng 1.5m - 2 đầu xanh loại tốt.jpg ','CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Giá treo màn hình North Bayou F80 - Đen | 17 - 30 inch',
            'price' => 329000,'image' => 'public/img_datn/phụ kiện màn hình/Giá treo màn hình North Bayou F80 - Đen.jpg ','CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Giá treo màn hình North Bayou H180 - Xám | 17 - 27 inch',
            'price' => 54000,'image' => 'public/img_datn/phụ kiện màn hình/Giá treo màn hình North Bayou H180 - Xám.jpg ','CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Giá treo màn hình AOC AM400S - Silver | 17 - 34 inch',
            'price' => 829000,'image' => 'public/img_datn/phụ kiện màn hình/Giá treo màn hình AOC AM400S - Silver.jpg ','CategoryID' =>$CategoryPKMH->id,'BrandID' => $BrandAOC->id,
        ]);
        Product::create([
            'name' => 'Giá treo màn hình North Bayou FC55 - Đen | 24 - 35 inch',
            'price' => 1790000,'image' => 'public/img_datn/phụ kiện màn hình/Giá treo màn hình North Bayou FC55 - Đen.jpg ','CategoryID' =>$CategoryPKMH->id,
        ]);
        Product::create([
            'name' => 'Cáp VGA Cao Cấp LCD Unitek Chống Nhiễu 5M YC505G',
            'price' => 110000,'image' => 'public/img_datn/phụ kiện màn hình/Cáp VGA Cao Cấp LCD Unitek Chống Nhiễu 5M YC505G.jpg ','CategoryID' =>$CategoryPKMH->id,'BrandID' => $BrandVGA->id,
        ]);

        Product::create([
            'name' => 'Thanh Tản Nhiệt M.2 SSD NVMe Thermorysis',
            'price' => 55000,'image' => 'public/img_datn/phụ kiện ổ cứng/Thanh Tản Nhiệt M.2 SSD NVMe Thermorysis.jpg ','CategoryID' =>$CategoryPKOC->id,
        ]);

        Product::create([
            'name' => 'Cáp chuyển đổi nguồn Sata qua ATA (IDE)',
            'price' => 15000,'image' => 'public/img_datn/phụ kiện ổ cứng/Cáp chuyển đổi nguồn Sata qua ATA (IDE).jpg ','CategoryID' =>$CategoryPKOC->id,
        ]);

        Product::create([
            'name' => 'Cáp Sata dài 85cm Foxconn (Sata Drive/Server Board) (QSD)',
            'price' => 10000,'image' => 'public/img_datn/phụ kiện ổ cứng/Cáp Sata dài 85cm Foxconn.jpg ','CategoryID' =>$CategoryPKOC->id,
        ]);
        Product::create([
            'name' => 'Caddy Bay Mỏng 9.5mm (Lắp thay SSD cho Laptop)',
            'price' => 37000,'image' => 'public/img_datn/phụ kiện ổ cứng/Caddy Bay Mỏng 9.5mm.jpg ','CategoryID' =>$CategoryPKOC->id,
        ]);
        Product::create([
            'name' => 'Caddy Bay Dày 12.5mm (Lắp thay SSD cho Laptop)',
            'price' => 37000,'image' => 'public/img_datn/phụ kiện ổ cứng/Caddy Bay Dày 12.5mm.jpg ','CategoryID' =>$CategoryPKOC->id,
        ]);

        Product::create([
            'name' => 'Cáp Mạng Đúc Sẵn 1.5M Kingmaster',
            'price' => 9000,'image' => 'public/img_datn/phụ kiện mạng/Cáp Mạng Đúc Sẵn 1.5M Kingmaster (TY015).jpg ','CategoryID' =>$CategoryPKMG->id,'BrandID' =>$BrandKINGMASTER->id,
        ]);
        Product::create([
            'name' => 'Cáp Lan đúc sẵn 5M loại tốt Kingmaster',
            'price' => 25000,'image' => 'public/img_datn/phụ kiện mạng/Cáp Lan đúc sẵn 5M loại tốt Kingmaster (TY050).jpg ','CategoryID' =>$CategoryPKMG->id,'BrandID' =>$BrandKINGMASTER->id,
        ]);
        Product::create([
            'name' => 'Cáp Lan đúc sẵn 2M loại tốt Kingmaster',
            'price' => 11000,'image' => 'public/img_datn/phụ kiện mạng/Cáp Lan đúc sẵn 2M loại tốt Kingmaster (TY020).jpg ','CategoryID' =>$CategoryPKMG->id,'BrandID' =>$BrandKINGMASTER->id,
        ]);
        Product::create([
            'name' => 'Cáp Lan đúc sẵn 3M loại tốt Kingmaster',
            'price' => 15000,'image' => 'public/img_datn/phụ kiện mạng/Cáp Lan đúc sẵn 3M loại tốt Kingmaster (TY030).jpg ','CategoryID' =>$CategoryPKMG->id,'BrandID' =>$BrandKINGMASTER->id,
        ]);
        Product::create([
            'name' => 'Cáp Lan đúc sẵn 25M loại tốt Kingmaster',
            'price' => 80000,'image' => 'public/img_datn/phụ kiện mạng/Cáp Lan đúc sẵn 25M loại tốt Kingmaster (TY250).jpg ','CategoryID' =>$CategoryPKMG->id,'BrandID' =>$BrandKINGMASTER->id,
        ]);
        Product::create([
            'name' => 'Card PCIE Wifi 6 Asus PCE-AX3000 (No Box)',
            'price' => 639000,'image' => 'public/img_datn/phụ kiện mạng/Card PCIE Wifi 6 Asus PCE-AX3000.jpg ','CategoryID' =>$CategoryPKMG->id,'BrandID' =>$BrandASUS->id,
        ]);
        Product::create([
            'name' => 'Hộp đầu mạng RJ45 Tenda 5E (100c/hộp)',
            'price' => 95000,'image' => 'public/img_datn/phụ kiện mạng/Hộp đầu mạng RJ45 Tenda 5E.jpg ','CategoryID' =>$CategoryPKMG->id,'BrandID' =>$BrandTENDA->id,
        ]);
        Product::create([
            'name' => 'Card Mạng Không Dây TP-Link TL-WN781ND',
            'price' => 160000,'image' => 'public/img_datn/phụ kiện mạng/Card Mạng Không Dây TP-Link TL-WN781ND.jpg ','CategoryID' =>$CategoryPKMG->id,
        ]);
        Product::create([
            'name' => 'Router Wifi Asus RT AX53U AX1800',
            'price' => 1279000,'image' => ' ','CategoryID' =>$CategoryPKMG->id,'BrandID' =>$BrandASUS->id,
        ]);
        Product::create([
            'name' => 'Router Wifi Asus RT AX1800HP',
            'price' => 1390000,'image' => 'public/img_datn/phụ kiện mạng/Router Wifi Asus RT AX1800HP.jpg ','CategoryID' =>$CategoryPKMG->id,'BrandID' =>$BrandASUS->id,
        ]);





    }
}
