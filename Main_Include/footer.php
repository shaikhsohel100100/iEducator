<!-- Start footer -->

<footer class="container-fluid bg-dark text-center p-2">
	<small class="text-white">Copyright &copy; 2022 || Design By E-Learning || <a href="#login"data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a></small>
</footer>

<!-- End footer -->


<!-- Start Student Registration Modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Student Registration</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
	
		<!-- Start Student Registration Form -->
	<?php
    include('studentRegistration.php');
	?>
	<!-- End Student Registration Form -->

		</div>
		<div class="modal-footer">
			<span id="successMsg"></span>
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Signup</button>
		</div>
	  </div>
	</div>
  </div>
  



<!-- End Student Registration Modal -->


<!-- Start Student Login Modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel">Student Login</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			  <!-- Start Student Login Form -->
			<form id="stuLoginForm">
				
				<div class="form-group">
					<i class="fas fa-envelope"></i> <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
					<input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail"><br>
				</div>

				<div class="form-group">
					<i class="fas fa-key"></i> <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
					<input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass"><br>
				</div>
			  </form>
			  <!-- End Student Login Form -->
		</div>
		<div class="modal-footer">
		<small id="statusLogMsg"></small>
		  <button type="button" class="btn btn-secondary" id="stuLoginBtn" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary" onclick="checkStuLogin()">Login</button>
		</div>
	  </div>
	</div>
  </div>
  


<!-- End Student Login Modal -->




<!-- Start Admin Login Modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	  <div class="modal-content">
		<div class="modal-header">
		  <h1 class="modal-title fs-5" id="adminLoginModalCenterLabel">Admin Login</h1>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			  <!-- Start Admin Login Form -->
			<form id="adminLoginForm">
				
				<div class="form-group">
					<i class="fas fa-envelope"></i> <label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
					<input type="email" class="form-control"placeholder="Email" name="adminLogemail"id="adminLogemail"><br>
				</div>

				<div class="form-group">
					<i class="fas fa-key"></i> <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
					<input type="password" class="form-control"placeholder="Password" name="adminLogpass"id="adminLogpass"><br>
				</div>
			  </form>
			  <!-- End Admin Login Form -->
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
		</div>
	  </div>
	</div>
  </div>
  


<!-- End Admin Login Modal -->



	<!-- Jquery and bootstrap JavaScript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<!-- Font awsome Js -->
	<script src="js/all.min.js"></script>

	
	<!-- Student Ajax Call Js -->
	<script src="js/ajaxrequest.js"></script>

	<!-- Admin Ajax Call Js -->
	<script src="js/adminajaxrequest.js"></script>
	

</body>
</html>