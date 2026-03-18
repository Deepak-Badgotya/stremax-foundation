<?php
$showError = false;
$showAlert = false;

?>

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
	<title>Register - Stremax Foundation</title>

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
	<?php include_once("assets/header.php"); ?>
	<!-- End Header Area -->

	<!-- Breadcrumbs -->
	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Register</h2>
						<ul class="bread-list">
							<li><a href="index.php">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Register</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	
	<!-- Start Appointment -->
	<section class="appointment">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Registration Form</h2>
						<img src="img/section-img.png" alt="#">
						<p>कृपया सभी विवरण ध्यानपूर्वक और सही-सही भरें। डेटा को पुनः सुधारने का कोई मौका नहीं होगा।
						</p>
						<p>	कृपया क्रोम ब्राउज़र में ही फ़ॉर्म भरें				</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12">
					<form id="myForm" class="form" method="POST" action="razorpay/pdf.php">
						<div class="row">
							<!-- Registration/Mobile no-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Registration/Mobile No.:</h6>
									<input name="reg-mob" id="reg_mob" type="text" maxlength="10"
										onkeyup="numberonly(this)" placeholder="XXXXXXXXXX" aria-required="true">
								</div>
							</div>
							<!-- Candidate's Name-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Candidate's Name:</h6>
									<input name="name" id="name" type="text" placeholder="Name" required>
								</div>
							</div>
							<!-- Father's Name-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Father's Name:</h6>
									<input name="f_name" id="f_name" type="text" placeholder="Father's Name" required>
								</div>
							</div>
							<!-- Mother's Name-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Mother's Name:</h6>
									<input name="m_name" id="m_name" type="text" placeholder="Mother's Name" required>
								</div>
							</div>
							<!-- Class-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Class:</h6>
									<input name="class" id="class" type="text" placeholder="Your Class" required>
								</div>
							</div>
							<!-- Class Group-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Group:</h6>
									<select name="class_group" class="nice-select form-control wide" id="class_group"
										required>
										<option value="">Select Your Group</option>
										<option value="(A) Calss 6-8">(A) Calss 6-8</option>
										<option value="(B) Class 9-12">(B) Class 9-12</option>
									</select>
								</div>
							</div>
							<!-- School/College-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>School/College:</h6>
									<input name="sch_col" id="sch_col" type="text" placeholder="Your School/College"
										required>
								</div>
							</div>
							<!-- Village/City-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Village/City:</h6>
									<input name="vil_city" id="vil_city" type="text" placeholder="Your Village/City"
										required>
								</div>
							</div>
							<!-- Block-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Block:</h6>
									<input name="block" id="blocks" type="text" placeholder="Your Block" required>
								</div>
							</div>
							<!-- District-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>District:</h6>
									<input name="district" id="districts" type="text" placeholder="Your District"
										required>
								</div>
							</div>
							<!-- Mobile/Calling No-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Mobile/Calling No.:</h6>
									<input name="mobile" id="mobile" type="text" onkeyup="numberonly(this)"
										placeholder="Phone" maxlength="10" onkeyup="numberonly(this)">
								</div>
							</div>
							<!-- Whatsapp No-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Whatsapp No.:</h6>
									<input name="whatsapp" id="whatsapp" type="text" maxlength="10"
										onkeyup="numberonly(this)" placeholder="Whatsapp No." required>
								</div>
							</div>
							<!--Exam City-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Choose Exam City:</h6>
									<select name="exam_city" class="nice-select form-control wide" id="district"
										required>
										<option value="">Select Exam City</option>
										<option value="hazaribag">Hazaribag</option>
										<option value="koderma">Koderma</option>
										<option value="chatra">Chatra</option>
									</select>
								</div>
							</div>
							<!-- Exam Block-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Choose Exam Block:</h6>
									<select name="exam_block" class="nice-select form-control wide" id="block" required>
										<option value="">Select Block</option>
									</select>
								</div>
							</div>
							<!-- Payment Instruction-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>भुगतान अनुदेश:</h6>
									<ul>
										<li><i class="fa fa-long-arrow-right"></i>
											QR Code को download या save करके, अपने मोबाइल के UPI APP (PhonePe या Google
											Pay या और कोई यूपीआई ऐप) से स्कैन करके, Registration Fee ₹200 जमा करें और इस
											ट्रांजैक्शन का UTR NO./Reference No. को सही सही दिए गए न का UTR NO./Reference No.
											कॉलम में अवश्य भरे।
										</li>
										<li><i class="fa fa-long-arrow-right"></i> रजिस्ट्रेशन फी जमा नहीं करने पर
											रजिस्ट्रेशन मान्य नहीं होगा
											अपने पास फीस का स्क्रीनशॉट जरूर रखें किसी भी मिसकनसेप्शन की स्थिति में उसकी
											मांग किया जा सकता है
										</li>
										<li><i class="fa fa-long-arrow-right"></i> रजिस्ट्रेशन फी के पेमेंट के दौरान
											होने वाले किसी आसुविधा के लिए आप हमसे
											9525918072 पर संपर्क कर सकते हैं

										</li>
									</ul>
								</div>
							</div>
							<!-- QR Code-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>Registration Fee: ₹200 /-</h6>
									<img src="img/qr.jpg" alt="" style="height: 25rem;">
								</div>
							</div>
							<!-- Transaction Id-->
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<h6>UTR NO./Referenc No:</h6>
									<input name="trans_id" id="trans_id" type="text"
										placeholder="UTR NO./Referenc No" required>
								</div>
							</div>
							<!-- submit button -->
							<div class="row">
								<div class="col-lg-5 col-md-4 col-12">
									<div class="form-group">
										<div class="button">
											<button type="button" id="submitButton" value="submit"
												class="btn">Submit</button>
										</div>
									</div>
								</div>
							</div>
					</form>
				</div>
			</div>
			<div id="errorMessages"></div>
			<!-- Start Pop up-->
			<div id="confirmationPopup" class="popup">
				<div class="popup-content">
					<p><u>Please review your data before submitting:</u></p>
					<div id="popupData"></div>
					<br>
					<button class="btn" type="button" id="backButton">Back</button>
					<button class="btn" type="button" id="confirmSubmitButton">Confirm Submit</button>
				</div>
			</div>
			<!-- End Pop up-->
		</div>
	</section>
	<!-- End Appointment -->

	<?php
	if (isset($_GET['showError'])) {
		$showError = $_GET['showError'];
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Error!</strong> ' . htmlspecialchars(urldecode($showError)) . '.
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>'; // Display the message
	}
	if (isset($_GET['showAlert'])) {
		$showAlert = $_GET['showAlert'];
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Success!</strong> Member registered successfully.Registration ID: ' . htmlspecialchars(urldecode($showAlert)) . '
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>'; // Display the message
	}
	if ($showAlert) {
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Success!</strong> Member registered successfully.Registration ID: ' . $reg_mob . '
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>';
	}
	?>
	<!-- Footer Area -->
	<?php include_once("assets/footer.php"); ?>
	<!--/ End Footer Area -->

	<!-- jquery Min JS -->
	<!--<script src="js/jquery.min.js"></script>-->
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
	<!-- Steller JS -->
	<script src="js/steller.js"></script>
	<!-- Wow JS -->
	<script src="js/wow.min.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Counter Up CDN JS -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	<!-- Number only Input-->
	<script type="text/javascript">
		function numberonly(input) {
			var num = /[^0-9]/gi;
			input.value = input.value.replace(num, "");
		}
	</script>

	<!-- Dependent Select JS -->
	<script>
		const districtSelect = document.getElementById('district');
		const blockSelect = document.getElementById('block');

		const blocks = {
			hazaribag: ['Barhi', 'Barkagaon', 'Barkatha', 'Bishungarh', 'Churchu', 'Dari', 'Keredari', 'Padma', 'Daru', 'Ichak', 'Tatijhariya', 'Katkamdag', 'Katkamsandi', 'Chauparan', 'Sadar H.bag'],
			koderma: ['Jaynagar', 'Sadar Koderma'],
			chatra: ['Kanhachatti', 'Hunterganj', 'Itkhori', 'Simariya']
		};

		districtSelect.addEventListener('change', function () {
			const selectedDistrict = this.value;
			blockSelect.innerHTML = '<option value="">Select Block</option>'; // Clear previous options

			if (selectedDistrict && blocks[selectedDistrict]) {
				blocks[selectedDistrict].forEach(block => {
					const option = document.createElement('option');
					option.value = block;
					option.textContent = block;
					blockSelect.appendChild(option);
				});
			}
		});
	</script>

	<script>
		function validateTenDigits(inputString) {
			const regex = /^\d{10}$/; // Matches exactly 10 digits
			return regex.test(inputString);
		}

		function isNumeric(inputString) {
			return /^\d+$/.test(inputString);
		}

		document.getElementById('submitButton').addEventListener('click', function (event) {
			event.preventDefault(); // Prevent default form submission

			//new data

			const reg_mob = document.getElementById('reg_mob').value.trim();
			const name = document.getElementById('name').value.trim();
			const f_name = document.getElementById('f_name').value.trim();
			const m_name = document.getElementById('m_name').value.trim();
			const classs = document.getElementById('class').value.trim();
			const class_group = document.getElementById('class_group').value.trim();
			const sch_col = document.getElementById('sch_col').value.trim();
			const vil_city = document.getElementById('vil_city').value.trim();
			const blocks = document.getElementById('blocks').value.trim();
			const districts = document.getElementById('districts').value.trim();
			const mobile = document.getElementById('mobile').value.trim();
			const whatsapp = document.getElementById('whatsapp').value.trim();
			const exam_city = document.getElementById('district').value;
			const exam_block = document.getElementById('block').value;
			const trans_id = document.getElementById('trans_id').value.trim();

			let errors = [];

			if (!reg_mob) errors.push("Registraion No is required.");
			if (!name) errors.push("Candidate's ame is required.");
			if (!f_name) errors.push("Father's name is required.");
			if (!m_name) errors.push("Mother's name required.");
			if (!classs) errors.push("Class is required.");
			if (!class_group) errors.push("Class group is required.");
			if (!sch_col) errors.push("School/College is required.");
			if (!vil_city) errors.push("Village/City is required.");
			if (!blocks) errors.push("Block is required.");
			if (!districts) errors.push("District is required.");
			if (!mobile) errors.push("Mobile no is required.");
			if (!whatsapp) errors.push("Whatsapp no is required.");
			if (!exam_city) errors.push("Exam district is required.");
			if (!exam_block) errors.push("Exam Block is required.");
			if (!trans_id) errors.push("Transation ID is required.");

			if (reg_mob && !validateTenDigits(reg_mob)) errors.push("Registraion must be 10 digits.");
			if (mobile && !validateTenDigits(mobile)) errors.push("Mobile no must be 10 digits.");
			if (whatsapp && !validateTenDigits(whatsapp)) errors.push("whatsapp no must be 10 digits.");

			if (reg_mob && !isNumeric(reg_mob)) errors.push("Registration must contain only numbers.");
			if (mobile && !isNumeric(mobile)) errors.push("Mobile must contain only numbers.");
			if (whatsapp && !isNumeric(whatsapp)) errors.push("Whatsapp must contain only numbers.");

			if (errors.length > 0) {
				document.getElementById('errorMessages').innerHTML = errors.map(error => `<p class="error">${error}</p>`).join('');
				return; // Stop execution if there are errors
			}

			document.getElementById('errorMessages').innerHTML = ''; // Clear previous errors

			document.getElementById('popupData').innerHTML = `
                <p><strong>Registraion No:</strong> ${reg_mob}</p>
				<p><strong>Candidate's Name:</strong> ${name}</p>
                <p><strong>Father's Name:</strong> ${f_name}</p>
                <p><strong>Mother's Name:</strong> ${m_name}</p>
				<p><strong>Class:</strong> ${classs}</p>
				<p><strong>Group:</strong> ${class_group}</p>
				<p><strong>School/College:</strong> ${sch_col}</p>
				<p><strong>Village/City:</strong> ${vil_city}</p>
				<p><strong>Block:</strong> ${blocks}</p>
				<p><strong>District:</strong> ${districts}</p>
                <p><strong>Mobile/Calling No:</strong> ${mobile}</p>
                <p><strong>Whatsapp:</strong> ${whatsapp}</p>
				<p><strong>Exam City:</strong> ${exam_city}</p>
				<p><strong>Exam Block:</strong> ${exam_block}</p>
				<p><strong>Transaction Id:</strong> ${trans_id}</p>
				<hr>
                <p>Double check all information before submitting.</p>
                <p>फॉर्म सबमिशन के बाद Admit Card/Student Copy का pdf मिलेगा 
                वही Final Admit Card होगा, इसे Download करके सुरक्षित रूप से  Save कर लें .</p>
            `;
			// Show popup
			document.getElementById('confirmationPopup').style.display = 'block';
		});

		document.getElementById('backButton').addEventListener('click', function () {
			// Hide popup
			document.getElementById('confirmationPopup').style.display = 'none';
		});

		document.getElementById('confirmSubmitButton').addEventListener('click', function () {
			// Submit the form
			document.getElementById('myForm').submit();
		});

		// Close the popup if the user clicks outside of it.
		window.onclick = function (event) {
			if (event.target == document.getElementById('confirmationPopup')) {
				document.getElementById('confirmationPopup').style.display = "none";
			}
		}
	</script>

</body>

</html>