<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;
use Illuminate\Support\Facades\Http;

class ReCaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Solution 1: Désactiver SSL en développement uniquement
        $response = Http::withOptions([
            'verify' => app()->environment('local') ? false : true
        ])->get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
            'response' => $value
        ]);

        if (!($response->json()["success"] ?? false)) {
            $fail('The google recaptcha is required.');
        }
    }
}