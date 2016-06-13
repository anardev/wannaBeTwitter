<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Status;
use App\Http\Requests;
use Illuminate\Http\Request;

class UsersController extends Controller {

    /**
     * Display user timeline.
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show($username)
    {
        $user = User::findUser($username);

        return view('users.timeline', compact('user'));
    }

    /**
     * Edit users settings.
     *
     * @param $username
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit($username)
    {
        $user = User::findUser($username);

        return view('users.edit', compact('user'));
    }

    /**
     * Update users timeline.
     *
     * @param $username
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update($username, Request $request)
    {
        $user = User::findUser($username);

        $user->update($request->all());

        return redirect('/home')->with('status', 'Ažurirali ste podatke.');
    }

    /**
     * Delete status from user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteStatus($id)
    {
        $user = Status::find($id);

        $user->delete();

        return back()->with('status', 'Vaš status je izbrisan.');
    }

}
