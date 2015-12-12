<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PressController extends Controller
{
    /**
     * Show the press page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.press.index');
    }

    /**
     * Download the press package.
     *
     * @return \Illuminate\Http\Response
     */
    public function download()
    {
        return 'Download-Resource.';
    }
}
