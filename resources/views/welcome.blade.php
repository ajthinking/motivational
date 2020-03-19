<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <title>Motivational</title>
    </head>
    <body>
        <div class="flex flex-col h-screen bg-fixed" style="background-image: url({{ url('img/' . $pic) }}); background-size: 100%;">
            <div class="flex flex-1 items-center justify-around font-bold text-gray-300 text-6xl italic bg-{{ $color }} p-20 opacity-75">
                <div class="">{{ $quote }}</div>
            </div>
            <div class="flex-1"></div>
            <div class="flex-1"></div>
        </div>
    </body>
</html>