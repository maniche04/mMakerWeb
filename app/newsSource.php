<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsSource extends Model
{
    //
    public function articles()
    {
    	return $this->hasMany('App\newsArticle','id','sourceId');
    }
}
