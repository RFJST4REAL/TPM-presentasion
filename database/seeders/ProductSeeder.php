<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    

    public function run()
    {
        $products = [
            [
                'name' => 'Jaket Baseball',
                'description' => 'Nike Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/Documents/image/jaket.png?csf=1&web=1&e=dMG5se',
                'price' => 10.46
            ],
            [
                'name' => 'Apple iPhone 12',
                'description' => 'Apple Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/Documents/image/apple.jpg?csf=1&web=1&e=Db57fG',
                'price' => 1415.49
            ],
            [
                'name' => 'Web Cam Xiaovv',
                'description' => 'xiaomi Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/Documents/image/xiaovv.jpg?csf=1&web=1&e=GTIRNJ',
                'price' => 16.74
            ],
            [
                'name' => 'Raket Yonex speed lightning',
                'description' => 'Yonex Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/Documents/image/rakte.jpg?csf=1&web=1&e=OSeVQJ',
                'price' => 57.88
            ]
            ,
            [
                'name' => 'ABC BATERAI ALKALIN AAA/ A3 ISI 7pcs',
                'description' => 'Alkaline Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/Documents/image/alkaline.jpg?csf=1&web=1&e=A7vVBi',
                'price' => 1.05
            ]
            ,
            [
                'name' => 'VGA Gigabyte GeForce RTX 3090 Aorus Master 2.0 | 24GB GDDR6X | Ampere',
                'description' => 'Aorus Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/Documents/image/aorus.jpg?csf=1&web=1&e=dCSfGv',
                'price' => 3207.61
            ]
            ,
            [
                'name' => "Nike Blazer mid '77 vintage sneakers",
                'description' => 'Nike Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/Documents/image/nike.jpeg?csf=1&web=1&e=vSw4iP',
                'price' => 76.71
            ]
            ,
            [
                'name' => 'Tenda AC10U AC1200 MU-MIMO Smart Dual-Band Gigabit WiFi',
                'description' => 'Tenda Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/Documents/image/router.jpg?csf=1&web=1&e=f5RaXF',
                'price' => 40.37
            ]
            ,
            [
                'name' => 'MSI LAPTOP MODERN 14-B11MO-622 I7-1165G7 | 8GB | 512GB | UMA | 14″ | W10',
                'description' => 'MSI Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/Documents/image/MSI.jpg?csf=1&web=1&e=yqbgab',
                'price' => 836.72
            ]
        ];

        foreach ($products as $key => $value) {
            Product:: create ($value);
        }
    }
}
