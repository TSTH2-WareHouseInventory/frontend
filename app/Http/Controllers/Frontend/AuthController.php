<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    private $apiBaseUrl = "http://127.0.0.1:8090/api/auth";

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
{
    $credentials = $request->validate([
        'email'    => 'required|string|email',
        'password' => 'required|string',
    ]);

    $client = new Client();

    try {
        $response = $client->post($this->apiBaseUrl . "/login", [
            'form_params' => [
                'email'    => $credentials['email'],
                'password' => $credentials['password'],
            ],
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        if ($data['response_code'] == '200') {
            session(['token' => $data['data']['token']]);
            session(['user' => $data['data']['user']]);

            // Simpan pesan sukses di session
            session()->flash('login_success', 'Login berhasil! Selamat datang, ' . $data['data']['user']['name']);

            return redirect()->route('dashboard');
        }

    } catch (\GuzzleHttp\Exception\ClientException $e) {
        $response = $e->getResponse();
        $data = json_decode($response->getBody()->getContents(), true);

        if ($data['response_code'] == '401') {
            return back()->withErrors(['login_error' => $data['message']]);
        }
    }

    return back()->withErrors(['login_error' => 'Terjadi kesalahan. Silakan coba lagi.']);
}



    public function handleLogout()
    {
        $token = Session::get('token');
        Log::info('Token on logout: ' . $token);

        if ($token) {
            $response = Http::withToken($token)->post($this->apiBaseUrl . "/logout");
            Log::info('Logout response: ' . $response->body());

            if ($response->successful()) {
                Session::flush(); // Hapus semua session
                return redirect()->route('auth.login');
            }
        }

        return redirect()->route('auth.login');
    }
}
