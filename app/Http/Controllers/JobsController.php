<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JobsController extends Controller
{
    /**
     * Show all available jobs
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.jobs.index');
    }

    /**
     * Show selected job
     *
     * @return \Illuminate\Http\Response
     */
    public function job($jobTitle)
    {
        return view('frontend.jobs.job');
    }

    /**
     * Show form to apply for a job
     *
     * @return \Illuminate\Http\Response
     */
    public function apply($jobTitle)
    {
        return view('frontend.jobs.apply');
    }

    /**
     * Store a newly created request for a job in the database.
     * Send an e-mail to the human-resources team.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function applyPost($jobTitle, Request $request)
    {
        return view('frontend.jobs.apply');
    }
}
