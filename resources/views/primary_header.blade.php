<nav class="navbar navbar-expand-lg sticky-top">
  <a class="navbar-brand invisible" href="#"><h4><bold><strong>SieIst</strong></bold></h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    
    <ul class="navbar-nav mr-md-auto">
            @if (Route::has('login'))
                    @auth
                      <li class="nav-item">
                        <a class="nav-link " href="{{ url('/home') }}">Home</a>
                      </li>
                    @else
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('login') }}">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{ route('register') }}">Register</a>
                      </li>
                    @endauth
            @endif
    </ul>
    <!-- <ul class="navbar-nav ml-md-auto"> -->
    <ul class="navbar-nav ml-md-auto">
      @include('clothing')
      @include('ethenic_wear')
      <li class="nav-item">
        <a class="nav-link " href="#">Beauty & care</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Traditional</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Downtown Style</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Trending Today</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Jewellary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Foot Wear</a>
      </li>
    </ul>
  </div>
</nav>

<style type="text/css">
  nav > ul > li > a, .nav-item {
    font-size: 14px;
    font-weight: 600;
  }
</style>
