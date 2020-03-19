<?php

use Illuminate\Support\Facades\Route;

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

function random_pic()
{
    $files = glob(public_path('img') . '/*.*');
    $file = array_rand($files);
    return basename($files[$file]);
}

function random_quote()
{
    $quotes = [
        "What kind of Monster are you?",
        "You get to chose your sacrifice",
        "Achieve the impossible.",
        "The master has failed more times than the beginner has even tried",
        "To become the master you must first be willing to be the fool",
        "0% of those who never try succeeds",
        "Ignore the nay-sayers",
        "Its not about what you do, its about who you become",
    ];
    
    $quote = array_rand($quotes);

    return $quotes[$quote];
}

function random_color()
{
    $colors = [
        "yellow-500",
        "indigo-500",
        "blue-500",
        "green-500",
        "teal-700",
        "purple-400",
    ];
    
    $color = array_rand($colors);

    return $colors[$color];    
}

Route::get('/{quote?}', function ($quote = null) {
    return view('welcome')->with([
        "pic" => random_pic(),
        "quote" => $quote ? $quote : random_quote(),
        "color" => random_color(),
    ]);
});
