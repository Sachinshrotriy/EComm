<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([ 
            [
                'name' =>'Oppo Mobile',  
                "price" => "18000/-",   
                "description" =>"A smartphone with 6gb ram and much  more things", 
                "category"=>"electronics",
                "gallery"=>"https://th.bing.com/th/id/OIP.5YLyPzAKz9VA537lbv-orAHaHa?w=190&h=190&c=7&r=0&o=5&dpr=1.5&pid=1.7",   
            ],
            [
                'name' =>'Laptop',  
                "price" => "65000/-",   
                "description" =>"AMD Ryzen 5 , 8 GB ram , 512 SSD", 
                "category"=>"electronics",
                "gallery"=>"https://images.esellerpro.com/2131/I/252/597/lrgscaleIMG_9723.JPEG",    
            ],
            [
                'name' =>'LG Smart TV',  
                "price" => "22000/-",   
                "description" =>"A television with smart activities and much more things", 
                "category"=>"electronics",
                "gallery"=>"https://th.bing.com/th/id/OIP.MYZPLfUs5ehGyQ_Kz5EXxQHaFT?w=274&h=197&c=7&r=0&o=5&dpr=1.5&pid=1.7",    
            ],
            [
                'name' =>'Samsung Lcd',  
                "price" => "28000/-",   
                "description" =>"A television with smart activities and much more things", 
                "category"=>"electronics",
                "gallery"=>"https://th.bing.com/th/id/OIP.ZLRoNUtn8dTg79Tkfsz7ugHaHa?pid=ImgDet&rs=1",    
            ],
        ]); 
    }
}