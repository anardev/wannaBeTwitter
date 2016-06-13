<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class FollowsController extends Controller {

    /**
     * Follow user.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $userId = Input::get();

        Auth::user()->follows()->attach($userId);

        return back()->with('status', 'Počeli ste pratiti korisnika.');
    }

    /**
     * Unfollow user.
     *
     * @param $idUserUnfollow
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy($idUserUnfollow)
    {
        Auth::user()->follows()->detach($idUserUnfollow);

        return back()->with('status', 'Prestali ste pratiti korisnika.');
    }

}
