<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        @if(isset($breadcrumb))
            {{ implode(" / ", $breadcrumb) }}
        @endif
        <ul>
            @foreach ($categories as $category)
                @if($category->parent_id == 0 )
                    @include('category', $category)
                @endif
            @endforeach
        </ul>
    </body>
</html>
