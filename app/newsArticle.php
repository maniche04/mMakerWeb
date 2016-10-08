<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsArticle extends Model
{
    //
    protected $table = 'news_articles';

    /**
     * Scopes the query to include articles that have not been evaluated
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnevaluated($query)
    {
        return $query->where('evalflag', '=', 0);
    }

    /**
     * Scopes the query to include articles that have not been evaluated
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEvaluated($query)
    {
        return $query->where('evalflag', '=', 1);
    }

    public function source()
    {
    	return $this->belongsTo('App\newsSource','sourceId','id');
    }
}
