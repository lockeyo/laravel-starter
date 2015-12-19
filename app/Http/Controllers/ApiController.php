<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * API Endpoint / Start the API service
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ['api' => 'API start endpoint', 'current_api_version' => 'v1', 'link' => url('api/v1'), 'status_code' => '200'];
    }

    /**
     * API / Get the version number of the API
     *
     * @return \Illuminate\Http\Response
     */
    public function version($version)
    {
        return ['api' => 'API Version endpoint', 'current_api_version' => $version, 'link' => url('api/' . $version . '/test'), 'status_code' => '200'];
    }

    /**
     * API /Test API call
     *
     * @return \Illuminate\Http\Response
     */
    public function test($version){
        return ['api' => 'API Test endpoint', 'current_api_version' => $version, 'link' => url('api/' . $version . '/test'), 'status_code' => '200'];
    }
}
