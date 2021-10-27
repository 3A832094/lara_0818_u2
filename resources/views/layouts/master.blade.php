<!DOCTYPE html>
<html>
    <head>
        <title>@yeild('title')| My Blog</title>
    </head>
    <body>
    @include('layouts.partials.navigation')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
