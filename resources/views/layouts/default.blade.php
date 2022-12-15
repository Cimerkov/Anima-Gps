<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>



    <div id="main" class="container-fluid">
        @yield('content')
</div>
        <footer class="bg dark">
            @include('includes.footer')
        </footer>

</body>

</html>