<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'nim' => ['required', 'string','unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'username' => ['required', 'string', 'max:255', 'unique:users']
        ])->validate();

        return User::create([
            'name'      => $input['name'],
            'username'      => Str::slug($input['username']),
            'nim'       => $input['nim'],
            'email'     => $input['email'],
            'password'  => Hash::make($input['password']),
        ]);
    }
}
