<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SatuanController extends Controller
{
    public function index()
{
    $apiUrl = 'http://127.0.0.1:8090/api/satuans';

    try {
        $token = session('token');

        $client = new \GuzzleHttp\Client();
        $response = $client->get($apiUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return view('MasterData.Satuan.index', compact('data'));
    } catch (\Exception $e) {
        return view('error.error', ['error' => $e->getMessage()]);
    }

}
public function create(Request $request)
{
    $token = session('token');

    $response = Http::withToken($token)
    ->post('http://localhost:8090/api/satuans', $request->only('name', 'description'));

    if ($response->successful()) {
        return redirect()->route('satuans.create')->with('success', 'Berhasil menambahkan satuan!');
    }

    return back()->withErrors(['message' => 'Gagal menyimpan satuan.']);
}
}
