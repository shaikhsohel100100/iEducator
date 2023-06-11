<!-- Start including Header -->
<?php

include('./Main_Include/header.php');

?>
<!-- End including Header -->



<!-- Start video Background -->

<div class="container-fluid remove-vid-marg">
	<div class="vid-parent">
	<video playsinline autoplay muted loop>
		<source src="videos/banvid.mp4">
	</video>
	<div class="vid-overlay"></div>
	</div>
	<div class="vid-content">
		<h1 class="my-content">Welcome to iEducator</h1>
		<small class="my-content">Learn and Implement</small> <br>

		<?php
		if(!isset($_SESSION['is_login']))
		{
		echo '<a href="#" class="btn" style="background-color: teal; color: white;"data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a>';
		}
		else
		{
			echo '<a href="#" class="btn btn-success mt-3">My Profile</a>';
		}
		?>

		

	</div>
</div>

<!-- End video Background -->



<!-- Start Text Banner -->

<div class="container-fluid remove-vid-marg txt-banner">
	<div class="row bottom-banner">
		<div class="col-sm">
			<h5><i class="fas fa-book-open mr-3"></i>  100+ Online Courses</h5>
		</div>
		<div class="col-sm">
			<h5><i class="fas fa-users mr-3"></i>  Expert Instructors</h5>
		</div>
		<div class="col-sm">
			<h5><i class="fas fa-keyboard mr-3"></i>  Lifetime Access</h5>
		</div>
		<div class="col-sm">
			<h5><i class="fas fa-rupee mr-3"></i>  Money Back  Guarantee</h5>
		</div>
	</div>
</div>


<!-- End Text Banner -->


<!-- Start Most Popular Courses -->

<div class="container mt-5">
	<h1 class="text-center">Popular Course</h1>
	<!-- Start Most Popular Course 1st Card Deck -->

	<div class="card-group">
  <div class="card">
    <img src="images/card-img-1.jpg" class="card-img-top" alt="Java">
    <div class="card-body">
      <h5 class="card-title">Learn java easy way</h5>
      <p class="card-text">The Java SE is a computing-based platform and used for developing desktop or Window based applications. Thus, core Java is the part of Java SE where the developers develop desktop-based applications by using the basic concepts of Java where JDK (Java Development Kit) is a quite familiar Java SE implementation.</p>
	  <div class="card-footer">
		<p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
	</div>
	<a href="coursedetails-1.php" class="btn text-white font-weight-bolder float-right" style="background-color: teal;">Enroll</a>
    </div>
  </div>
  <div class="card">
    <img src="images/card-img-2.jpg" class="card-img-top" alt="java">
    <div class="card-body">
      <h5 class="card-title">Learn C++</h5>
      <p class="card-text">C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs. C++ is portable and can be used to develop applications that can be adapted to multiple platforms. C++ is fun and easy to learn!</p>
      <div class="card-footer">
		<p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
	</div>
	<a href="coursedetails-2.php" class="btn text-white font-weight-bolder float-right"style="background-color: teal;">Enroll</a>
    </div>
  </div>
  <div class="card">
    <img src="images/card-img-3.jpg" class="card-img-top" alt="java">
    <div class="card-body">
      <h5 class="card-title">Pyhton</h5>
      <p class="card-text">Python is a high-level, interpreted, interactive and object-oriented scripting language. Python is designed to be highly readable. It uses English keywords frequently where as other languages use punctuation, and it has fewer syntactical constructions than other languages.</p>
      <div class="card-footer">
		<p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
	</div>
	<a href="coursedetails-3.php" class="btn text-white font-weight-bolder float-right"style="background-color: teal;">Enroll</a>
    </div>
  </div>
</div>
	<!-- End Most Popular Course 1st Card Deck -->

	<!-- Start Most Popular Course 2nd Card Deck -->
	
	<div class="card-group">
  <div class="card">
    <img src="images/card-img-4.jpg" class="card-img-top" alt="python">
    <div class="card-body">
      <h5 class="card-title">PHP Programming</h5>
      <p class="card-text">PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.</p>
	  <div class="card-footer">
		<p class="card-text d-inline">Price: <small><del>&#8377 3000</del></small> <span class="font-weight-bolder">&#8377 300</span></p>
	</div>
	<a href="#" class="btn text-white font-weight-bolder float-right"style="background-color: teal;">Enroll</a>
    </div>
  </div>
  <div class="card">
    <img src="images/card-img-5.jpg" class="card-img-top" alt="python">
    <div class="card-body">
      <h5 class="card-title">Android Development</h5>
      <p class="card-text"> Android developers build mobile applications on the most widely-used mobile platform in the world. You guessed it: Android! They build apps that run on both smartphones and tablets and can even run on Android smartphones or TVs.</p>
	  <div class="card-footer">
		<p class="card-text d-inline">Price: <small><del>&#8377 3000</del></small> <span class="font-weight-bolder">&#8377 300</span></p>
	</div>
	<a href="#" class="btn text-white font-weight-bolder float-right" style="background-color: teal;">Enroll</a>
    </div>
  </div>
  <div class="card">
    <img src="images/card-img-6.jpg" class="card-img-top" alt="python">
    <div class="card-body">
      <h5 class="card-title">Machine Learning (ML)</h5>
      <p class="card-text">Machine learning is a branch of artificial intelligence (AI) and computer science which focuses on the use of data and algorithms to imitate the way that humans learn, gradually improving its accuracy.</p>
	  <div class="card-footer">
		<p class="card-text d-inline">Price: <small><del>&#8377 3000</del></small> <span class="font-weight-bolder">&#8377 300</span></p>
	</div>
	<a href="#" class="btn text-white font-weight-bolder float-right"style="background-color: teal;">Enroll</a>
    </div>
  </div>
</div>
<div class="text-center m-2">
		<a href="courses.php" class="btn btn-sm mb-4" style="background-color: teal; color: white;">View All Courses</a>
	</div>
</div>


<!-- End Most Popular Courses -->


<!-- Start Contact Us -->

<?php
include('./contact.php');
?>

<!-- End of Contact Us -->


<!-- Start Testimonials -->

<section class="testimonials">

	<div class="container">
		<h1>Testimonials</h1>
		<p class="text-center">Subscribe Easy Tutorials channel to watch more videos</p>
		<div class="row">
			
			<div class="col-md-4 text-center">
				<div class="profile">
					<!-- <img src="images/user1.jpg" alt="user"> -->
					<blockquote>like this video and ask your question  in comment section.</blockquote>
					<h3>Avination Kr <span>Co-founder at XYZ</span></h3>
				</div>
			</div>
			
			<div class="col-md-4 text-center">
				<div class="profile">
					<!-- <img src="images/user1.jpg" alt="user"> -->
					<blockquote>like this video and ask your question  in comment section.</blockquote>
					<h3>Avination Kr <span>Co-founder at XYZ</span></h3>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="profile">
					<!-- <img src="images/user1.jpg" alt="user"> -->
					<blockquote>like this video and ask your question  in comment section.</blockquote>
					<h3>Avination Kr <span>Co-founder at XYZ</span></h3>
				</div>
			</div>

		</div>
	</div>


</section>


<!-- Start Testimonials -->


<!-- Start Social follow -->

<div class="container-fluid" style="background-color: teal;">
	<div class="row text-white text-center p-1">
		<div class="col-sm">
			<a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i>Facebook</a>
		</div>
		<div class="col-sm">
			<a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>
		</div>
		<div class="col-sm">
			<a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i>Whatsapp</a>
		</div>
		<div class="col-sm">
			<a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i>Instagram</a>
		</div>
	</div>
</div>

<!-- End Social follow -->

<!-- Start About Section -->


<div class="container-fluid p4" style="background: color #e9ecef">
<div class="container" style="background-color: #e9ecef">
<div class="row text-center">
	<div class="col-sm">
		<h5>About Us</h5>
		<p>iEducator provides universal access to the world's best education, partnering with top universities and organisations to offer courses online.</p>
	</div>
	<div class="col-sm">
		<h5>Category</h5>
		<a href="#" class="text-dark">Web Development</a><br>
		<a href="#" class="text-dark">Web Designing</a><br>
		<a href="#" class="text-dark">Android App Dev</a><br>
		<a href="#" class="text-dark">iOS Development</a><br>
		<a href="#" class="text-dark">Data Analysis</a><br>
	</div>
	<div class="col-sm">
		<h5>Contact Us</h5>
		<p>iEducator Pvt Ltd <br> Near Osmanpura, Aurangabad <br> Pin:431001, Phone:7758065486</p>
	</div>
</div>
</div>
</div>

<!-- End About Section -->



<!-- Start including Footer -->
<?php

include('./Main_Include/footer.php');

?>
<!-- End including Footer -->
