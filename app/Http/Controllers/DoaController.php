<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DoaController extends Controller
{
    protected $apiUrl = 'https://doa-doa-api-ahmadramadhan.fly.dev/api';

    public function index()
    {
        $doaData = $this->getDoaData();
        return view('doa.index', compact('doaData'));
    }

    protected function getDoaData()
    {
        $client = new Client();

        $response = $client->get($this->apiUrl);
        $doaData = $response->getBody(); // Mendapatkan isi respons JSON
        return json_decode($doaData, true); // Mendekode respons JSON ke dalam array PHP
    }


}
