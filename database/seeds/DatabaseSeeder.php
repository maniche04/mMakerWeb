<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(news_source_bbc::class);
     	$this->call(news_source_marketwatch::class);
        $this->call(news_source_cnbc::class);
        $this->call(news_source_investing::class);
    }
}
