<!DOCTYPE html>
<html>
<head>
    @include("include.head")
</head>
<body>
    <div class="wrapper">
        @include("include.header")

        <div class="content">
            @yield('content')
        </div>

        @include("include.footer")
    </div>
</body>
</html>
