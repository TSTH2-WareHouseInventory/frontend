<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $apiUrl = 'http://127.0.0.1:8090/api/barangs';

        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);


            return view('MasterData.Barang.index', compact('data'));
        } catch (\Exception $e) {
            return view('error.error', ['error' => $e->getMessage()]);
        }
    }

}
