<?php

use Illuminate\Database\Seeder;

class news_source_bbc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('news_sources')->insert([
            'shortName' => "BBC",
            'fullName' => "BBC Business",
            'url' => "https://www.bbc.co.uk",
            'imageurl' => "http://www.dtstructures.com/wp-content/uploads/2015/01/dt-structures-bbc-logo-small.png"
        ]);

        DB::table('news_sources')->insert([
            'shortName' => "REUTERS",
            'fullName' => "Thompson Reuters",
            'url' => "https://www.reuters.com",
            'imageurl' => "http://photos.prnewswire.com/prnvar/20130208/MM57185LOGO?max=700"
        ]);

        DB::table('news_sources')->insert([
            'shortName' => "WSJ",
            'fullName' => "Wall Street Journal",
            'url' => "https://www.wsj.com",
            'imageurl' => "http://www.adweek.com/fishbowlny/files/original/wsjmag_logo06152010.png"
        ]);

        DB::table('news_sources')->insert([
            'shortName' => "CNN",
            'fullName' => "CNN Business",
            'url' => "https://www.cnn.com",
            'imageurl' => "http://www.adweek.com/fishbowlny/files/original/wsjmag_logo06152010.png"
        ]);

    }
}
