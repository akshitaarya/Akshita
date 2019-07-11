<!doctype html>
<html>
<head>
<title> TO DO LIST </title>
</head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <h1> TO DO LIST!! </h1>
        <p>
            <a href="/projects">Tasks</a>
        </p>

            
        </div>
    </body>
</html>
