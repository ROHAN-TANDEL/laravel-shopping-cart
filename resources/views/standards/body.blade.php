@yield('header')
@yield('primary_header')
<div style="display: none">@include('header')</div>
<div class="fluid-container">
<!-- class="flex-center position-ref full-height"> -->
 <!--            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else -->
      <!--                   <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a> -->
<!--                     @endauth
                </div>
            @endif -->
@yield('home_slider')
@yield('product')
@yield('checkout')

</div>
@include('footer')