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
<<<<<<< HEAD
        $apiUrl = 'http://127.0.0.1:8000/api/barangs';
=======
        $apiUrl = 'http://127.0.0.1:8090/api/barangs';
>>>>>>> fe8f20e8dec3fc3fb5e9079962b3b20250b9fcbf

        try {
            $token = session('token');

            if (!$token) {
                return redirect()->route('login')->withErrors('You need to login first.');
            }

            $client = new \GuzzleHttp\Client();
            $response = $client->get($apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            if (isset($data['data']) && !empty($data['data'])) {
                return view('MasterData.barang.index', compact('data'));
            } else {
                return view('error.error', ['error' => 'Data tidak ditemukan']);
            }

        } catch (\Exception $e) {
            return view('error.error', ['error' => $e->getMessage()]);
        }
    }

}
