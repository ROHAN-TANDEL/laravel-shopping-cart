<div class="one-time col-md-12">
	<div class="slider">
  <div>
    <img class="img-fluid img-responsive rounded slide-photo" src="img/photo1.jpg" />
  </div>
  <div>
    <img class="img-fluid img-responsive rounded slide-photo" src="img/photo2.jpg" />
  </div>
  <div>
    <img class="img-fluid img-responsive rounded slide-photo" src="img/eyewear.jpeg" />
  </div>
</div>

	
</div>
<style type="text/css">
.slide-photo {
	min-width: max-content;
	min-width: -webkit-fill-available;
	min-width: -moz-available;
	max-height: 450px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){

  	 	$('.slider').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		  autoplay: true,
		  speed: 100,
		});
  	 });
</script>