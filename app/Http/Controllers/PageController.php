<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Show the homepage
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('frontend.pages.index');
    }

    /**
     * Show the features page
     *
     * @return \Illuminate\Http\Response
     */
    public function features()
    {
        return view('frontend.pages.features');
    }

    /**
     * Show the about page
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('frontend.pages.about');
    }

    /**
     * Show the sitemap page
     *
     * @return \Illuminate\Http\Response
     */
    public function sitemap()
    {
        return view('frontend.pages.sitemap');
    }

    /**
     * Show the privacy policy page
     *
     * @return \Illuminate\Http\Response
     */
    public function privacyPolicy()
    {
        return view('frontend.pages.privacy-policy');
    }

    /**
     * Show the terms of service page
     *
     * @return \Illuminate\Http\Response
     */
    public function termsOfService()
    {
        return view('frontend.pages.terms-of-service');
    }

    /**
     * Show the imprint page
     *
     * @return \Illuminate\Http\Response
     */
    public function imprint()
    {
        return view('frontend.pages.imprint');
    }
}
