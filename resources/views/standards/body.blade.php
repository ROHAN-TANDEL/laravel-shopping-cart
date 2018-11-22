@yield('header')
@yield('primary_header')
    <div class="fluid-container body-content-outline">
        @yield('home_slider')
        @yield('product')
        @yield('checkout')
    </div>
@include('footer')