<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <div class="max-w-7xl mx-auto p-6 lg:p-8 bg-gray-900 text-gray-50 w-1/2">

                <h2 class="text-2xl font-bold text-center">Eloquent Relationships</h2>

                {{-- <h3 class="text-xl text-center italic my-4">One to One</h3>

                <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            User's character username:
                        </p>
                        <p>{{ $user->character->username }}</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Character User's Name:
                        </p>
                        <p>{{ $character->user->name }}</p>
                    </div>
                </div> --}}

                {{-- <h3 class="text-xl text-center italic my-4">One to Many</h3>

                <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            User's messages:
                        </p>
                        @foreach ($user->messages as $message)
                            <p>{{ $message->id }}) {{ $message->body }}</p>
                        @endforeach
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Achievement User's Name:
                        </p>
                        <p>{{ $message->user->name }}</p>
                    </div>
                </div> --}}

                {{-- <h3 class="text-xl text-center italic my-4">Belongs to Many</h3>

                <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Gift 1's stuff:
                        </p>
                        @foreach ($firstGifts as $first)
                            <p>{{ $first->id }}) {{ $first->name }}</p>
                        @endforeach
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Gift 2's stuff:
                        </p>
                        @foreach ($secondGifts as $second)
                            <p>{{ $second->id }}) {{ $second->name }}</p>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Stuff 1's Gifts:
                        </p>
                        @foreach ($firstStuffs as $first)
                            <p>{{ $first->id }}) {{ $first->type }}</p>
                        @endforeach
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Stuff 2's Gifts:
                        </p>
                        @foreach ($secondStuffs as $second)
                            <p>{{ $second->id }}) {{ $second->type }}</p>
                        @endforeach
                    </div>
                </div> --}}


                {{-- <h3 class="text-xl text-center italic my-4">HAS ONE THROUGH/ HAS MANY THROUGH</h3> --}}

                {{-- <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            User's Gifts:
                        </p>
                        @foreach ($gifts as $gift)
                            <p>{{ $gift->id }}) {{ $gift->type }}</p>
                        @endforeach
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Gift's User Name:
                        </p>
                        @foreach ($userGifts as $gift)
                            <p>{{ $gift->user->id }}) {{ $gift->user->name }}</p>
                        @endforeach
                    </div>
                </div> --}}

                {{-- <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            User's Stuff:
                        </p>
                        @foreach ($stuffs as $stuff)
                            <p>{{ $stuff->id }}) {{ $stuff->name }}</p>
                        @endforeach
                    </div>
                </div> --}}



                {{-- <h3 class="text-xl text-center italic my-4">POLYMORPHIC ONE TO MANY</h3>

                <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Message Likes ID:
                        </p>
                        @foreach ($messageLikes as $like)
                            <p>{{ $like->id }}</p>
                        @endforeach
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Message Likes Type:
                        </p>
                        @foreach ($messageLikes as $like)
                            <p>{{ $like->likeable_type }}</p>
                        @endforeach
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Message Likes Count:
                        </p>
                        @foreach ($messageLikes as $like)
                            <p>{{ $like->count() }}</p>
                        @endforeach
                    </div>
                </div>


                <div class="flex flex-col space-y-4">
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Achievement Likes ID:
                        </p>
                        @foreach ($achievementLikes as $like)
                            <p>{{ $like->id }}</p>
                        @endforeach
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Achievement Likes Type:
                        </p>
                        @foreach ($achievementLikes as $like)
                            <p>{{ $like->likeable_type }}</p>
                        @endforeach
                    </div>
                    <div class="flex justify-between">
                        <p class="text-green-300">
                            Achievement Likes Count:
                        </p>
                        @foreach ($achievementLikes as $like)
                            <p>{{ $like->count() }}</p>
                        @endforeach
                    </div>
                </div> --}}
            </div>
        </div>
    </body>
</html>
