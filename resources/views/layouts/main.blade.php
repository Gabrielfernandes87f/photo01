<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
@include('layouts.head')

</head>

<body>

    <header id="header" class="d-flex align-items-center">
        <x-navbar />
  </header><!-- End Header -->

    <main>
        <div class=" py-4 mb-4 mt-4">
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </main>



    <!-- FOOTER -->

    <footer id="footer">
        <x-footer />

    </footer><!-- End Footer -->


</body>

</html>
