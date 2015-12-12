<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bug;

class BugController extends Controller
{
    /**
     * Report a bug to the support team.
     * Send an e-mail to the support team
     *
     * @return \Illuminate\Http\Response
     */
    public function report(Request $request){

        $bug = new Bug();
        $bug->comment = $request->input('comment');
        $bug->img = $request->input('img');
        $bug->save();

        return 'true';
    }
}
