<div class="fluid-container">
<div class="panel position-static shadow p-3 mx-2 my-3 bg-white rounded" style="box-shadow: 1px 1px 12px grey; background-color: grey;">
<h3>Ethenic Cloths</h3>
<div class="col-md-12 mt-25 position-static" style="margin-top: 25px;">
	<div class="blue">
		<div class="text-center product-details position-static">
			<img class="img-fluid img-responsive rounded slide-photo" src="img/photo1.jpg" />
			<br>
			<h5>total details of it</h5>
			<h6>total details of it</h6>
			<h6>total details of it</h6>
			<div class="col-md-12 add-buy">
				<a href="" class="alert">Add</a>
				<a href="" class="alert" data-toggle="modal" data-target="#myModal">Buy</a>
			</div>
		</div>
		<div class="text-center product-details">
			<img class="img-fluid img-responsive rounded slide-photo" src="img/photo1.jpg" />
			<br>
			<h5>total details of it</h5>
			<h6>total details of it</h6>
			<h6>total details of it</h6>
			<div class="col-md-12 add-buy">
				<a href="" class="alert">Add</a>
				<a href="" class="alert">Buy</a>
			</div>
		</div>
		<div class="text-center product-details">
			<img class="img-fluid img-responsive rounded slide-photo" src="img/photo1.jpg" />
			<br>
			<h5>total details of it</h5>
			<h6>total details of it</h6>
			<h6>total details of it</h6>
			<div class="col-md-12 add-buy">
				<a href="" class="alert">Add</a>
				<a href="" class="alert">Buy</a>
			</div>
		</div>
		<div class="text-center product-details">
			<img class="img-fluid img-responsive rounded slide-photo" src="img/photo1.jpg" />
			<br>
			<h5>total details of it</h5>
			<h6>total details of it</h6>
			<h6>total details of it</h6>
			<div class="col-md-12 add-buy">
				<a href="" class="alert">Add</a>
				<a href="" class="alert">Buy</a>
			</div>
		</div>
		<div class="text-center product-details">
			<img class="img-fluid img-responsive rounded slide-photo" src="img/photo1.jpg" />
			<br>
			<h5>total details of it</h5>
			<h6>total details of it</h6>
			<h6>total details of it</h6>
			<div class="col-md-12 add-buy">
				<a href="" class="alert">Add</a>
				<a href="" class="alert">Buy</a>
			</div>
		</div>
		<div class="text-center product-details">
			<img class="img-fluid img-responsive rounded slide-photo" src="img/photo1.jpg" />
			<br>
			<h5>total details of it</h5>
			<h6>total details of it</h6>
			<h6>total details of it</h6>
			<div class="col-md-12 add-buy">
				<a href="" class="alert">Add</a>
				<a href="" class="alert">Buy</a>
			</div>
		</div>
		<div class="text-center product-details">
			<img class="img-fluid img-responsive rounded slide-photo" src="img/photo1.jpg" />
			<br>
			<h5>total details of it</h5>
			<h6>total details of it</h6>
			<h6>total details of it</h6>
			<div class="col-md-12 add-buy">
				<a href="" class="alert">Add</a>
				<a href="" class="alert">Buy</a>
			</div>
		</div>
		<div class="text-center product-details">
			<img class="img-fluid img-responsive rounded slide-photo" src="img/photo1.jpg" />
			<br>
			<h5>total details of it</h5>
			<h6>total details of it</h6>
			<h6>total details of it</h6>
			<div class="col-md-12 invisible add-buy">
				<a href="" class="alert">Add</a>
				<a href="" class="alert">Buy</a>
			</div>
		</div>
		<div class="text-center product-details">
			<img class="img-fluid img-responsive rounded slide-photo" src="img/photo1.jpg" />
			<br>
			<h5>total details of it</h5>
			<h6>total details of it</h6>
			<h6>total details of it</h6>
			<div class="col-md-12 add-buy">
				<a href="" class="alert">Add</a>
				<a href="" class="alert">Buy</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php $data=[
        'mainTitle' => "img/photo1.jpg",
        'mainContent' => "sorry, but the requested page does not exist :("
    ]  ?>
@include('buymodal', $data)

<!-- @include('buymodal',['imagica' => "img/photo1.jpg", 'name' => "total details of it"]) -->
<style type="text/css">

.product-details:hover > .add-buy {
	visibility: visible;
	color: grey;
	font-weight: 600;
}
.product-details h5 {
	color: green;
	font-weight: 600;
}
.product-details h6 {
	color: brown;
	font-weight: 600;
} 
.product-details:hover {
	box-shadow: 0px 0px 10px white;
	border-radius: 2%;
	position: relative;
	box-shadow: 0px 0px 12px 2px #58585833;
	z-index: 12;
	margin:2% 0;
	/*transform: scale(1.3);*/
}
.slick-next{right:0;}.slick-prev{left:0;z-index:1;}
.blue img {
	padding: 3% 3% 0% 3%;
	/*transform: matrix(1, 0, -0.099192, 1.2, -2, 0);*/

}
.blue img:hover  {
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

$('.blue').slick({
  infinite: false,
  slidesToShow: 6,
  slidesToScroll: 1,
  lazyLoad: 'ondemand',
});
</script>