<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;

class LanguageController extends Controller
{
    /**
     * Change language
     *
     * @return \Illuminate\Http\Response
     */
    public function change($locale)
    {
        App::setLocale($locale);
        return view('frontend.pages.index');
    }
}
