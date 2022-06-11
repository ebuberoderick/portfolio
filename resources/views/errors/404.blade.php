@extends('errors::layout')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>404 - Page Not Found</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div class="">
            @section('content')
            <div class="content">
                <div class="bg-[url('/imgs/404.jpg')] h-screen w-screen absolute"></div>
                <div class="absolute flex-col w-screen h-screen p-3 space-y-4 flex items-center justify-center">
                    <div class="max-w-lg border border-[#d38e67] px-10 shadow-2xl shadow-[#f79963] animate-bounce py-16 rounded-full bg-gray-300 dark:bg-gray-900 bg-transparent dark:bg-transparent dark:bg-opacity-40 bg-opacity-40 backdrop-blur-lg dark:backdrop-blur-lg">
                        <div class="text-9xl font-extrabold text-gray-100">404</div>
                        <div class="py-4 px-8 text-center text-gray-200 text-xl">
                            <div class="">Page Not Found</div>
                            <div class="text-sm">seems like you are lost <span class="capitalize">go back</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
        </div>
    </body>
</html>

