<?php


// Register from data
$showError = false;
$showAlert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../assets/connect.php';
    // Candidate Details
    echo "Name: ". $name = $_POST["name"];
    echo "<br>";
    echo "Father Name: ". $f_name = $_POST["f_name"];
    echo "<br>";
    echo "Class: ".$class = $_POST["class"];
    echo "<br>";
    echo "Class Group: ".$class_group = $_POST["class_group"];
    echo "<br>";
    // Candidate Address
    echo "Village/City: ".$vil_city = $_POST["vil_city"];
    echo "<br>";
    echo "Block: ".$blocks = $_POST["blocks"];
    echo "<br>";
    echo "District: ".$districts = $_POST["districts"];
    echo "<br>";
    echo "Mobile: ".$mobile = $_POST["mobile"];
    echo "<br>";
    echo "Whatsapp: ".$whatsapp = $_POST["whatsapp"];
    echo "<br>";
    echo "Aadhar: ".$aadhar = $_POST["aadhar"];
    echo "<br>";
    echo "DOB: ".$dob = $_POST["dob"];
    $dob_print = date("d/m/Y", strtotime($dob));
    echo "<br>";
    // Institution Details
    echo "Institute Type: ".$inst_type = $_POST["inst_type"];
    echo "<br>";
    echo "Institute Name: ".$inst_name = $_POST["inst_name"];
    echo "<br>";
    /*echo $ssse_code = $_POST["ssse_code"];
    echo "<br>";*/
    // Institution Address
    echo "Institute Village: ".$inst_vill = $_POST["inst_vill"];
    echo "<br>";
    echo "Institute Block: ".$inst_block = $_POST["block"];
    echo "<br>";
    echo "Institute District: ".$inst_dist = $_POST["district"];
    echo "<br>";
    // Pref. Exam Centre
    /* echo $exam_district = $_POST["exam_district"];
    echo "<br>";
    echo $exam_block = $_POST["exam_block"];
    echo "<br>";
    echo $ssse_incharge = $_POST["ssse_incharge"];
    echo "<br>"; */

    // Check whether the username exists
    $existSql = "SELECT * FROM `students` WHERE aadhar = '$aadhar'";
    $result = mysqli_query($conn, $existSql);
    $numExsitsRow = mysqli_num_rows($result);

    /* if ($numExsitsRow > 0) {
        // Student already exists - Set error message
        $showError = "Aadhar numbers Already Exists. Please check your aadhar numbers.";
        header("Location: ../register-JGP.php?showError=" . urlencode($showError));
        exit;
    } else {
        echo "Data comming Design your DB";

        $sql = "INSERT INTO `students`(`name`, `f_name`, `class`, `class_group`, `vil_city`, `block`, `district`, `mobile`, `whatsapp`, `aadhar`, `dob`, `inst_type`, `inst_name`, `inst_vill`, `inst_block`, `inst_dist`) VALUES ('$name','$f_name','$class','$class_group','$vil_city','$blocks','$districts','$mobile','$whatsapp','$aadhar', '$dob', '$inst_type', '$inst_name', '$inst_vill', '$inst_block', '$inst_dist')";
        $result = mysqli_query($conn, $sql);
        $showAlert = "Member registered successfully<br>Registration No: $aadhar"; */

    // Require composer autoload
   // require_once __DIR__ . '/vendor/autoload.php';

    // Load your HTML template (layout.html)
    /* ob_start(); // Start output buffering
    include('pdfs.html'); // Include your HTML template
    $html = ob_get_clean(); */ // Get the buffered output

    // Replace placeholders in the HTML with form data
    /* $html = str_replace('{{name}}', $name, $html);
    $html = str_replace('{{f_name}}', $f_name, $html);
    $html = str_replace('{{classs}}', $class, $html);
    $html = str_replace('{{classs_group}}', $class_group, $html);

    // Candidate Address
    $html = str_replace('{{vil_city}}', $vil_city, $html);
    $html = str_replace('{{blocks}}', $blocks, $html);
    $html = str_replace('{{districts}}', $districts, $html);
    $html = str_replace('{{mobile}}', $mobile, $html);
    $html = str_replace('{{whatsapp}}', $whatsapp, $html);
    $html = str_replace('{{aadhar}}', $aadhar, $html);
    $html = str_replace('{{dob}}', $dob_print, $html);

    // Institution Details
    $html = str_replace('{{inst_type}}', $inst_type, $html);
    $html = str_replace('{{inst_name}}', $inst_name, $html);
    $html = str_replace('{{inst_vill}}', $inst_vill, $html);
    $html = str_replace('{{inst_block}}', $inst_block, $html);
    $html = str_replace('{{inst_dist}}', $inst_dist, $html);

    // Add date after form data replacements
    $current_date = date('d/m/Y'); // or any format you prefer
    $html = str_replace('{{submission_date}}', $current_date, $html);

    // Create an instance of the class:
    $mpdf = new \Mpdf\Mpdf([
        'format' => 'A4',
        'mode' => 'utf-8',
        'default_font' => 'notosans',
        'autoScriptToLang' => true,
        'autoLangToFont' => true,
        /* 'margin_left' => 20,
        'margin_right' => 20, */
        /*'margin_top' => 7,
        'margin_bottom' => 7,
    ]); */

    /* This is basic simple format 
    $mpdf = new \Mpdf\Mpdf(['format' => 'A4']);*/
    // 'fullpage' fits the whole page, 'continuous' allows scrolling
    /* $mpdf->SetDisplayMode('fullpage', 'continuous');
    // Write HTML to PDF
    $mpdf->WriteHTML($html);

    // Output the PDF directly to the browser
    $mpdf->Output('stremaxfoundation.pdf', 'I'); // 'I' for inline display (browser)
    // Echo the HTML to the browser.
    echo $download_link_html;

    // Student registered successfully - Redirect with success code
    if (isset($_GET['showAlert'])) {
        $showAlert = $_GET['showAlert'];
        echo '<p>' . htmlspecialchars(urldecode($showAlert)) . '</p>'; // Display the message
    }
    exit; */

    //}
}


?>