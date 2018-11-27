<div class="fluid-container">
<div class="panel position-static shadow p-3 mx-2 my-3 bg-white rounded" style="box-shadow: 1px 1px 12px grey; background-color: grey;">
<h3>Ethenic Cloths</h3>
<div class="col-md-12 mt-25 position-static" style="margin-top: 25px;">
	<div class="{{$violet}}"></div>
</div>
</div>
</div>
<?php $data=[
        'mainTitle' => "img/photo1.jpg",
        'mainContent' => "total details of it"
    ]  ?>
@include('buymodal', $data)

<style type="text/css">

.product-details:hover > .add-buy {
	visibility: visible;
	color: grey;
	font-weight: 600;
}
.product-details p {
	color: green;
	font-weight: 600;
}
.product-details p {
	color: #008a8f;
	font-weight: 600;
} 
.product-details:hover {
	box-shadow: 0px 0px 10px white;
	border-radius: 2%;
	/*margin:2% 0;*/
	position: relative;
	z-index: 12;
	box-shadow: 0px 0px 12px 2px #58585833;
	transform: scale(1.1);
}
.slick-next{right:0;}.slick-prev{left:0;z-index:1;}
.{{$violet}} img {
	padding: 3% 3% 0% 3%;
	/*transform: matrix(1, 0, -0.099192, 1.2, -2, 0);*/

}
.{{$violet}} img:hover  {
	padding: 0;
	position: relative;
	z-index: 1;
}
.slick-arrow,.slick-arrow:hover,.slick-next:focus, .slick-next:hover, .slick-prev:focus, .slick-prev:hover {
	background-color: grey;
    background-size: 100px 100px;
    width: 20px;
    height: 100px;
}
</style>

<script type="text/javascript">

$.ajax({
   url: "api/product",
   dataType: "json",
   async: false,
   cache:true,
   contentType: "application/json",
   success: function( response ) {
   	for (var i = response.length - 1; i >= 0; i--) {
   		// response[i];
   		
   		let slider_window ='<div class="text-center product-details"> <img class="img-fluid img-responsive rounded slide-photo" src="img/photo2.jpg" /> <p>'+response[i]['name']+'<br>'+response[i]['category']+'<br>'+response[i]['unit_price']+'</p> <div class="col-md-12 add-buy"> <a href="" class="alert">Add</a> <a href="" class="alert" data-toggle="modal" data-target="#myModal" data-values='+"'"+JSON.stringify(response[i])+"'"+'>Buy</a> </div> </div>';
       

       console.log( response[i] );
       $('.{{$violet}}').append(slider_window);
   	}
   }
});

$('.{{$violet}}').slick({
  infinite: false,
  slidesToShow: 6,
  slidesToScroll: 1,
  lazyLoad: 'ondemand',
});

</script>
