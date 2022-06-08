<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
  public function handleRedirect()
  {
    return Socialite::driver('github')->redirect();
  }

  public function handleCallback()
  {
    $user = Socialite::driver('github')->user();

    dd($user)

      // $userExisted = User::where('oauth_id', $user->id)->where('oauth_type', static::DRIVER_TYPE)->first();

      // if ($userExisted) {

      //   Auth::login($userExisted);

      //   return redirect()->route('dashboard');
      // } else {

      //   $newUser = User::create([
      //     'name' => $user->name,
      //     'email' => $user->email,
      //     'oauth_id' => $user->id,
      //     'oauth_type' => static::DRIVER_TYPE,
      //     'password' => Hash::make($user->id)
      //   ]);

      //   AddingTeam::dispatch($newUser);

      //   $newUser->switchTeam($team = $newUser->ownedTeams()->create([
      //     'name' => $newUser->name . "'s Team",
      //     'personal_team' => false
      //   ]));

      //   $newUser->update([
      //     'current_team_id' => $newUser->id
      //   ]);

      //   Auth::login($newUser);

      //   return redirect()->route('dashboard');
      // }
    ;
  }
}
