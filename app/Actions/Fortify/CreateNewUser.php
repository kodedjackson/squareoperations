<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {

        Log::info('We got here');
        $this->validate($input);

        return DB::transaction(function () use ($input) {
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'phone_number' => $input['phone_number'] ?? null,

            ]);

            $this->createBusinessTeam($user, $input);

            return $user;
        });
    }

    protected function validate(array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:20'],
            'company_size' => ['required', 'in:1-5,6-20,21-50,51-250,250+'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
    }

    protected function createBusinessTeam(User $user, array $input): void
    {
        $team = Team::forceCreate([
            'user_id' => $user->id,
            'name' => $input['company_name'],
            'company_name' => $input['company_name'],
            'phone_number' => $input['phone_number'],
            'company_size' => $input['company_size'],
            'personal_team' => false,  // Business tenant, not personal
        ]);

        // Make it the current team
        $user->forceFill(['current_team_id' => $team->id])->save();

        // Jetstream team membership (owner role)
        $user->teams()->attach($team, ['role' => 'owner']);
    }
}
