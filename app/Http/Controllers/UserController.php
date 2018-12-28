<?php

namespace App\Http\Controllers;

use App\User;
use Glisandro\ModuleUser\UserHandler;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $users = $user->paginate(10);
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * @param Request $request
     * @param UserHandler $userHandler
     * @return mixed
     * @throws
     */
    public function store(Request $request, UserHandler $userHandler)
    {
        //En este caso no hace falta evaluar porque si falla el validador redirecciona al form
        $userHandler->validate($request);

        $userHandler->store(new User());

        return redirect()->route('users.index');

    }

}
