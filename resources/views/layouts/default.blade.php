<!DOCTYPE html>
<html>
<head>
    @include("include.head")
</head>
<body>
    <div class="wrapper">
        @include("include.header")

        @yield('settings')

        <main class="py-4">
            @yield('content')
        </main>

        @include("include.footer")
    </div>
</body>
</html>
