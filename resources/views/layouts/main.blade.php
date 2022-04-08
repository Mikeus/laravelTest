<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
    </head>
    <body>
        <header style="background: black; color: white">
            <div class="logo">MichalZ.com</div>
            <nav>
                <a href="/">Home</a><a href="/about">About</a
                ><a href="/contact">Contact</a>
            </nav>
        </header>
        <main>@yield('content')</main>
        <footer style="background: black; color: white">
            <div class="logo">MichalZ.com This is footer</div>
        </footer>
    </body>
</html>
