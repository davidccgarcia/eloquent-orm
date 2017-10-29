<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QueryController extends Controller
{
    public function eloquentAll()
    {
        $users = User::all();
        $title = 'Todos los usuarios (ALL)';

        return view('query.methods', compact('title', 'users'));
    }

    public function eloquentGet($gender)
    {
        $users = User::where('gender', $gender)->get();
        $title = 'Lista de usuarios (GET)';

        return view('query.methods', compact('title', 'users'));
    }

    public function eloquentGetCustom()
    {
        $users = User::where('gender', 'f')
            ->get(['id', 'name', 'biography']);

        $title = 'Lista de usuarios (GET Custom - con array)';

        return view('query.methods', compact('title', 'users'));
    }

    public function eloquentDelete($id)
    {
        $user = User::find($id);
        $user->delete();

        return view('pages.delete');
    }
}
