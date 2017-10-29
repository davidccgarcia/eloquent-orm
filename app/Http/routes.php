<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/create-user', function () {
    $user = App\User::create([
        'name' => 'Cristhian García', 
        'email' => 'ccristhiangarcia@gmail.com', 
        'password' => bcrypt('12345'),
        'gender' => 'm', 
        'biography' => 'Laravel y PHP developer'
    ]);

    return view('welcome');
});

Route::get('/update-user', function () {
    $user = App\User::find(1);
    $user->gender = 'm';
    $user->biography = 'Laravel and PHP developer';
    $user->save();

    return 'Usuario actualizado';
});
