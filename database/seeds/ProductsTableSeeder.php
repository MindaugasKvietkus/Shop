<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $computer = new \App\Products([
            'name' => 'Poseidon Godlike "Powered by ASUS" Intel i7-7700K / Z270 / 32Gb DDR4 RAM / 2Tb HDD / 480Gb SSD / DVD-RW / GeForce GTX 1080 8Gb / 700W / Aušinamas vandeniu',
            'price' => '1999',
            'picture' => '/computers/poseidon_godlike.jpg',
            'category_number' => 1
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Uranus "Powered by ASUS" Intel i5-7500 / B250 / 16Gb DDR4 RAM / 1Tb HDD / 120Gb SSD / DVD-RW / GeForce GTX1050Ti 4Gb / 600W',
            'price' => '829',
            'picture' => '/computers/uranus.jpg',
            'category_number' => 1
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Uranus MX "Powered by ASUS" Intel i5-7500 / B250 / 16Gb DDR4 RAM / 1Tb HDD / 120Gb SSD / DVD-RW / GeForce GTX 1060 3GB / 600W',
            'price' => '899',
            'picture' => '/computers/uranus_mx.jpg',
            'category_number' => 1
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Neptun "Powered by ASUS" Intel i5-7600K / Z270 / 16Gb DDR4 RAM / 2Tb HDD / 240Gb SSD / DVD-RW / GeForce GTX 1060 6GB / 600W / Aušinamas vandeniu',
            'price' => '1189',
            'picture' => '/computers/neptun.jpg',
            'category_number' => 1
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Poseidon "Powered by ASUS" Intel i7-7700K / Z270 / 16Gb DDR4 RAM / 2Tb HDD / 240Gb SSD / DVD-RW / Radeon RX480 4GB / 600W / Aušinamas vandeniu',
            'price' => '1279',
            'picture' => '/computers/poseidon.jpg',
            'category_number' => 1
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Neptun Breeze "Powered by ASUS" Intel i5-7600K / Z270 / 16Gb DDR4 RAM / 2Tb HDD / 240Gb SSD / DVD-RW / GeForce GTX 1070 8Gb / 700W / Aušinamas vandeniu',
            'price' => '1359',
            'picture' => '/computers/neptun_breeze.jpg',
            'category_number' => 1
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Poseidon Cunami "Powered by ASUS" Intel i7-7700K / Z270 / 16Gb DDR4 RAM / 2Tb HDD / 240Gb SSD / DVD-RW / GeForce GTX 1070 8Gb / 700W / Aušinamas vandeniu',
            'price' => '1479',
            'picture' => '/computers/poseidon_cunami.jpg',
            'category_number' => 1
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Hermes "Powered by ASUS" Intel i7-7700 / B250 / 16Gb DDR4 RAM / 1Tb HDD / 240Gb SSD / DVD-RW / Radeon RX480 4GB / 600W',
            'price' => '1089',
            'picture' => '/computers/hermes.jpg',
            'category_number' => 1
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Uranus FX "Powered by ASUS" Intel i5-7500 / B250 / 16Gb DDR4 RAM / 1Tb HDD / 120Gb SSD / DVD-RW / GeForce GTX 1070 / 600W',
            'price' => '1119',
            'picture' => '/computers/uranus_fx.jpg',
            'category_number' => 1
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Hermes FX "Powered by ASUS" Intel i7-7700 / B250 / 16Gb DDR4 RAM / 1Tb HDD / 240Gb SSD / DVD-RW / GeForce GTX 1060 6GB / 600W',
            'price' => '1129',
            'picture' => '/computers/hermes_fx.jpg',
            'category_number' => 1
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'CAT S60',
            'price' => '609',
            'picture' => '/mobiles/cat_s60.jpg',
            'category_number' => 2
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Apple iPhone 5S 16GB (Sidabrinis, EU Spec)',
            'price' => '327.00',
            'picture' => '/mobiles/apple_iphone_5s.jpeg',
            'category_number' => 2
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Samsung Galaxy S7 Edge 32GB (Juodas) su SamsungCare',
            'price' => '644.99',
            'picture' => '/mobiles/samsung_s7_edge.jpeg',
            'category_number' => 2
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Huawei P9 Lite (Gold) Dual SIM',
            'price' => '244.89',
            'picture' => '/mobiles/huawei_p9_lite.png',
            'category_number' => 2
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Meizu M3S mini 32GB',
            'price' => '169.99',
            'picture' => '/mobiles/telefonas_meizu_m3s.png',
            'category_number' => 2
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Telefonas Huawei P8 Lite (Juodas)',
            'price' => '164.99',
            'picture' => '/mobiles/huawei_p8_lite.jpeg',
            'category_number' => 2
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Huawei P8 Lite (Auksinis)',
            'price' => '164.99',
            'picture' => '/mobiles/huawei_phone_p8_lite_ds_gold.jpg',
            'category_number' => 2
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Alcatel Idol 4 16GB Gold',
            'price' => '269.99',
            'picture' => '/mobiles/alcatel_idol_4.png',
            'category_number' => 2
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Alcatel Pop 4 Plus Move Edition',
            'price' => '134.01',
            'picture' => '/mobiles/alcatel_pop_4_plus_move_edition.png',
            'category_number' => 2
        ]);
        $computer->save();

        $computer = new \App\Products([
            'name' => 'Samsung X cover 3 8GB Juodas/Sidabrinis (G389F)',
            'price' => '161.89',
            'picture' => '/mobiles/samsung_g389f_xcover_3.jpeg',
            'category_number' => 2
        ]);
        $computer->save();
    }
}