<!DOCTYPE html>
<html>
<head>
    @include("include.head")
</head>
<body>
    <div class="wrapper">
        @include("include.header")

        <main>
            @yield('settings')
            @yield('content')
        </main>

        @yield('footer')
    </div>
</body>
</html>
