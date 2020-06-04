<?php
	include ("header.php");
?>

<section id="main">
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/homepage/sales.jpg" style="width:100%">
  <div class="text">Major Sales Up to 30% Off</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/homepage/summer_sale.jpg" style="width:100%">
  <div class="text">All New Design for Summer</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/homepage/buy_more.jpg" style="width:100%">
  <div class="text">Buy More Save More Offer</div>
</div>
</div>

<div style="text-align:center">
  <span class="dot" onclick="currentDiv(1)"></span>
  <span class="dot" onclick="currentDiv(2)"></span>
  <span class="dot" onclick="currentDiv(3)"></span>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);
showSlides();

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) { //function to change banner via onclick
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

function showSlides() { //function to change banner every interval automatically
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every ? seconds
}
</script>
			<br><br>
			<h1>Welcome to our FashionWave online store!</h1>
			<p>
				New arrivals are here. This season, we are bringing you exceptional clothing for men and women.
				Browse stylish, affordable, high-quality basics that are simple and essential here in our new online
				store.
				$20 off for your first purchase. Enter code: <b>20OFFNEW</b> during checkout.
			</p>
			<br />
			<h1>Our Story</h1>
			<div class="flip-box">
				  <div class="flip-box-inner">
				    <div class="flip-box-front">
				      <img align="left" src="images/homepage/founder.jpg" alt="FashionWave founder" style="width:450px; height:300px">
				    </div>
				    <div class="flip-box-back">
							<br><br><br><br>
				      <h2>Katherine Pauline</h2>
				      <p>The founder of Fashionwave</p>
							<p>"Fashion is the wave of lifestyle!"</p>
				    </div>
				  </div>
				</div>
			<p>
				FashionWave is constructed by 20 middle aged women who design and produce the clothes for both women and
				men.
				We are ambitious and innovative in our design, knowing what customers really want.
			</p>
			<p>We are Australian brand. All clothes are special and original.
				Lauching this online store is our first stage of getting exposure online and expanding our business.
			</p>
			<h3><b><I>"The secret of great style is to feel good in what you wear."</I></b></h3>
			<p>This is what FashionWave's founder, Katherine Pauline, says about designs and lifestyle. We are committed
				to give you the best clothings you will ever need! Fashion is what you buy, style is what you do with
				it. </p>
		</section>
	</div>

<?php
	include ("footer.php");
?>
