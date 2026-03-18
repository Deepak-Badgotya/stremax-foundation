<?php
session_start();
// form_print.php - The display page

$customerId = $_GET['customer_id'] ?? '';
$orderId = $_GET['order_id'] ?? ''; // This will only come from payment redirect
$error = $_GET['error'] ?? '';

// Database connection
require_once "assets/connect.php";

// CASE 1: Payment redirect (has both IDs)
if (!empty($customerId) && !empty($orderId)) {
    // Coming from payment success redirect
    $source = 'payment';
    $stmt = $conn->prepare("SELECT 
        -- All student fields
        s.*,
        
        -- Institute details (from institute table)
        i.inst_name AS institute_name, 
        i.ssse_code, 
        i.inst_incharge,
        
        -- Institute's block and district
        b1.bname AS institute_block, 
        d1.dname AS institute_district,
        
        -- Exam center block and district
        b2.bname AS exam_center_block, 
        d2.dname AS exam_center_district
        
    FROM students s
    LEFT JOIN institute i ON s.inst_name = i.inst_id
    LEFT JOIN block b1 ON i.b_id = b1.b_id
    LEFT JOIN district d1 ON b1.d_id = d1.d_id
    LEFT JOIN block b2 ON s.exam_block = b2.b_id
    LEFT JOIN district d2 ON b2.d_id = d2.d_id
    WHERE s.id = ? AND s.trans_id = ?");
    $stmt->bind_param("is", $customerId, $orderId);
}
// CASE 2: Direct form submission (only customer_id)
elseif (!empty($customerId) && empty($orderId)) {
    // Coming directly from form submission
    $source = 'form';
    $stmt = $conn->prepare("SELECT 
        -- All student fields
        s.*,
        
        -- Institute details (from institute table)
        i.inst_name AS institute_name, 
        i.ssse_code, 
        i.inst_incharge,
        
        -- Institute's block and district
        b1.bname AS institute_block, 
        d1.dname AS institute_district,
        
        -- Exam center block and district
        b2.bname AS exam_center_block, 
        d2.dname AS exam_center_district
        
    FROM students_req s
    LEFT JOIN institute i ON s.inst_name = i.inst_id
    LEFT JOIN block b1 ON i.b_id = b1.b_id
    LEFT JOIN district d1 ON b1.d_id = d1.d_id
    LEFT JOIN block b2 ON s.exam_block = b2.b_id
    LEFT JOIN district d2 ON b2.d_id = d2.d_id
    WHERE s.id = ?");
    $stmt->bind_param("i", $customerId);
}
// CASE 3: Error case
else {
    die("Invalid access. " . ($error ? "Error: " . htmlspecialchars($error) : "No customer ID provided"));
}

$stmt->execute();
$result = $stmt->get_result();
$studentData = $result->fetch_assoc();

if (!$studentData) {
    die("Student record not found for ID: " . htmlspecialchars($customerId));
}

$stmt->close();
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration/Candidate Copy</title>
</head>

<body>
    <!-- Stlye -->
    <style>
        body {
            margin: 4rem auto;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 1rem;
        }

        .container {
            max-width: 1040px;
            margin: 0 auto;
        }

        .center {
            align-items: center;
        }

        .text-center {
            text-align: center;
        }

        .justify-center {
            justify-content: center;
        }

        .space-between {
            justify-content: space-between;
        }

        .row,
        .row-left,
        .row-right {
            display: flex;
            gap: 1rem;
        }

        .row-left,
        .row-right {
            width: 50%;
        }

        .row-left p:first-child,
        .row-right p:first-child {
            width: 40%;
        }

        .flex {
            display: flex;
        }

        p {
            margin-block: 0.5rem;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-block: 0.5rem;
        }

        img {
            width: 120px;
        }

        table,
        tbody {
            border-collapse: collapse;
        }

        table td {
            border: black 1px solid;
            border-collapse: collapse;
            padding: 2px 4px;
        }

        .header {
            border: black 1px solid;
        }

        .header-top {
            gap: 7rem;
        }

        .header-bottom {
            border-top: black 1px solid;
        }

        .student-data {
            width: 90%;
            margin: 0 auto;
        }

        .header,
        .student-data,
        .important-info,
        .co-founder-message {
            margin-block: 2rem;
        }

        #print-div img {
            height: 20px;
            width: 20px;
        }

        a {
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <!-- Print Style-->
    <style media="print" type="text/css">
        html,
        body,
        td {
            font-family: Arial, Helvetica, sans-serif;
        }

        html,
        body {
            font-size: 12px;
            margin: auto !important;
        }

        td {
            font-size: 10px;
        }

        ul li {
            font-size: 10px;
            font-weight: bold;
        }

        img {
            width: 104px;
        }
        #print-div {
            display: none !important;
        }
    </style>
    <main>
        <div class="container">
            <!-- Title -->
            <div class="row justify-center">
                <p class="text-center">Registration/Candidate Copy</p>
                <a href="#" id="print-div" class="row center" onclick="window.print()">
                    <p>Print/Save</p>
                    <img src="img/printer.svg" alt="">
                </a>
            </div>
            <!-- Header -->
            <div class="header text-center">
                <div class="header-top flex center">
                    <img src="img/logo-d.svg" alt="">
                    <div class="header-top-right">
                        <h2>STREMAX FOUNDATION</h2>
                        <h6>Registered Office: Bharat Mata Chowk, Near Konar Pool, Hazaribag -
                            825301, Jharkhand | Mob.: 9525918072</h6>
                    </div>
                </div>
                <div class="header-bottom">
                    <h3>'Stremax State Scholarship Exam - 2026'</h3>
                </div>
            </div>
            <!-- Student Details -->
            <div class="student-data">
                <!-- Candidate Name - Father Name -->
                <div class="row">
                    <div class="row-left">
                        <p>Candidate Name:</p>
                        <p><?php echo htmlspecialchars($studentData['name'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>Father Name:</p>
                        <p><?php echo htmlspecialchars($studentData['f_name'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- Class - Calss Group -->
                <div class="row">
                    <div class="row-left">
                        <p>Class:</p>
                        <p><?php echo htmlspecialchars($studentData['class'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>Class Group:</p>
                        <p><?php echo htmlspecialchars($studentData['class_group'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- Village/City - Block -->
                <div class="row">
                    <div class="row-left">
                        <p>Village/City:</p>
                        <p><?php echo htmlspecialchars($studentData['vill_city'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>Block:</p>
                        <p><?php echo htmlspecialchars($studentData['block'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- District - Mobile -->
                <div class="row">
                    <div class="row-left">
                        <p>District:</p>
                        <p><?php echo htmlspecialchars($studentData['district'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>Mobile:</p>
                        <p><?php echo htmlspecialchars($studentData['mobile'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- Whatsapp - Aadhar -->
                <div class="row">
                    <div class="row-left">
                        <p>Whatsapp:</p>
                        <p><?php echo htmlspecialchars($studentData['whatsapp'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>Aadhar:</p>
                        <p><?php echo htmlspecialchars($studentData['aadhar'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- DOB - Aadhar -->
                <div class="row">
                    <div class="row-left">
                        <p>Date Of Birth:</p>
                        <p><?php echo htmlspecialchars($studentData['dob'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- Institute Type - Institute Name -->
                <div class="row">
                    <div class="row-left">
                        <p>Institute Type:</p>
                        <p><?php echo htmlspecialchars($studentData['inst_type'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>Institute Name:</p>
                        <p><?php echo htmlspecialchars($studentData['institute_name'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- Institue Village - Institute Block -->
                <div class="row">
                    <div class="row-left">
                        <p>Institue Village:</p>
                        <p><?php echo htmlspecialchars($studentData['inst_vill'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>Institute Block:</p>
                        <p><?php echo htmlspecialchars($studentData['institute_block'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- SSSE Code - SSSE Incharge -->
                <div id="ssse" class="row">
                    <div class="row-left">
                        <p>SSSE Code:</p>
                        <p><?php echo htmlspecialchars($studentData['ssse_code'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>SSSE Incharge:</p>
                        <p><?php echo htmlspecialchars($studentData['inst_incharge'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- Institute District - Date -->
                <div class="row">
                    <div class="row-left">
                        <p>Institute District:</p>
                        <p><?php echo htmlspecialchars($studentData['institute_district'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>Date Of Submission:</p>
                        <p><?php echo htmlspecialchars($studentData['sub_date'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- Exam District - Exam Block -->
                <div class="row">
                    <div class="row-left">
                        <p>Exam District:</p>
                        <p><?php echo htmlspecialchars($studentData['exam_center_district'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>Exam Block:</p>
                        <p><?php echo htmlspecialchars($studentData['exam_center_block'] ?? 'N/A'); ?></p>
                    </div>
                </div>
                <!-- Transaction ID - Payment Status -->
                <div id="payment" class="row">
                    <div class="row-left">
                        <p>Transaction ID:</p>
                        <p><?php echo htmlspecialchars($studentData['trans_id'] ?? 'PENDING'); ?></p>
                    </div>
                    <div class="row-right">
                        <p>Payment Status:</p>
                        <p><?php echo htmlspecialchars($studentData['pay_status'] ?? 'PENDING'); ?></p>
                    </div>
                </div>
            </div>
            <!-- Important Info -->
            <div class="important-info">
                <h5 leng="hi" class="text-center">-: आवश्यक जानकारी :-</h5>
                <div class="row justify-center">
                    <table style="color: #000; font-size: 12px;">
                        <tbody>
                            <tr>
                                <td lang="hi">
                                    एडमिट कार्ड
                                </td>
                                <td lang="hi">
                                    5 सितंबर
                                </td>
                            </tr>
                            <tr>
                                <td lang="hi">
                                    एग्जाम की संभावित तिथि
                                </td>
                                <td lang="hi">
                                    सितंबर माह के अंतिम में
                                </td>
                            </tr>
                            <tr>
                                <td lang="hi">
                                    परीक्षा सिलेबस एवं प्रश्न पत्र प्रारूप
                                </td>
                                <td lang="hi">
                                    ऑफिशल वेबसाइट <a href="https://www.stremaxfoundation.org"
                                        style="color: #220044;"><b>www.stremaxfoundation.org</b></a>
                                    एवं YouTube Channel - Stremax Foundation से

                                </td>
                            </tr>
                            <tr>
                                <td lang="hi">
                                    संपर्क सूत्र</p>
                                </td>
                                <td lang="hi">
                                    परीक्षा संबंधित किसी भी जानकारी के लिए 952591 8072 पर संपर्क कर सकते हैं
                                </td>
                            </tr>
                            <tr>
                                <td lang="hi">
                                    स्कॉलरशिप एवं प्पुरस्कार
                                </td>
                                <td lang="hi">
                                    <ul>
                                        <li lang="hi">State Topper - 100000 Scholarship (3 प्रतिभागियों को)
                                        </li>
                                        <li lang="hi">District Topper - 5000 Scholarship (72 प्रतिभागियों को)
                                        </li>
                                        <li lang="hi">Block Topper - 2000 Scholarship (792 प्रतिभागियों को)
                                        </li>
                                        <li lang="hi">Institution Topper - School Bag ( 7500 प्रतिभागियों को)</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td lang="hi">
                                    सांत्वना पुरस्कार
                                </td>
                                <td lang="hi">
                                    33% या इससे अधिक अंक लाने वाले सभी प्रतिभागियों को मेडल और प्रशस्ति पत्र से
                                    पुरस्कृत किया जाएगा
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Instructions-->
            <div class="">
                <h5 lang="hi" class="text-center">- सामान्य निर्देश -</h5>
                <ol>
                    <li lang="hi">
                        फॉर्म भरने के बाद यह PDF संस्था के नंबर 9525918072 पर व्हाट्सएप्प करें, स्ट्रेमैक्स फाउंडेशन की टीम आपसे सम्पर्क करेगी।
                    </li>
                    <li lang="hi">
                        इस पीडीएफ को सुरक्षित रूप से सेव कर लें, क्योंकि एडमिट कार्ड पाने के लिए आपको इसकी आवश्यकता होगी।
                    </li>
                </ol>
            </div>
            <!-- Co/Founder Message -->
            <div class="co-founder-message">
                <h5 leng="hi" class="text-center">शुभकामनाओं के साथ...</h5>
                <div class="founder row space-between">
                    <div class="founder-left">
                        <div class="row center">
                            <img src="img/pankaj-kumar.jpeg" alt="">
                            <div class="">
                                <h4>Mr. Pankaj Saw</h4>
                                <h6>Director & CEO</h6>
                                <p>STREMAX FOUNDATION</p>
                            </div>
                        </div>
                    </div>
                    <div class="founder-right">
                        <div class="row center">
                            <div class="">
                                <h4>Mr. Bipin Kumar</h4>
                                <h6>Founder & CEO</h6>
                                <p>STREMAX FOUNDATION</p>
                            </div>
                            <img src="img/bipin-kumar.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>