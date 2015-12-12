<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new contact request.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.contact.index');
    }

    /**
     * Store a newly created contact request in storage.
     * Send a e-mail to the owner (support team) of the website
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('frontend.contact.index');
    }
}
