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

    <!-- Cashfree-->
    <script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>

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
                        <h2>' Stremax State Scholarship Exam - 2026'</h2>
                        <h2>Registration Form</h2>
                        <img src="img/section-img.png" alt="#">
                        <p>कृपया सभी विवरण ध्यानपूर्वक और सही-सही भरें। डेटा को पुनः सुधारने का कोई मौका नहीं होगा।
                        </p>
                        <p> कृपया क्रोम ब्राउज़र में ही फ़ॉर्म भरें </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <form id="myForm" class="form">
                        <div class="row">
                            <!-- CANDIDATE DETAILS -->
                            <h6 class="col-12">Candidate Details:</h6>
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
                            <!-- Class-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>Class:</h6>
                                    <!-- <input name="class" id="class" type="text" placeholder="Your Class" required> -->
                                    <select name="class" class="nice-select form-control wide" id="class" required>
                                        <option value="">Select Your Group</option>
                                        <option value="3">Calss 3rd</option>
                                        <option value="4">Calss 4th</option>
                                        <option value="5">Calss 5th</option>
                                        <option value="6">Calss 6th</option>
                                        <option value="7">Calss 7th</option>
                                        <option value="8">Calss 8th</option>
                                        <option value="9">Calss 9th</option>
                                        <option value="10">Calss 10th</option>
                                        <option value="11">Calss 11th</option>
                                        <option value="12">Calss 12th</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Class Group-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>Group:</h6>
                                    <select name="class_group" class="nice-select form-control wide" id="class_group"
                                        required>
                                        <option value="">Select Your Group</option>
                                        <option value="(A) Calss 3-5">(A) Calss 3-5</option>
                                        <option value="(B) Class 6-8">(B) Calss 6-8</option>
                                        <option value="(C) Class 9-12">(C) Class 9-12</option>
                                    </select>
                                </div>
                            </div>
                            <!-- CANDIDATE ADDRESS -->
                            <h6 class="col-12">Candidate Address:</h6>
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
                                    <input name="block" id="block" type="text" placeholder="Your Block" required>
                                </div>
                            </div>
                            <!-- District-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>District:</h6>
                                    <input name="district" id="district" type="text" placeholder="Your District"
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
                            <!-- Aadhar No-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>Aadhar No.:</h6>
                                    <input name="aadhar" id="aadhar" type="text" maxlength="12"
                                        onkeyup="numberonly(this)" placeholder="Aadhar No." required>
                                </div>
                            </div>
                            <!-- Date Of Birth-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>Date Of Birth:</h6>
                                    <input name="dob" id="dob" type="date" maxlength="10" onkeyup="numberonly(this)"
                                        placeholder="Date Of Birth" required>
                                </div>
                            </div>
                            <!-- INSTITUTION DETAILS -->
                            <h6 class="col-12">Institute Details:</h6>
                            <!-- District-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>District:</h6>
                                    <select name="inst_dist" class="nice-select form-control wide districts"
                                        id="inst_dist" data-target-block="blocks1" required>
                                        <option value="">--Select a District--</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Block-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>Block:</h6>
                                    <select name="inst_block" class="nice-select form-control wide blocks blocks1"
                                        id="inst_block" disabled data-target-institute="institute1" required>
                                        <option value="">Select Block</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Institution Name-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>Institution Name:</h6>
                                    <select name="inst_name" class="nice-select form-control wide institute institute1"
                                        id="inst_name" disabled required>
                                        <option value="">Select Institution</option>
                                    </select>
                                </div>
                            </div>


                            <!-- Village/Town-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>Village/Town:</h6>
                                    <input name="inst_vill" id="inst_vill" type="text" placeholder="Your Village"
                                        disabled required>
                                </div>
                            </div>

                            <!-- Institution Type-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6 id="test">Institution Type:</h6>
                                    <input name="inst_type" id="inst_type" type="text" placeholder="Your Institute Type"
                                        disabled required>
                                </div>
                            </div>


                            <!-- SSSE Code-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>SSSE Code:</h6>
                                    <input name="ssse_code" id="ssse_code" type="text" placeholder="Your SSSE Code"
                                        required disabled>
                                </div>
                            </div>
                            <!-- SSSE Inchage Name-->
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>SSSE Inchage Name:</h6>
                                    <input name="ssse_incharge" id="ssse_incharge" type="text"
                                        placeholder="Your SSSE Inchage Name" required disabled>
                                </div>
                            </div>

                            <!-- Custom Institute Input Container -->
                            <div id="custom_institute_container"
                                style="display: none; margin-top: 10px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                                <h4>Add New Institute</h4>
                                <div>
                                    <label for="new_institute_name">Institute Name *</label>
                                    <input type="text" id="new_institute_name"
                                        style="width: 100%; padding: 5px; margin: 5px 0;" required>
                                </div>
                                <div>
                                    <label for="new_institute_type">Institute Type</label>
                                    <select name="new_institute_type"
                                        style="width: 100%; padding: 5px; margin: 5px 0; border: 1px #000 solid;"
                                        id="new_institute_type" required>
                                        <option value="">Select Your Institution Type</option>
                                        <option value="School">School</option>
                                        <option value="College">College</option>
                                        <option value="Coaching">Coaching</option>
                                        <option value="Tuition">Tuition</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="new_institute_address">Address</label>
                                    <input type="text" id="new_institute_address"
                                        style="width: 100%; padding: 5px; margin: 5px 0;">
                                </div>
                                <!-- Add more fields as needed -->
                                <button id="save_institute_btn" onclick="saveNewInstitute()"
                                    style="padding: 8px 15px; background: #4CAF50; color: white; border: none; border-radius: 3px; cursor: pointer;">
                                    Save Institute
                                </button>
                            </div>
                            <div id="institute_details"></div>
                            <!-- PREFERRED EXAM CENTRE DETAILS -->
                            <h6 id="ex_h6" class="col-12">Preferred Exam Centre Details:</h6>
                            <!--Exam District-->
                            <div id="ex_dis" class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>Choose Exam District:</h6>
                                    <select name="exam_district" class="nice-select form-control wide districts"
                                        id="exam_district" data-target-block="blocks2">
                                        <option value="">--Select Exam District--</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Exam Block-->
                            <div id="ex_blo" class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <h6>Choose Exam Block:</h6>
                                    <select name="exam_block" class="nice-select form-control wide blocks blocks2"
                                        id="exam_block">
                                        <option value="">Select Block</option>
                                    </select>
                                </div>
                            </div>

                            <!-- submit button -->
                            <div class="row">
                                <div class="col-lg-5 col-md-4 col-12">
                                    <div class="form-group">
                                        <div class="button">
                                            <button type="button" id="submitButton" class="btn">Submit</button>
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
                    <p><u>Double check all information before submitting.</u></p>
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
    <!-- Script JS -->
    <script src="js/script.js"></script>

</body>

</html>