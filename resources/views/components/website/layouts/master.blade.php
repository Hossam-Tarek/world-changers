<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>World Changers</title>
        <!-- main-styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
        <link
            rel="stylesheet"
            type="text/css"
            href="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.css"
        />
        <link
            rel="stylesheet"
            href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous"
        />
        <!--style-->
        <link rel="stylesheet" href="{{ asset('assets/css/selectize.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        @if(isset($styles) && $styles->isNotEmpty()) {{ $styles }} @endif
    </head>
    <body>
        <x-website.includes.header/>
        <x-website.includes.signup-modal/>
        <x-website.includes.login-modal/>
        <x-website.includes.use-free-modal/>

        {{ $slot }}

        <x-website.includes.footer/>

        <!-- scripts -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/slider.js') }}"></script>
        <script src="{{ asset('assets/js/index.js') }}"></script>
        <script src="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.js"></script>
        @if(isset($scripts) && $scripts->isNotEmpty()) {{ $scripts }} @endif
    </body>
</html>
