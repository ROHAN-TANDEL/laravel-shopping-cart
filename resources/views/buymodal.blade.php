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
      <h5><strong>{{$data['mainContent']}}</strong></h5>
      <h3 id="unit_price">Product not available for sale</h5>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <a href="{{ route('checkout') }}"><button type="button" class="btn btn-success">Make Payment</button></a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<script type="text/javascript">
    $('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data('values');
  console.log(recipient);
  $('#unit_price').html("<strong>available at "+recipient['unit_price']+"$ Discounted<strike> "+recipient['id']+"$</strike></strong>");
});

</script>

<!-- backup code for paypal integration -->
        <!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="UY6TK2WF9P6NG">
          <input type="image" src="https://www.sandbox.paypal.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
          </form> -->


        <!--<form class="container text-center col-md-4 " method="POST" id="payment-form"  action="/payment/add-funds/paypal">
            {{ csrf_field() }}
            <h2 class="w3-text-blue">Payment Form</h2>
            <p>Pay Money</p>
            <p>      
            <label class="w3-text-blue"><b>Enter Amount</b></label>
            <input class="w3-input w3-border" name="amount" type="text" value="2"></p>      
            <button class="w3-btn w3-blue">Pay with PayPal</button></p>
          </form> -->