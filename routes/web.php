<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ 'as' => 'home', function () {
    return view('home');
}]);


Route::get('about', [ 'as' => 'about', function () {
    return view('about');
}]);


Route::get('contact', [ 'as' => 'contact.form', function () {
    return view('contact');
}]);


Route::post('contact', ['as' => 'contact.submit', function () {

    $validation = validator(
        request()->only('name', 'email', 'message'),
            [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]
    );

    if ($validation->passes()) {
        dd('hooray it passed');
    }

    return redirect()->route('contact.form')->withErrors($validation->errors())->withInput();

}]);