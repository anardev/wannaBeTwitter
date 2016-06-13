<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class PagesController extends Controller {
    /**
     * PagesController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Home page of app.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.home');
    }


    /**
     * Getting results from search form.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function results(Request $request)
    {
        $query = $request->input('search');

        $search = User::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('username', 'LIKE', '%' . $query . '%');

        $search = $search->paginate(10);

        return view('pages.results', compact('search'));
    }
}
