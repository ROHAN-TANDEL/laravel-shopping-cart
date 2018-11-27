@extends('standards.header')
    
    @section('after_header')
        
        @section('checkout')
       <div class="row"> 
        <div class="col-md-8">
          <div class="accordion" id="product-checkout">
            @if (Route::has('login'))
            @auth
            @else
            <div class="card">
              <div class="card-header" id="heading-login">
                <h5 class="mb-0">
                  <button class="btn btn-link accordan-btn-link" type="button" data-toggle="collapse" data-target="#checkout-login" aria-expanded="true" aria-controls="checkout-login">
                    LOGIN
                  </button>
                </h5>
              </div>

              <div id="checkout-login" class="collapse show" aria-labelledby="heading-login" data-parent="#product-checkout">
                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>

                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
              </div>
            </div>
            @endauth
            @endif
            <div class="card">
              <div class="card-header" id="heading-address">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed accordan-btn-link" type="button" data-toggle="collapse" data-target="#checkout-address" aria-expanded="false" aria-controls="checkout-address">
                    ADDRESS
                  </button>
                </h5>
              </div>
              <div id="checkout-address" class="collapse" aria-labelledby="heading-address" data-parent="#product-checkout">
                <div class="card-body position-relative">
                      <button type="submit" class="btn btn-primary" onclick="getLocation()">Use My Current Location</button>
                      <p id="demo"></p>
                      <form class="needs-validation" novalidate>
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationTooltip01">Name</label>
                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                            <div class="valid-tooltip">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationTooltip02">Mobile Number</label>
                            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                            <div class="valid-tooltip">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="validationTooltip02">Address</label>
                            <textarea type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                            </textarea>
                            <div class="valid-tooltip">
                              Looks good!
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="validationTooltip03">City</label>
                            <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                            <div class="invalid-tooltip">
                              Please provide a valid city.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationTooltip04">State</label>
                            <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                            <div class="invalid-tooltip">
                              Please provide a valid state.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationTooltip05">Zip</label>
                            <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                            <div class="invalid-tooltip">
                              Please provide a valid zip.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationTooltip05">Locality</label>
                            <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                            <div class="invalid-tooltip">
                              Please provide a valid zip.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationTooltip05">Landmark</label>
                            <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                            <div class="invalid-tooltip">
                              Please provide a valid zip.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="validationTooltip05">Alternate Phone Number</label>
                            <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                            <div class="invalid-tooltip">
                              Please provide a valid zip.
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Save & Submit</button>
                      </form>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading-order-summary">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed accordan-btn-link" type="button" data-toggle="collapse" data-target="#checkout-order" aria-expanded="false" aria-controls="checkout-order">
                    ORDERS
                  </button>
                </h5>
              </div>
              <div id="checkout-order" class="collapse" aria-labelledby="heading-order-summary" data-parent="#product-checkout">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <img  class="col-md-12 img img-responsive" src="img/photo1.jpg">
                    </div>
                    <div class="col-md-5">
                      <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <small>Devilvered by 12/12 ( free Shipping)</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading-payment">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed accordan-btn-link" type="button" data-toggle="collapse" data-target="#checkout-payment" aria-expanded="false" aria-controls="checkout-payment">
                    PAYMENTS
                  </button>
                </h5>
              </div>
              <div id="checkout-payment" class="collapse" aria-labelledby="heading-payment" data-parent="#product-checkout">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="img/photo1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
      </div>
          <style type="text/css">
            .accordion > *,.accordion > button {
              font-weight: 600;
              color: black;
            }
            .accordan-btn-link {
                font-weight: 600;
                color: black;
                background-color: transparent;
            }
            .body-content-outline {
              padding: 2%;
            }
          </style>
          <script type="text/javascript">
              var x = document.getElementById("demo");

              function getLocation() {
                  if (navigator.geolocation) {
                      navigator.geolocation.getCurrentPosition(showPosition);
                  } else { 
                      x.innerHTML = "Geolocation is not supported by this browser.";
                  }
              }

              function showPosition(position) {
                  x.innerHTML = "Latitude: " + position.coords.latitude + 
                  "<br>Longitude: " + position.coords.longitude;
              }
          </script>
        @endsection
@endsection