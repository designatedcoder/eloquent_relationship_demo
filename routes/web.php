<?php

use App\Models\Achievement;
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








    /**
     *  HAS ONE THROUGH/ HAS MANY THROUGH
     */
    /////// USER HAS MANY GIFTS
    // $user = User::create([
    //     'name' => fake()->name(),
    //     'email' => fake()->unique()->safeEmail(),
    //     'password' => Hash::make('password'), // password
    // ]);

    // $gift1 = $user->gifts()->create([
    //     'type' => fake()->word(),
    // ]);

    // $gift2 = $user->gifts()->create([
    //     'type' => fake()->word(),
    // ]);

    // $user = User::find(1);

    // return view('welcome', [
        //     'gifts' => $user->gifts
        // ]);



    /////// GIFTS BELONGS TO USER
    // $user = User::find(1);
    // $userGifts = Gift::where('user_id', $user->id)->get();
    // return view('welcome', [
    //     'gifts' => $user->gifts,
    //     'userGifts' => $userGifts
    // ]);



    // /////// USER HAS MANY STUFFS THROUGH GIFTS
    // $user = User::find(1);

    // $gift1 = $user->gifts()->create([
    //     'type' => fake()->word(),
    // ]);

    // $stuff1 = $gift1->stuffs()->create([
    //     'name' => fake()->name(),
    // ]);

    // $gift2 = $user->gifts()->create([
    //     'type' => fake()->word(),
    // ]);

    // $stuff2 = $gift2->stuffs()->create([
    //     'name' => fake()->name(),
    // ]);

    // $stuffs = $user->stuffs;

    // return view('welcome', [
    //     'stuffs' => $stuffs,
    // ]);




    /**
     *  POLYMORHIC BELONGS TO MANY
     */
    /////// MESSAGES HAVE LIKES
    // $user1 = User::create([
    //     'name' => fake()->name(),
    //     'email' => fake()->unique()->safeEmail(),
    //     'password' => Hash::make('password'), // password
    // ]);

    // $user2 = User::create([
    //     'name' => fake()->name(),
    //     'email' => fake()->unique()->safeEmail(),
    //     'password' => Hash::make('password'), // password
    // ]);

    // $message1 = $user1->messages()->create([
    //     'body' => fake()->word(),
    // ]);

    // $message2 = $user1->messages()->create([
    //     'body' => fake()->word(),
    // ]);

    // $message1->likes()->create([
    //     'user_id' => $user1->id,
    //     'liked' => 1,
    // ]);

    // $message2->likes()->create([
    //     'user_id' => $user2->id,
    //     'liked' => 1,
    // ]);


    /////// ACHIEVEMENTS HAVE LIKES
    // $user1 = User::create([
    //     'name' => fake()->name(),
    //     'email' => fake()->unique()->safeEmail(),
    //     'password' => Hash::make('password'), // password
    // ]);

    // $user2 = User::create([
    //     'name' => fake()->name(),
    //     'email' => fake()->unique()->safeEmail(),
    //     'password' => Hash::make('password'), // password
    // ]);

    // $achievement1 = $user1->achievements()->create([
    //     'type' => fake()->word(),
    //     'name' => fake()->word(),
    // ]);

    // $achievement2 = $user1->achievements()->create([
    //     'type' => fake()->word(),
    //     'name' => fake()->word(),
    // ]);

    // $achievement1->likes()->create([
    //     'user_id' => $user1->id,
    //     'liked' => 1,
    // ]);

    // $achievement2->likes()->create([
    //     'user_id' => $user2->id,
    //     'liked' => 1,
    // ]);

    // $message = Message::find(1);
    // $achievement = Achievement::find(1);
    // $messageLikes = $message->likes;
    // $achievementLikes = $achievement->likes;

    // return view('welcome', [
    //     'messageLikes' => $messageLikes,
    //     'achievementLikes' => $achievementLikes,
    // ]);

});
