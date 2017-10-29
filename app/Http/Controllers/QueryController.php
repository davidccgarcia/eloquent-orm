<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QueryController extends Controller
{
    public function getAll()
    {
        $users = User::all();

        return view('query.all', compact('users'));
    }
}
