<?php

use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    /**
     *  ONE TO ONE
     */
    /////// USER HAS ONE CHARACTER
    // $user = User::create([
    //     'name' => fake()->name(),
    //     'email' => fake()->unique()->safeEmail(),
    //     'password' => Hash::make('password'), // password
    // ]);

    // $user->character()->create([
    //     'username' => fake()->userName()
    // ]);

    // return view('welcome', [
    //     'user' => $user
    // ]);

    /////// CHARACTER BELONGS TO USER
    // $user = User::find(1);
    // $character = $user->character;
    // return view('welcome', [
    //     'user' => $user,
    //     'character' => $character
    // ]);




    /**
     *  ONE TO MANY
     */
    /////// USER HAS MANY MESSAGES
    // $user = User::create([
    //     'name' => fake()->name(),
    //     'email' => fake()->unique()->safeEmail(),
    //     'password' => Hash::make('password'), // password
    // ]);

    // $message1 = $user->messages()->create([
    //     'body' => fake()->word()
    // ]);

    // $message2 = $user->messages()->create([
    //     'body' => fake()->word()
    // ]);
    // $user = User::find(1);
    // return view('welcome', [
    //     'user' => $user
    // ]);

    // /////// MANY MESSAGE BELONG TO USER
    // $user = User::find(1);
    // $message = Message::where('user_id', $user->id)->first();
    // return view('welcome', [
    //     'user' => $user,
    //     'message' => $message
    // ]);
});
