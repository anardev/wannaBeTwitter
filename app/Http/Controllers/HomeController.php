<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Status;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');

        parent::__construct();
    }

    /**
     * Show the application statuses home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $statuses = $this->getFeed(Auth::user());

        return view('statuses.home', compact('statuses'));
    }

    /**
     * Get users statuses and display it on home page.
     *
     * @param User $user
     * @return mixed
     */
    public function getFeed(User $user)
    {
        $userIds = $user->follows()->lists('followed_id');
        $userIds[] = $user->id;

        return Status::whereIn('user_id', $userIds)->orderBy('created_at', 'desc')->paginate(20);
    }

    /**
     * Status create.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('statuses.home');
    }

    /**
     * Storing status.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'status' => 'max:200',
        ]);

        $status = new Status($request->all());

        Auth::user()->status()->save($status);

        return back()->with('status', 'Vaš status je objavljen.');
    }
}
