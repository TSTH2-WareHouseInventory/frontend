<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
{
    $apiUrl = 'http://127.0.0.1:8000/api/satuans';

    try {
        $token = session('token');

        $client = new \GuzzleHttp\Client();
        $response = $client->get($apiUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return view('MasterData.Barang.index', compact('data'));
    } catch (\Exception $e) {
        return view('error.error', ['error' => $e->getMessage()]);
    }
}
}
