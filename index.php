<!DOCTYPE html>
<html>
<head>
  <title>Online CV</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
</head>
<body>

<div class="container" style="outline-style: solid; color: #3399FF;">
	<!--<div class="jumbotron" align="center" style="background-color:white;">
		<h1>Online CV</h1>
	</div>-->
	
	<div class="header">
		<h1>Fran Kennedy</h1>
		<p>Online Portfolio - RPA analyst</p>
	</div>
	
	<div class="row">
		<div class="col-lg-3" style="background-color:white;">
		
			<div>
				<div class="card-header" style="background-color:white;" align="center" ><img src="images/profile.jpg" class="img-thumbnail"></div>
				<div class="card-body" align="center">I'm a Dublin based ICT professional. I like my football from Liverpool and my music from Manchester.<br><i class='fas fa-map-marker-alt'> Dublin, IE</i></div> 
				<div class="card-footer" style="background-color:white;" align="center">
					<a href="https://www.facebook.com/the.real.everlast" target="_blank"><img src="images/fb_black.png" onMouseOver="MouseRollover(this)" onMouseOut="MouseOut(this)"></a>
					<a href="#" target="_blank"><img src="images/insta_black.png" onMouseOver="MouseRollover1(this)" onMouseOut="MouseOut1(this)"></a>
					<a href="https://twitter.com/celticjazz" target="_blank"><img src="images/twitter_black.png" onMouseOver="MouseRollover2(this)" onMouseOut="MouseOut2(this)"></a>
					<a href="https://ie.linkedin.com/in/fran-kennedy-548982115?trk=people-guest_people_search-card" target="_blank"><img src="images/linkedin_black.png" onMouseOver="MouseRollover3(this)" onMouseOut="MouseOut3(this)"></a>
					<a href="https://api.whatsapp.com/send?phone=0872447218" target="_blank"><img src="images/whatsapp_black.png" onMouseOver="MouseRollover4(this)" onMouseOut="MouseOut4(this)"></a>
					<a href="#" target="_blank"><img src="images/www_black.png" onMouseOver="MouseRollover5(this)" onMouseOut="MouseOut5(this)"></a>
				</div>
			</div>
		
		</div>
	
	
		<div class="col-lg-9" style="background-color: white;">			
					
			<div id="accordion" style="padding: 20px;">
				<div class="card">
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseOne">Introduction <i class="fa fa-plus"></i></a>
					</div>
					<div id="collapseOne" class="collapse" data-parent="#accordion">
						<div>
							<?php echo file_get_contents("intro.php"); ?>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">Education <i class="fa fa-plus"></i></a>
					</div>
					<div id="collapseTwo" class="collapse" data-parent="#accordion">
						<div class="card-body">
							<?php echo file_get_contents("education.php"); ?>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">Experience <i class="fa fa-plus"></i></a>
					</div>
					<div id="collapseThree" class="collapse" data-parent="#accordion">
						<div class="card-body">
							<?php echo file_get_contents("experience.php"); ?>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">Projects <i class="fa fa-plus"></i></a>
					</div>
					<div id="collapseFour" class="collapse" data-parent="#accordion">
						<div class="card-body">
							<?php echo file_get_contents("projects.php"); ?>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">Interests <i class="fa fa-plus"></i></a>
					</div>
					<div id="collapseFive" class="collapse" data-parent="#accordion">
						<div class="card-body">
							<?php echo file_get_contents("interests.php"); ?>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">Contact Me <i class="fa fa-plus"></i></a>
					</div>
					<div id="collapseSix" class="collapse" data-parent="#accordion">
						<div class="card-body">
							<?php echo file_get_contents("contact.php"); ?>
						</div>
					</div>
				</div>
			</div>								
		</div>		
		
	</div>
</div>

<script language="javascript">
function MouseRollover(MyImage) {
        MyImage.src = "images/fb_white.png";		
    }
function MouseOut(MyImage) {
        MyImage.src = "images/fb_black.png";		
    }
function MouseRollover1(MyImage1) {
        MyImage1.src = "images/insta_white.png";		
    }
function MouseOut1(MyImage1) {
        MyImage1.src = "images/insta_black.png";		
    }
function MouseRollover2(MyImage2) {
        MyImage2.src = "images/twitter_white.png";		
    }
function MouseOut2(MyImage2) {
        MyImage2.src = "images/twitter_black.png";		
    }
function MouseRollover3(MyImage3) {
        MyImage3.src = "images/linkedin_white.png";		
    }
function MouseOut3(MyImage3) {
        MyImage3.src = "images/linkedin_black.png";		
    }
function MouseRollover4(MyImage4) {
        MyImage4.src = "images/whatsapp_white.png";		
    }
function MouseOut4(MyImage4) {
        MyImage4.src = "images/whatsapp_black.png";		
    }
function MouseRollover5(MyImage5) {
        MyImage5.src = "images/www_white.png";		
    }
function MouseOut5(MyImage5) {
        MyImage5.src = "images/www_black.png";		
    }
</script

<!-- script for slideshow-->
	
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
