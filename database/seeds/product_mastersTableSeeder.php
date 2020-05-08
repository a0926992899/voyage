<?php

use App\Product_master;
use Illuminate\Database\Seeder;

class product_mastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_master::truncate();
        Product_master::create(['PName' => '蘋果']);
        Product_master::create(['PName' => '香蕉']);
        Product_master::create(['PName' => '蓮霧']);
        Product_master::create(['PName' => '芭樂']);
        Product_master::create(['PName' => '木瓜']);
        Product_master::create(['PName' => '哈密瓜']);
        Product_master::create(['PName' => '香瓜']);
        Product_master::create(['PName' => '洋香瓜']);
        Product_master::create(['PName' => '西瓜']);
        Product_master::create(['PName' => '葡萄']);
        Product_master::create(['PName' => '奇異果']);
        Product_master::create(['PName' => '芒果']);
        Product_master::create(['PName' => '柑橘']);
        Product_master::create(['PName' => '茂谷']);
        Product_master::create(['PName' => '柳丁']);
        Product_master::create(['PName' => '鳳梨']);
        Product_master::create(['PName' => '韓國梨']);
        Product_master::create(['PName' => '水梨']);
        Product_master::create(['PName' => '西洋梨']);
        Product_master::create(['PName' => '草莓']);
        Product_master::create(['PName' => '藍莓']);
        Product_master::create(['PName' => '榴槤']);
        Product_master::create(['PName' => '柚子']);
        Product_master::create(['PName' => '荔枝']);
        Product_master::create(['PName' => '龍眼']);
    }
}
