<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SupportController extends Controller
{
    /**
     * Show the support homepage
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.support.index');
    }

    /**
     * Show all support artcles from one category
     *
     * @return \Illuminate\Http\Response
     */
    public function category($category)
    {
        return view('frontend.support.category');
    }

    /**
     * Show one support article
     *
     * @return \Illuminate\Http\Response
     */
    public function article($category, $articleName)
    {
        return view('frontend.support.article');
    }
}
