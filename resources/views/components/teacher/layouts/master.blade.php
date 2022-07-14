<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ isset($title) && $title->isNotEmpty() ? $title : env('APP_NAME') }} | {{ __('teacher.dashboard') }}</title>
    <!-- main-styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        media="screen"
        href="https://fontlibrary.org//face/droid-arabic-kufi"
        type="text/css"
    />
    <!--style-->

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <style>
        .dd-ff.dropdown-menu.show {
            left: 0 !important;
            right: auto !important;
        }
    </style>
</head>

<body>
<!-- start navbar -->
<x-teacher.includes.header/>
<!-- end navbar -->

<!-- Start Sidebar -->
<x-teacher.includes.sidebar/>
<!-- End Sidebar -->

{{ $slot }}

<!-- scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/js/slider.js') }}"></script>
<script src="{{ asset('assets/js/custom_teacher.js') }}"></script>
<script>
    //count followers
    var clicks = 0;

    function onClick() {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
    }
</script>
</body>
</html>
