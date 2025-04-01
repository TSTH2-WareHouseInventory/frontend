<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    private $apiBaseUrl = "http://127.0.0.1:8090/api/auth";

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
{
    try {
        $client = new Client();
        $response = $client->post($this->apiBaseUrl . "/login", [
            'form_params' => [
                'email' => $request->email,
                'password' => $request->password,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        if (isset($data['token'])) {
            session(['token' => $data['token']]);
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Login failed, please try again.');
        }
    } catch (\Exception $e) {
        return back()->with('error', 'API error: ' . $e->getMessage());
    }
}

    public function handleLogout()
    {
        session()->forget('token'); // Hapus token dari session
        return redirect()->route('login')->with('status', 'Anda telah logout.');
    }

}
