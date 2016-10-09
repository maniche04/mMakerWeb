<?php

use Illuminate\Database\Seeder;

class news_source_cnbc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_sources')->insert([
            'shortName' => "CNBC",
            'fullName' => "CNBC",
            'url' => "https://www.cnbc.com",
            'imageurl' => "https://d24j9r7lck9cin.cloudfront.net/l/o/1/1055.1430612612.png"
        ]);
    }
}
