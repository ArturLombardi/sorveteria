<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;



class ClientPasswordRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        $validator = Validator::make(
            [$attribute => $value],
            [
                $attribute => [
                    'required',
                    Password::min(8)
                        ->max(16)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        ->uncompromised(3),

                ],
            ]
        );

        // if ($validator->fails()) {
        //     foreach ($validator->errors()->get($attribute) as $message) {
        //         $fail($message);
        //     }
        // }
    }
}
