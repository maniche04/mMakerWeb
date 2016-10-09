<?php

use Illuminate\Database\Seeder;

class news_source_investing extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_sources')->insert([
            'shortName' => "Investing",
            'fullName' => "Investing.com",
            'url' => "https://www.investing.com",
            'imageurl' => "http://dontlettheforexdriveyouupthewall.com/wp-content/uploads/2015/04/investing.com-logo.png"
        ]);
    }
}
