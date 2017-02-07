<html lang="en">
<head>
    @include('includes.ltr.head')
    @yield('head')
</head>
<body>
<header> <!-- this has to be removed -->
    @include('includes.ltr.header')
</header>
<article>
    <div class="container-fluid grey-background" style="padding-bottom: 0px!important;">
        <div class="row-fluid">
            @yield('content')
        </div>
    </div>
</article>
@yield('scripts')
<footer>
    @include('includes.ltr.footer')
</footer>
</body>
</html>