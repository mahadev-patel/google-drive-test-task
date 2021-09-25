<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\BadResponseException;

class ApiController extends Controller
{
	function __construct() {
	    $this->client = new \GuzzleHttp\Client();
	}

	public function getCapsule(Request $request) {
		$page  = $request->page ;
		$limit = $request->size ;
		$offset = ($page - 1)*$limit ; 
	    $url = 'https://api.spacexdata.com/v3/capsules?offset='.$offset.'&limit='.$limit ;
	    $response = $this->client->get($url);
	    $results = $response->getBody();
	    $results = json_decode($results);
	    return response()->json($results);
	}
}
