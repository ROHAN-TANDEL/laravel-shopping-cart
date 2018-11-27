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
      <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="UY6TK2WF9P6NG">
      <input type="image" src="https://www.sandbox.paypal.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
      </form>


          <form class="container text-center col-md-4 " method="POST" id="payment-form"  action="/payment/add-funds/paypal">
            {{ csrf_field() }}
            <h2 class="w3-text-blue">Payment Form</h2>
            <p>Pay Money</p>
            <p>      
            <label class="w3-text-blue"><b>Enter Amount</b></label>
            <input class="w3-input w3-border" name="amount" type="text" value="2"></p>      
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

<script type="text/javascript">
    $('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('values') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  // var modal = $(this)
  console.log(recipient);
  // modal.find('.modal-title').text('New message to ' + recipient)
  // modal.find('.modal-body input').val(recipient)
});

</script>