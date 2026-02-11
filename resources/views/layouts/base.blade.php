<!DOCTYPE html>
<html lang="en" @yield('html_attribute')>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--=====TITLE=======-->
    <title> {{ $title }} </title>

    <!--=====FAV ICON=======-->
    <link rel="shortcut icon" href="{{ $logo }}" />

    @yield('css')

    @include('components/head-css')

</head>

<body @yield('body_attribute')>

    @include('components/preloader')

    <div class="paginacontainer">

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>

    @include('components/mobile-nav')

    @yield('content')

    @include('components/right-sidebar')

    @include('components/footer-script')

    @yield('scripts')

</body>

</html>
