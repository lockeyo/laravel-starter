<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Show the latest news (10 articles)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.blog.index');
    }

    /**
     * Show blog articles as a page (20 articles in one page)
     *
     * @return \Illuminate\Http\Response
     */
    public function page($id)
    {
        return view('frontend.blog.page');
    }

    /**
     * Show blog articles of one category (10 articles)
     *
     * @return \Illuminate\Http\Response
     */
    public function category($category)
    {
        return view('frontend.blog.page');
    }

    /**
     * Show blog articles of one category (10 articles)
     *
     * @return \Illuminate\Http\Response
     */
    public function categoryPage($category, $id)
    {
        return view('frontend.blog.page');
    }

    /**
     * Show a single blog artivle
     *
     * @return \Illuminate\Http\Response
     */
    public function article($category, $articleName)
    {
        return view('frontend.blog.article');
    }

    /**
     * Store a newly created comment
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function comment($category, $articleName, Request $request)
    {
        return 'comment was saved!';
    }
}
