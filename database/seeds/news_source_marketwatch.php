<?php

use Illuminate\Database\Seeder;

class news_source_marketwatch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_sources')->insert([
            'shortName' => "MarketWatch",
            'fullName' => "Market Watch",
            'url' => "https://www.marketwatch.com",
            'imageurl' => "http://www.sagharboradvisors.com/wp-content/uploads/2016/08/logo-marketwatch.png"
        ]);

        DB::table('news_sources')->insert([
            'shortName' => "Investors",
            'fullName' => "Investors.com",
            'url' => "https://www.investors.com",
            'imageurl' => "http://www.hilaryhendershott.com/wp-content/uploads/2015/02/Investors.com_.png"
        ]);
    }
}
