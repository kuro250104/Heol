<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
</head>

<body>
    <!-- NAV BAR -->
    @include('layout.navbar')
    <!-- NAV BAR END -->

    <!-- Content Start -->
    @yield('content')
    <!-- Content End -->

    <!-- Footer Start -->
    @include('layout.payement_info')
    <!-- Footer End -->
    
    <!-- Footer Start -->
    @include('layout.foot')
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    @include('layout.import_js')

</body>