<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">You are buying</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <img class="img-fluid img-responsive rounded slide-photo" src="{{$data['mainTitle']}}" />
      <br>
      <h5>{{$data['mainContent']}}</h5>
          <form class="container text-center col-md-4 " method="POST" id="payment-form"  action="/payment/add-funds/paypal">
            {{ csrf_field() }}
            <h2 class="w3-text-blue">Payment Form</h2>
            <p>Pay Money</p>
            <p>      
            <label class="w3-text-blue"><b>Enter Amount</b></label>
            <input class="w3-input w3-border" name="amount" type="text"></p>      
            <button class="w3-btn w3-blue">Pay with PayPal</button></p>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Make Payment</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
