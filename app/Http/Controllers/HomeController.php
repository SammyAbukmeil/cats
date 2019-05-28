<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get uploads from API
        $client = new Client();
        $res = $client->request('GET', 'http://cats.localhost/api/uploads');
        $uploads = $res->getBody()->getContents();

        $uploads = json_decode($uploads);

        return view('home', compact("uploads"));
    }
}
