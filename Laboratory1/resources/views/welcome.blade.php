<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="All about Ken Anne Acosta">
        <title>keniii blog</title>
        <link rel="stylesheet" href="{{ asset('style.css') }}">
    </head>

    <body>
        <div class="hero">

            <video autoplay loop muted playsinline class="back-video">
                <source src="{{ asset('images/girl.mp4') }}" type="video/mp4">
            </video>

            <nav>
                <img src="{{ asset('images/logo/keniii.png') }}" class="logo">
                <div class="nav-links">
                    <a href="{{ url('/') }}">HOME</a>
                    <a href="{{ url('/content') }}">CONTENT</a>
                    <a href="{{ url('/about') }}">ABOUT</a>
                </div>
            </nav>

            <div class="content">
                <h1>keniii blog</h1>
                <a href="{{ url('/content') }}">MORE ABOUT ME</a>
            </div>
        </div>
    </body>
</html>