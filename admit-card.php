<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title -->
	<title>Admit Card - Stremax Foundation</title>

	<!-- Favicon -->
	<link rel="icon" href="img/logo.png">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="css/nice-select.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- icofont CSS -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="css/slicknav.min.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="css/datepicker.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="css/animate.min.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Medipro CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">

</head>

<body>
	<!-- Header Area -->
	<?php include_once "assets/header.php"; ?>
	<!-- End Header Area -->

	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Admit Card</h2>
						<ul class="bread-list">
							<li><a href="index.php">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Admit Card</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Start Contact Us -->
	<section class="contact-us section">
		<div class="container">
			<div class="inner">
				<div class="row">
					<div class="col-lg-12">
						<div class="contact-us-form">
							<h2>Download Your Admit Card</h2>
							<p>Any of two details required from Aadhar, DOB, and Mobile No.</p>
							<!-- Form -->
							<form id="admitForm" class="form">
								<div class="row">
									<!-- Aadhar No-->
									<div class="col-lg-3 col-md-3 col-12">
										<div class="form-group">
											<h6>Aadhar No.:</h6>
											<input name="aadhar" id="aadhar" type="text" maxlength="12"
												onkeyup="numberonly(this)" placeholder="Aadhar No." required>
										</div>
									</div>
									<!-- Date Of Birth-->
									<div class="col-lg-3 col-md-3 col-12">
										<div class="form-group">
											<h6>Date Of Birth:</h6>
											<input name="dob" id="dob" type="date" maxlength="10"
												onkeyup="numberonly(this)" placeholder="Date Of Birth" required>
										</div>
									</div>
									<!-- Mobile/Calling No-->
									<div class="col-lg-3 col-md-3 col-12">
										<div class="form-group">
											<h6>Mobile/Calling No.:</h6>
											<input name="mobile" id="mobile" type="text" onkeyup="numberonly(this)"
												placeholder="Phone" maxlength="10" onkeyup="numberonly(this)">
										</div>
									</div>
									<div class="col-3 align-content-center">
										<div class="form-group login-btn">
											<button id="admitBtn" class="btn" type="button">Download</button>
										</div>
									</div>
								</div>
								<div id="errorMessages"></div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Contact Us -->

	<!-- Footer Area -->
	<?php include_once("assets/footer.php"); ?>
	<!--/ End Footer Area -->

	<!-- jquery Min JS -->
	<script src="js/jquery.min.js"></script>
	<!-- jquery Migrate JS -->
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<!-- jquery Ui JS -->
	<script src="js/jquery-ui.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Datepicker JS -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Jquery Nav JS -->
	<script src="js/jquery.nav.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- Niceselect JS -->
	<script src="js/niceselect.js"></script>
	<!-- Tilt Jquery JS -->
	<script src="js/tilt.jquery.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- counterup JS -->
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Steller JS -->
	<script src="js/steller.js"></script>
	<!-- Wow JS -->
	<script src="js/wow.min.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Counter Up CDN JS -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<!-- Google Map API Key JS -->
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
	<!-- Gmaps JS -->
	<script src="js/gmaps.min.js"></script>
	<!-- Map Active JS -->
	<script src="js/map-active.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<!-- Script JS -->
	<script src="js/script.js"></script>
	<script>
		/* ---Admit Card Download Script--- */
		document.getElementById("admitBtn").addEventListener("click", function (event) {
			event.preventDefault(); // Prevent default form submission
			//new data
			const aadhar = document.getElementById("aadhar").value.trim();
			const dob = document.getElementById("dob").value.trim();
			const mobile = document.getElementById("mobile").value.trim();
			let errors = [];

			if (!aadhar) errors.push("Candidate's aadhar is required.");
			if (!dob) errors.push("Date of Birth is required.");
			if (!mobile) errors.push("Mobile no. is required.");

			if (mobile && !validateTenDigits(mobile))
				errors.push("Mobile no must be 10 digits.");
			if (aadhar && !validateTwelveDigits(aadhar))
				errors.push("aadhar no must be 12 digits.");
			if (mobile && !isNumeric(mobile))
				errors.push("Mobile must contain only numbers.");
			if (aadhar && !isNumeric(aadhar))
				errors.push("Aadhr must contain only numbers.");

			if (errors.length > 0) {
				event.preventDefault();
				document.getElementById("errorMessages").innerHTML = errors
					.map((error) => `<p class="error">${error}</p>`)
					.join("");
				return; // Stop execution if there are errors
			}

			document.getElementById("errorMessages").innerHTML = ""; // Clear previous errors

			const admitData = {
				aadhar: aadhar,
				dob: dob,
				mobile: mobile
			};
			console.log(admitData);
			//Send admit form data to admit_form.php
			admitForm(admitData);

			//Function to send & fetch data
			function admitForm(data) {
				fetch("assets/admit_form.php", {
					method: "POST",
					body: JSON.stringify({ aadhar: data.aadhar, dob: data.dob, mobile: data.mobile }),
				})
					.then((response) => response.json())
					.then((data) => {
						console.log(data);
						const studentId = data.id;
						if (data.status === "success") {
							// REDIRECT with customer ID to form_print.php
							window.location.href = `admit_card_print.php?student_id=${encodeURIComponent(studentId)}`;
						}
					})
					.catch((err) => {
						console.error("Error during form submission:", err);
						alert("Something went wrong. Please try again.");
					});
			}
		});
	</script>
</body>

</html>