<nav class="navbar navbar-expand-sm bg-light sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Siaist</a>

  <!-- Links -->
  <ul class="navbar-nav invisible">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown invisible">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>
<!-- <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"><h4><bold><strong>SieIst</strong></bold></h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse position-relative" id="navbarNav" style="margin-top: 3%;">
    
    <ul class="navbar-nav mr-md-auto shadow p-0 bg-white rounded" style="box-shadow: 1px 1px 12px grey; background-color: grey; display: none">
      @include('ethenic_wear')
    </ul> -->
    <!-- <ul class="navbar-nav ml-md-auto"> -->
    <!-- <ul class="navbar-nav ml-md-auto position-relative shadow p-0 bg-white rounded" style="box-shadow: 1px 1px 12px grey; background-color: grey;">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
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
</nav> -->

<style type="text/css">
  nav > ul > li > a, .nav-item {
    font-size: 14px;
    font-weight: 600;
  }
  .dropdown:hover>.dropdown-menu {
    display: block; 
   }
   a,a:hover {
    color: #000000;
    text-decoration: none;
   }
   .navbar-brand {
    /*background-color: #4eb989;
    /*color: #f9f2f2;*/
   }
</style>
