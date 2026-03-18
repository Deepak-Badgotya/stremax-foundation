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
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <form name="register" class="form" method="POST" action="test.php">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <form class="form" method="POST" action="test.php">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Candidate's Full Name:</h6>
                                                <input name="name" type="text" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Date Of Birth (D.O.B):</h6>
                                                <input name="dob" type="text" placeholder="As per the Matriculation"
                                                    id="datepicker" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Age:</h6>
                                                <input name="age" type="text" placeholder="Age" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Gender:</h6>
                                                <select name="gender" id="gender" required>
                                                    <option value="">Select</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Father's Name:</h6>
                                                <input name="f_name" type="text" placeholder="Father's Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Mother's Name:</h6>
                                                <input name="m_name" type="text" placeholder="Mother's Name" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Marital Status:</h6>
                                                <select name="marital_st" required>
                                                    <option value="">Select</option>
                                                    <option value="unmarried">Unmarried</option>
                                                    <option value="married">Married</option>
                                                    <option value="divorced">Divorced</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Categoty:</h6>
                                                <select name="category" required>
                                                    <option value="">Select</option>
                                                    <option value="general">General</option>
                                                    <option value="obc">OBC</option>
                                                    <option value="st">ST</option>
                                                    <option value="sc">SC</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Differently Abled:</h6>
                                                <select name="diff_abled" required>
                                                    <option value="">Select</option>
                                                    <option value="yes">No</option>
                                                    <option value="no">Yes</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Contact No.:</h6>
                                                <input name="mobile" type="text" placeholder="Phone">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Whatsapp No.:</h6>
                                                <input name="whatsapp" type="text" placeholder="Whatsapp No.">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Email:</h6>
                                                <input name="email" type="email" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Correspondence Address:</h6>
                                                <textarea name="corresp_add" placeholder="Correspondence Address"
                                                    required=""></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Permanent Address:</h6>
                                                <textarea name="perm_add" placeholder="Permanent Address"
                                                    required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <h6><u>Educational Qualification:</u></h6>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <p>Examination <br> /Degree</p>
                                                            </th>
                                                            <th>
                                                                <p>School / <br> College</p>
                                                            </th>
                                                            <th>
                                                                <p>Board / <br> University</p>
                                                            </th>
                                                            <th>
                                                                <p>Passing / <br> Year</p>
                                                            </th>
                                                            <th>
                                                                <p>Percentage <br> /CGPA</p>
                                                            </th>
                                                            <th>
                                                                <p>Division</p>
                                                            </th>
                                                            <th>
                                                                <p>Subject</p>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>Graduation</p>
                                                            </td>
                                                            <td><input type="text" placeholder="College" required="">
                                                            </td>
                                                            <td><input type="text" placeholder="University" required="">
                                                            </td>
                                                            <td><input type="text" placeholder="Passing Year"
                                                                    required=""></td>
                                                            <td><input type="text" placeholder="% or CGPA" required="">
                                                            </td>
                                                            <td><input type="text" placeholder="Division" required="">
                                                            </td>
                                                            <td><input type="text" placeholder="Subject" required="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12th</p>
                                                            </td>
                                                            <td><input type="text" placeholder="School" required="">
                                                            </td>
                                                            <td><input type="text" placeholder="Board" required=""></td>
                                                            <td><input type="text" placeholder="Passing Year"
                                                                    required=""></td>
                                                            <td><input type="text" placeholder="% or CGPA" required="">
                                                            </td>
                                                            <td><input type="text" placeholder="Division" required="">
                                                            </td>
                                                            <td><input type="text" placeholder="Subject" required="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10th</p>
                                                            </td>
                                                            <td><input type="text" placeholder="School" required="">
                                                            </td>
                                                            <td><input type="text" placeholder="Board" required=""></td>
                                                            <td><input type="text" placeholder="Passing Year"
                                                                    required=""></td>
                                                            <td><input type="text" placeholder="% or CGPA" required="">
                                                            </td>
                                                            <td><input type="text" placeholder="Division" required="">
                                                            </td>
                                                            <td><input type="text" placeholder="Subject" required="">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <h6><u>Work Experience Details:</u></h6>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <p>S.N.</p>
                                                            </th>
                                                            <th>
                                                                <p>Organization</p>
                                                            </th>
                                                            <th>
                                                                <p>Post</p>
                                                            </th>
                                                            <th>
                                                                <p>Working experience<br>( Year and Month)</p>
                                                            </th>
                                                            <th>
                                                                <p>Job Location<br>(State & District)</p>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1.</p>
                                                            </td>
                                                            <td><input type="text" Placeholder="Organization"></td>
                                                            <td><input type="text" Placeholder="Post"></td>
                                                            <td><input type="text"
                                                                    Placeholder="Work experience ( Year & Month)">
                                                            </td>
                                                            <td><input type="text"
                                                                    Placeholder="Job Location (State & Dist.)"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2.</p>
                                                            </td>
                                                            <td><input type="text" Placeholder="Organization"></td>
                                                            <td><input type="text" Placeholder="Post"></td>
                                                            <td><input type="text"
                                                                    Placeholder="Work experience ( Year & Month)">
                                                            </td>
                                                            <td><input type="text"
                                                                    Placeholder="Job Location (State & Dist.)"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3.</p>
                                                            </td>
                                                            <td><input type="text" Placeholder="Organization"></td>
                                                            <td><input type="text" Placeholder="Post"></td>
                                                            <td><input type="text"
                                                                    Placeholder="Work experience ( Year & Month)">
                                                            </td>
                                                            <td><input type="text"
                                                                    Placeholder="Job Location (State & Dist.)"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-group">
                                                <h6><u>Skill and other Details:</u></h6>
                                                <table>
                                                    <thead>
                                                        <th>
                                                            <p>S.N.</p>
                                                        </th>
                                                        <th>
                                                            <p>Details</p>
                                                        </th>
                                                        <th>
                                                            <p>Options</p>
                                                        </th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>A.</p>
                                                            </td>
                                                            <td>
                                                                <p>Have you any Computer Certificate?</p>
                                                            </td>
                                                            <td>
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current">Select</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">No
                                                                        </li>
                                                                        <li data-value="2" class="option">Yes</li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>B.</p>
                                                            </td>
                                                            <td>
                                                                <p>Have you an Android mobile phone?</p>
                                                            </td>
                                                            <td>
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current">Select</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">No
                                                                        </li>
                                                                        <li data-value="2" class="option">Yes</li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>C.</p>
                                                            </td>
                                                            <td>
                                                                <p>Have you English Knowledge?</p>
                                                            </td>
                                                            <td>
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current">Select</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">No
                                                                        </li>
                                                                        <li data-value="2" class="option">Yes</li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>D.</p>
                                                            </td>
                                                            <td>
                                                                <p>Have you any Work Experience as a Block Co-Ordinator
                                                                    Work
                                                                    Profile?</p>
                                                            </td>
                                                            <td>
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current">Select</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">No
                                                                        </li>
                                                                        <li data-value="2" class="option">Yes</li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>E.</p>
                                                            </td>
                                                            <td>
                                                                <p>Do you know your Local and Hindi Language?</p>
                                                            </td>
                                                            <td>
                                                                <div class="nice-select form-control wide" tabindex="0">
                                                                    <span class="current">Select</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">No
                                                                        </li>
                                                                        <li data-value="2" class="option">Yes</li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>F.</p>
                                                            </td>
                                                            <td>
                                                                <p>Distance of your residence from your block
                                                                    headquarters (KM)
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <input type="text" name="distance" placeholder="00KM"
                                                                    required="">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Fee Payment: ₹450/-</h6>
                                                <input name="phone" type="text" placeholder="₹450/-" disabled>

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                                    data-target="#myModal">Open Modal</button>
                                            </div>
                                            <!-- Modal -->
                                            <div id="myModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <iframe src="razorpay/payment.php" width="800"
                                                            height="650"></iframe>
                                                    </div>

                                                </div>
                                            </div>
                                            <div id="popup" class="popup">
                                                <h3>Popup Content</h3>
                                                <iframe src="razorpay/payment.php" width="400" height="300"></iframe>
                                                <button onclick="closePopup()">Close</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Photo:</h6>
                                                <input name="photo" id="fileInput1" type="file" accept=".png,.jpg,.jpeg"
                                                    max-size="150000" placeholder="Upload Photo">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <h6>Signature:</h6>
                                                <input name="photo" id="fileInput2" type="file" accept=".png,.jpg,.jpeg"
                                                    max-size="150000" placeholder="Upload Signature">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- excluded for testing -->
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 col-12">
                                            <div class="form-group">
                                                <div class="button">
                                                    <button type="submit" class="btn" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-8 col-12">
                                            <p>( We will be confirm by an Text Message )</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment -->

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
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <input type="file" id="fileInput">

    <script>
        const fileInput1 = document.getElementById('fileInput1');
        const fileInput2 = document.getElementById('fileInput2');

        const validateFiles = (fileInput) => {
            const file = fileInput.files[0];

            if (file) {
                const allowedTypes = ['image/png', 'image/jpeg'];
                const maxSizeInBytes = 150000;

                if (!allowedTypes.includes(file.type)) {
                    alert('Please select a PNG, JPEG, or JPG file.');
                    fileInput.value = '';
                } else if (file.size > maxSizeInBytes) {
                    alert('File size exceeds 150 KB limit.');
                    fileInput.value = '';
                }
            }
        };

        fileInput1.addEventListener('change', () => validateFiles(fileInput1));
        fileInput2.addEventListener('change', () => validateFiles(fileInput2));
    </script>

    <script>
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>

    <script>
        function validateSelectOptions() {
            const selectElements = document.querySelectorAll('select[required]'); // Get all select elements with the 'required' attribute

            for (const select of selectElements) {
                if (select.value === "") {
                    // Handle the case where no option is selected
                    alert("Please select an option for ${select.name}");
                    select.focus(); // Set focus on the invalid select element
                    return false; // Stop further validation and prevent form submission
                }
            }

            // If all select elements have valid selections
            return true;
        }

        // Example usage:
        const form = document.getElementById('myForm');
        form.addEventListener('submit', (event) => {
            if (!validateSelectOptions()) {
                event.preventDefault(); // Prevent form submission
            }
        });
    </script>

    <script src="js/script.js"></script>
</body>

</html>