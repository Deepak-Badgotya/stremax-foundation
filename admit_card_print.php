<?php
session_start();
$studentId = $_GET['student_id'] ?? '';
$error = $_GET['error'] ?? '';

// Database connection
require_once "assets/connect.php";

// Check student ID
if (!empty($studentId)) {
    // Coming from payment success redirect
    $stmt = $conn->prepare("SELECT * FROM admit_card WHERE id = ?");
    $stmt->bind_param("i", $studentId);
} else {
    die("Invalid access. " . ($error ? "Error: " . htmlspecialchars($error) : "No student ID provided"));
}

$stmt->execute();
$result = $stmt->get_result();
$studentData = $result->fetch_assoc();
$dob = new DateTime($studentData['dob']);


if (!$studentData) {
    die("Student record not found for ID: " . htmlspecialchars($studentId));
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admit Card</title>
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
        }

        .w-2,
        .row-right {
            width: 50%;
        }

        .row-left p:first-child,
        .row-right p:first-child {
            width: 40%;
        }

        /* top-row style*/
        .top-row .w-1 {
            border: black solid;
            border-width: 0 1px 1px 0;
        }

        .top-w-2 {
            width: 80%;
        }

        .top-row-right {
            width: 20%;
            display: grid;
            align-content: end;
            border-bottom: black solid;
            border-width: 1px;
            text-align: center;
        }

        /* utility */
        .w-1 {
            display: flex;
            gap: 0.5rem;
            width: 100%;
        }

        .w-2 {
            display: flex;
            gap: 0.5rem;
            width: 50%;
        }

        .w-3 {
            display: flex;
            gap: 0.5rem;
            width: 33%;
            border: black solid;
            border-width: 0 1px 1px 0;
        }

        .w-4 {
            display: flex;
            gap: 0.5rem;
            width: 25%;
            border: black solid;
            border-width: 1px 1px 0 0;
        }

        .w-4:last-child {
            border-width: 1px 0 0 0;
        }

        .w-1,
        .w-2,
        .w-3,
        .w-4 {
            padding: 0.5rem 0 0.5rem 0.5rem;
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
            gap: 10.5rem;
        }

        .header-bottom {
            border-top: black 1px solid;
        }

        .student-data {
            margin: 0 auto;
        }

        .important-info,
        .co-founder-message {
            margin-block: 2rem;
        }

        .header {
            margin-top: 2rem;
        }

        .student-data {
            margin-bottom: 2rem;
        }

        #print-div img {
            height: 20px;
            width: 20px;
        }

        a {
            text-decoration: none;
            cursor: pointer;
        }

        #back-btn {
            padding: .5rem;
            border-radius: 0.5rem;
            color: white;
            background-color: #006F47;
            display: none;
        }

        /* Borders */
        .student-data {
            border: black solid;
            border-width: 0 1px 1px 1px;
        }

        .a {
            border-top: black solid 1px;
        }

        .b {
            border: black solid;
            border-width: 0 1px 1px 0;
        }

        .c {
            border: black solid;
            border-width: 1px 0 0 1px;
        }

        .d {
            border: black solid;
            border-width: 0 1px 0 0;
        }

        .c,
        .c .w-2 {
            padding: 0 0 0 0.5rem;

            p {
                padding-top: 0.5rem;
            }
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

        #print-div,
        #back-btn {
            display: none !important;
        }
    </style>
    <main>
        <div class="container">
            <!-- Title -->
            <div class="row justify-center">
                <p class="text-center" style="padding-right: 1rem;">Admit Card</p>
                <a href="#" id="print-div" class="row center" onclick="window.print()">
                    <p>Print/Save</p>
                    <img src="img/printer.svg" alt="">
                </a>
                <a href="register.php" id="back-btn" class="flex center">Back to Home</a>
            </div>
            <!-- Header -->
            <div class="header text-center">
                <div class="header-top flex center">
                    <img src="img/logo-d.svg" alt="">
                    <div class="header-top-right">
                        <h2>STREMAX FOUNDATION</h2>
                        <h6>——— Bharat Mata Chowk, Near Konar Pool, Hazaribag, Jharkhand ———</h6>
                    </div>
                </div>
                <div class="header-bottom">
                    <h3>'Stremax State Scholarship Exam - 2026'</h3>
                </div>
            </div>
            <!-- Student Details -->
            <div class="student-data">
                <!-- Student details top row -->
                <div class="row top-row">
                    <!-- Top row left -->
                    <div class="top-w-2">
                        <!-- Roll No. - Class - Class Group -->
                        <div class="row">
                            <div class="w-3">
                                <p>Roll No.:</p>
                                <p>
                                    <?php echo htmlspecialchars($studentData['roll_no'] ?? 'N/A'); ?>
                                </p>
                            </div>
                            <div class="w-3">
                                <p>Calss:</p>
                                <p>
                                    <?php echo htmlspecialchars($studentData['class'] ?? 'N/A'); ?>
                                </p>
                            </div>
                            <div class="w-3">
                                <p>Class Group:</p>
                                <p>
                                    <?php echo htmlspecialchars($studentData['class_group'] ?? 'N/A'); ?>
                                </p>
                            </div>
                        </div>
                        <!-- Candidate Name -->
                        <div class="row">
                            <div class="w-1">
                                <p>Candidate Name:</p>
                                <p>
                                    <?php echo htmlspecialchars($studentData['name'] ?? 'N/A'); ?>
                                </p>
                            </div>
                        </div>
                        <!-- Father Name -->
                        <div class="row">
                            <div class="w-1">
                                <p>Father Name:</p>
                                <p>
                                    <?php echo htmlspecialchars($studentData['f_name'] ?? 'N/A'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Top row right -->
                    <div class="top-row-right">
                        <p>Candidate's Photo</p>
                    </div>
                </div>
                <!-- Institue Name - SSSE Code -->
                <div class="row">
                    <div class="w-2 b">
                        <p>Institue Name:</p>
                        <p>
                            <?php echo htmlspecialchars($studentData['inst_name'] ?? 'N/A'); ?>
                        </p>
                    </div>
                    <div class="w-2">
                        <p>SSSE Code:</p>
                        <p>
                            <?php echo htmlspecialchars($studentData['ssse_code'] ?? 'N/A'); ?>
                        </p>
                    </div>
                </div>
                <!-- Institute District - Institute Block -->
                <div class="row">
                    <div class="w-2 b">
                        <p>Institute Block:</p>
                        <p>
                            <?php echo htmlspecialchars($studentData['inst_block'] ?? 'N/A'); ?>
                        </p>
                    </div>
                    <div class="w-2 a">
                        <p>Institute District:</p>
                        <p>
                            <?php echo htmlspecialchars($studentData['inst_district'] ?? 'N/A'); ?>
                        </p>
                    </div>
                </div>
                <!-- Aadhar - DOB + Mobile -->
                <div class="row">
                    <div class="w-2">
                        <p>Aadhar No.:</p>
                        <p>
                            <?php echo htmlspecialchars($studentData['aadhar'] ?? 'N/A'); ?>
                        </p>
                    </div>
                    <div class="row w-2 c">
                        <div class="w-2 d">
                            <p>DOB.:</p>
                            <p>
                                <?php echo htmlspecialchars($dob->format('d-m-Y') ?? 'N/A'); ?>
                            </p>
                        </div>
                        <div class="w-2">
                            <p>Mob. No.:</p>
                            <p>
                                <?php echo htmlspecialchars($studentData['mobile'] ?? 'N/A'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Exam Date - Exam Time - Entry Closing - Reporting Time -->
                <div class="row">
                    <div class="w-4">
                        <p>Exam Date:</p>
                        <p>13/09/2026, Sunday</p>
                    </div>
                    <div class="w-4">
                        <p>Exam Time:</p>
                        <p>11:30 - 12:30 PM</p>
                    </div>
                    <div class="w-4">
                        <p>Entry Closing:</p>
                        <p>10:30 AM</p>
                    </div>
                    <div class="w-4">
                        <p>Reporting Time:</p>
                        <p>10:00 AM</p>
                    </div>
                </div>
                <!-- Exam Centre -->
                <div class="row a">
                    <div class="w-1">
                        <p>Exam Centre:</p>
                        <p>
                            <?php echo htmlspecialchars($studentData['exam_centre'] ?? 'N/A'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Instructions-->
            <div class="">
                <h5 lang="hi" class="text-center">- General Instruction (अभ्यर्थियों के लिए आवश्यक निर्देश) -</h5>
                <ol>
                    <li lang="hi">अभ्यर्थी परीक्षा केंद्र पर निर्धारित रिपोर्टिंग समय में पहुंचें।</li>
                    <li lang="hi">परीक्षा केंद्र में प्रवेश के लिए एडमिट कार्ड की मूल प्रति साथ लाना अनिवार्य है।</li>
                    <li lang="hi">अभ्यर्थी अपना वैध फोटो पहचान-पत्र (आधार कार्ड) साथ रखें।</li>
                    <li lang="hi">एडमिट कार्ड पर अंकित परीक्षा केंद्र, तिथि एवं परीक्षा समय इसके अलावा वर्ग और ग्रुप को
                        ध्यानपूर्वक जांच लें।</li>
                    <li lang="hi">गेट बंद होने के बाद अभ्यर्थियों को परीक्षा केंद्र में प्रवेश की अनुमति नहीं दी जा सकती
                        है।</li>
                    <li lang="hi">परीक्षा कक्ष में मोबाइल फोन, स्मार्ट वॉच, ब्लूटूथ डिवाइस, कैलकुलेटर या किसी भी प्रकार
                        के इलेक्ट्रॉनिक उपकरण लाना प्रतिबंधित है।</li>
                    <li lang="hi">परीक्षा के दौरान किसी भी प्रकार की अनुचित सामग्री या नकल के साधन का प्रयोग करना
                        पूर्णतः प्रतिबंधित है। ऐसा पाए जाने पर अभ्यर्थिता रद्द की जा सकती है।</li>
                    <li lang="hi">अभ्यर्थी अपने साथ आवश्यक लेखन सामग्री (नीला/काला बॉल पेन आदि) अवश्य लाएं।</li>
                    <li lang="hi">परीक्षा केंद्र पर अभिभावक/साथी को परीक्षा कक्ष में प्रवेश की अनुमति नहीं होगी।</li>
                    <li lang="hi">परीक्षा के दौरान कक्ष निरीक्षक द्वारा दिए गए सभी निर्देशों का पालन करना अनिवार्य है।
                    </li>
                    <li lang="hi">किसी भी प्रकार की अनुशासनहीनता, दुर्व्यवहार या परीक्षा में बाधा उत्पन्न करने पर
                        अभ्यर्थी के विरुद्ध आवश्यक कार्रवाई की जा सकती है।</li>
                    <li lang="hi">एडमिट कार्ड में किसी प्रकार की त्रुटि (जिसमें से मुख्य रूप से - नाम, वर्ग और ग्रुप)
                        होने पर परीक्षा से पूर्व कार्यालय हेल्पलाइन मो.- 9525918072 से संपर्क करें।</li>
                    <li lang="hi">एडमिट कार्ड को परीक्षा के बाद भी सुरक्षित रखें, क्योंकि भविष्य में इसकी आवश्यकता पड़
                        सकती है।</li>
                    <li lang="hi">परीक्षा केंद्र पर अपना रोल नंबर ध्यानपूर्वक जांचकर सही स्थान पर बैठें।</li>
                    <li lang="hi"><b>महत्वपूर्ण:</b> परीक्षा से संबंधित किसी भी विवाद की स्थिति में STREMAX FOUNDATION
                        का निर्णय अंतिम एवं मान्य होगा।</li>
                </ol>
            </div>
            <!-- Co/Founder Message -->
            <div class="co-founder-message">
                <h5 leng="hi" class="text-center">शुभकामनाओं के साथ...</h5>
                <div class="founder row space-between">
                    <div class="founder-left">
                        <div class="row center">
                            <div class="text-center">
                                <h4>Bipin Kumar</h4>
                                <h6>Founder & CEO</h6>
                            </div>
                        </div>
                    </div>
                    <div class="founder-right">
                        <div class="row center">
                            <div class="text-center">
                                <h4>Pankaj Saw</h4>
                                <h6>Director & CEO</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Back button script-->
    <script>
        document.getElementById("print-div").addEventListener("click", function(event) {
            document.getElementById("back-btn").style.display = "block";
        })
    </script>
</body>

</html>