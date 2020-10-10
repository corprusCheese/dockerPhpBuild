<!DOCTYPE html>
<html>
<head>
    @include("include.head")
</head>
<body>
    @include("include.header")

    <div class="wrapper">
        @yield('content')
    </div>

    @include("include.footer")
</body>
</html>
