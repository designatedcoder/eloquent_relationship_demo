<?php

use App\Models\Gift;
use App\Models\User;
use App\Models\Stuff;
use App\Models\Message;
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




    /**
     *  BELONGS TO MANY
     */
    /////// STUFF BELONGS TO MANY GIFTS
    // // $stuff1 = Stuff::create([
    // //     'name' => fake()->name(),
    // // ]);

    // // $stuff2 = Stuff::create([
    // //     'name' => fake()->name(),
    // // ]);

    // // $stuff3 = Stuff::create([
    // //     'name' => fake()->name(),
    // // ]);

    // // $stuff4 = Stuff::create([
    // //     'name' => fake()->name(),
    // // ]);

    // // $gift1 = Gift::create([
    // //     'type' => fake()->word(),
    // // ])->stuffs()->attach([$stuff1->id, $stuff2->id, $stuff3->id, $stuff4->id]);

    // // $gift2 = Gift::create([
    // //     'type' => fake()->word(),
    // // ])->stuffs()->attach([$stuff1->id, $stuff2->id]);

    // $gift1 = Gift::find(1);
    // $gift2 = Gift::find(2);

    // $firstGifts = $gift1->stuffs;
    // $secondGifts = $gift2->stuffs;


    // /////// GIFTS BELONGS TO MANY STUFFS
    // $stuff1 = Stuff::find(1);
    // $stuff2 = Stuff::find(2);

    // $firstStuffs = $stuff1->gifts;
    // $secondStuffs = $stuff2->gifts;

    // return view('welcome', [
    //     'firstGifts' => $firstGifts,
    //     'secondGifts' => $secondGifts,
    //     'firstStuffs' => $firstStuffs,
    //     'secondStuffs' => $secondStuffs,
    // ]);
});
