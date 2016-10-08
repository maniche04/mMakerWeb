<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\newsArticle;

class NewsArticlesController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$articles = newsArticle::with('source')->orderBy('pubDate','desc')->get();
		return $articles;
	}
}
