<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecaptchaController extends Controller
{
     public function verify(Request $request)
    {
        $request->validate([
            'token' => 'required|string'
        ]);

        $secretKey = env('GOOGLE_RECAPTCHA_SECRET');
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secretKey,
            'response' => $request->token
        ]);

        $result = $response->json();

        // Vérifiez que la requête est valide ET que le score est suffisant (ex: >= 0.5)
        if (!$result['success'] || $result['score'] < 0.5) {
            return response()->json([
                'success' => false,
                'message' => 'reCAPTCHA échoué : score trop bas ou token invalide.'
            ], 403);
        }

        return response()->json(['success' => true]);
    }
}
