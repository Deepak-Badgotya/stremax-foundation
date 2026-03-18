<?php
// Register from data
$showError = false;
$showAlert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../assets/connect.php';

    // Candidate Details
    $name = $_POST["name"];
    $f_name = $_POST["f_name"];
    $class = $_POST["class"];
    $class_group = $_POST["class_group"];

    // Candidate Address
    $vil_city = $_POST["vil_city"];
    $blocks = $_POST["blocks"];
    $districts = $_POST["districts"];
    $mobile = $_POST["mobile"];
    $whatsapp = $_POST["whatsapp"];
    $aadhar = $_POST["aadhar"];
    $dob = $_POST["dob"];

    // Institution Details
    $inst_type = $_POST["inst_type"];
    $inst_name = $_POST["inst_name"];

    // Institution Address
    $inst_vill = $_POST["inst_vill"];
    $inst_block = $_POST["block"];
    $inst_dist = $_POST["district"];

    // Check whether the username exists
    $existSql = "SELECT * FROM `students` WHERE aadhar = '$aadhar'";
    $checkResult = mysqli_query($conn, $existSql);
    $numExsitsRow = mysqli_num_rows($checkResult);

    /* if ($numExsitsRow > 0) {
        // Student already exists
        $showError = "Aadhar numbers Already Exists. Please check your aadhar numbers.";
        header("Location: ../register.php?showError=" . urlencode($showError));
        exit;
    } else { */
        // Escape variables
        $name = mysqli_real_escape_string($conn, $name);
        $f_name = mysqli_real_escape_string($conn, $f_name);
        $class = mysqli_real_escape_string($conn, $class);
        $class_group = mysqli_real_escape_string($conn, $class_group);
        $vil_city = mysqli_real_escape_string($conn, $vil_city);
        $blocks = mysqli_real_escape_string($conn, $blocks);
        $districts = mysqli_real_escape_string($conn, $districts);
        $mobile = mysqli_real_escape_string($conn, $mobile);
        $whatsapp = mysqli_real_escape_string($conn, $whatsapp);
        $aadhar = mysqli_real_escape_string($conn, $aadhar);
        $dob = mysqli_real_escape_string($conn, $dob);
        $inst_type = mysqli_real_escape_string($conn, $inst_type);
        $inst_name = mysqli_real_escape_string($conn, $inst_name);
        $inst_vill = mysqli_real_escape_string($conn, $inst_vill);
        $inst_block = mysqli_real_escape_string($conn, $inst_block);
        $inst_dist = mysqli_real_escape_string($conn, $inst_dist);

        // Insert into database
        $sql = "INSERT INTO students (name, f_name, class, class_group, vil_city, block, district, mobile, whatsapp, aadhar, dob, inst_type, inst_name, inst_vill, inst_block, inst_dist) 
                VALUES ('$name','$f_name','$class','$class_group','$vil_city','$blocks','$districts','$mobile','$whatsapp','$aadhar', '$dob', '$inst_type', '$inst_name', '$inst_vill', '$inst_block', '$inst_dist')";

        $insertResult = mysqli_query($conn, $sql);

        if (!$insertResult) {
            $showError = "Database error: " . mysqli_error($conn);
            header("Location: ../register.php?showError=" . urlencode($showError));
            exit;
        }

        $lastInsertId = mysqli_insert_id($conn);
        $dob_print = date("d/m/Y", strtotime($dob));
        $current_date = date('d/m/Y');

        // Format for display
        $formatted_whatsapp = $whatsapp ?: 'Not provided';
        $formatted_mobile = $mobile ?: 'Not provided';

        // Check if PDF format is requested
        if (isset($_GET['format']) && $_GET['format'] === 'pdf') {
            // Generate PDF (your original code)
            require_once __DIR__ . '/vendor/autoload.php';

            ob_start();
            include('pdfs.html');
            $html = ob_get_clean();

            // Replace placeholders
            $html = str_replace('{{name}}', $name, $html);
            $html = str_replace('{{f_name}}', $f_name, $html);
            $html = str_replace('{{classs}}', $class, $html);
            $html = str_replace('{{classs_group}}', $class_group, $html);
            $html = str_replace('{{vil_city}}', $vil_city, $html);
            $html = str_replace('{{blocks}}', $blocks, $html);
            $html = str_replace('{{districts}}', $districts, $html);
            $html = str_replace('{{mobile}}', $mobile, $html);
            $html = str_replace('{{whatsapp}}', $whatsapp, $html);
            $html = str_replace('{{aadhar}}', $aadhar, $html);
            $html = str_replace('{{dob}}', $dob_print, $html);
            $html = str_replace('{{inst_type}}', $inst_type, $html);
            $html = str_replace('{{inst_name}}', $inst_name, $html);
            $html = str_replace('{{inst_vill}}', $inst_vill, $html);
            $html = str_replace('{{inst_block}}', $inst_block, $html);
            $html = str_replace('{{inst_dist}}', $inst_dist, $html);
            $html = str_replace('{{submission_date}}', $current_date, $html);

            $mpdf = new \Mpdf\Mpdf([
                'format' => 'A4',
                'mode' => 'utf-8',
                'default_font' => 'notosans',
                'autoScriptToLang' => true,
                'autoLangToFont' => true,
                'margin_top' => 7,
                'margin_bottom' => 7
            ]);

            $mpdf->SetDisplayMode('fullpage', 'continuous');
            $mpdf->WriteHTML($html);
            $mpdf->Output('stremaxfoundation.pdf', 'I');
            exit;

        } else {
            // Output HTML page by default
            displayRegistrationHTML(
                $name,
                $f_name,
                $class,
                $class_group,
                $vil_city,
                $blocks,
                $districts,
                $mobile,
                $whatsapp,
                $aadhar,
                $dob_print,
                $inst_type,
                $inst_name,
                $inst_vill,
                $inst_block,
                $inst_dist,
                $current_date,
                $lastInsertId
            );
            exit;
        }
    //}
}

function displayRegistrationHTML(
    $name,
    $f_name,
    $class,
    $class_group,
    $vil_city,
    $blocks,
    $districts,
    $mobile,
    $whatsapp,
    $aadhar,
    $dob_print,
    $inst_type,
    $inst_name,
    $inst_vill,
    $inst_block,
    $inst_dist,
    $current_date,
    $last_id
) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Slip -
            <?php echo htmlspecialchars($name); ?>
        </title>
        <style>
            /* Print-friendly styles */
            @media print {
                body {
                    margin: 0;
                    padding: 0;
                    font-size: 12pt;
                }

                .no-print {
                    display: none !important;
                }

                .page-break {
                    page-break-after: always;
                }

                @page {
                    margin: 15mm;
                    size: A4;
                }

                .container {
                    border: none !important;
                    box-shadow: none !important;
                }
            }

            /* Screen styles */
            @media screen {
                body {
                    font-family: 'Segoe UI', Arial, sans-serif;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    min-height: 100vh;
                    padding: 20px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .container {
                    background: white;
                    padding: 25px;
                    border-radius: 10px;
                    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
                    max-width: 800px;
                    width: 100%;
                }

                .success-alert {
                    background: #d4edda;
                    color: #155724;
                    padding: 15px;
                    border-radius: 5px;
                    margin-bottom: 20px;
                    border: 1px solid #c3e6cb;
                }
            }

            /* Common styles */
            .container {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333;
            }

            .header {
                text-align: center;
                border-bottom: 3px solid #4CAF50;
                padding-bottom: 20px;
                margin-bottom: 30px;
                position: relative;
            }

            .header h1 {
                color: #2c3e50;
                margin: 0;
                font-size: 28px;
            }

            .header h2 {
                color: #4CAF50;
                margin: 10px 0;
                font-size: 22px;
            }

            .header p {
                color: #7f8c8d;
                font-size: 14px;
                margin: 5px 0;
            }

            .reg-number {
                background: #4CAF50;
                color: white;
                padding: 5px 15px;
                border-radius: 20px;
                display: inline-block;
                margin-top: 10px;
                font-weight: bold;
            }

            .section {
                margin-bottom: 25px;
                padding: 20px;
                border: 1px solid #e0e0e0;
                border-radius: 8px;
                background: #f9f9f9;
            }

            .section h3 {
                color: #2c3e50;
                margin-top: 0;
                padding-bottom: 10px;
                border-bottom: 2px solid #4CAF50;
                font-size: 18px;
            }

            .field {
                margin-bottom: 12px;
                display: flex;
                align-items: flex-start;
            }

            .label {
                font-weight: 600;
                color: #34495e;
                min-width: 180px;
                flex-shrink: 0;
            }

            .value {
                color: #2c3e50;
                flex-grow: 1;
            }

            /* Hindi text support */
            .hindi {
                font-family: "Noto Sans Devanagari", "Nirmala UI", "Arial Unicode MS", sans-serif;
                direction: ltr;
            }

            /* Action buttons */
            .action-buttons {
                display: flex;
                justify-content: center;
                gap: 15px;
                margin: 30px 0;
                flex-wrap: wrap;
            }

            .btn {
                padding: 12px 25px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                font-weight: 600;
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                gap: 8px;
                text-decoration: none;
            }

            .btn-primary {
                background: #4CAF50;
                color: white;
            }

            .btn-primary:hover {
                background: #45a049;
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(76, 175, 80, 0.3);
            }

            .btn-secondary {
                background: #2196F3;
                color: white;
            }

            .btn-secondary:hover {
                background: #1976D2;
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(33, 150, 243, 0.3);
            }

            .btn-warning {
                background: #ff9800;
                color: white;
            }

            .btn-warning:hover {
                background: #f57c00;
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(255, 152, 0, 0.3);
            }

            .btn-danger {
                background: #f44336;
                color: white;
            }

            .btn-danger:hover {
                background: #d32f2f;
                transform: translateY(-2px);
                box-shadow: 0 4px 12px rgba(244, 67, 54, 0.3);
            }

            /* Footer */
            .footer {
                text-align: center;
                margin-top: 30px;
                padding-top: 20px;
                border-top: 1px solid #e0e0e0;
                color: #7f8c8d;
                font-size: 14px;
            }

            .signature {
                text-align: center;
                margin-top: 40px;
                padding-top: 20px;
                border-top: 2px dashed #4CAF50;
            }

            .signature p {
                margin: 5px 0;
                color: #555;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .field {
                    flex-direction: column;
                }

                .label {
                    min-width: auto;
                    margin-bottom: 5px;
                }

                .action-buttons {
                    flex-direction: column;
                }

                .btn {
                    width: 100%;
                    justify-content: center;
                }
            }

            /* Animation */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .container {
                animation: fadeIn 0.5s ease-out;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>

    <body>
        <div class="container">
            <!-- Success Alert -->
            <div class="success-alert no-print">
                <h3 style="margin: 0;"><i class="fas fa-check-circle"></i> Registration Successful!</h3>
                <p style="margin: 10px 0 0 0;">Your registration has been completed successfully. You can now print or
                    download your registration slip.</p>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons no-print">
                <button class="btn btn-primary" onclick="window.print()">
                    <i class="fas fa-print"></i> Print Slip
                </button>
                <a href="?format=pdf&id=<?php echo $last_id; ?>" class="btn btn-secondary">
                    <i class="fas fa-file-pdf"></i> Download PDF
                </a>
                <button class="btn btn-warning" onclick="saveAsImage()">
                    <i class="fas fa-image"></i> Save as Image
                </button>
                <button class="btn btn-danger" onclick="shareViaWhatsApp()">
                    <i class="fab fa-whatsapp"></i> Share on WhatsApp
                </button>
            </div>

            <!-- Registration Slip Content -->
            <div class="header">
                <h1>STREMAX FOUNDATION</h1>
                <h2>Student Registration Slip</h2>
                <div class="reg-number">Registration No:
                    <?php echo htmlspecialchars($aadhar); ?>
                </div>
                <p>Date of Registration:
                    <?php echo $current_date; ?>
                </p>
                <p style="color: #f39c12; font-weight: bold;">* Keep this slip for future reference *</p>
            </div>

            <!-- Student Details -->
            <div class="section">
                <h3><i class="fas fa-user-graduate"></i> Student Details</h3>
                <div class="field">
                    <span class="label">Full Name:</span>
                    <span class="value">
                        <?php echo htmlspecialchars($name); ?>
                    </span>
                </div>
                <div class="field">
                    <span class="label">Father's Name:</span>
                    <span class="value">
                        <?php echo htmlspecialchars($f_name); ?>
                    </span>
                </div>
                <div class="field">
                    <span class="label">Class & Stream:</span>
                    <span class="value">
                        <?php echo htmlspecialchars($class) . ' (' . htmlspecialchars($class_group) . ')'; ?>
                    </span>
                </div>
                <div class="field">
                    <span class="label">Date of Birth:</span>
                    <span class="value">
                        <?php echo $dob_print; ?>
                    </span>
                </div>
                <div class="field">
                    <span class="label">Aadhar Number:</span>
                    <span class="value" style="font-family: monospace;">
                        <?php echo htmlspecialchars($aadhar); ?>
                    </span>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="section">
                <h3><i class="fas fa-address-card"></i> Contact Information</h3>
                <div class="field">
                    <span class="label">Address:</span>
                    <span class="value">
                        <?php echo htmlspecialchars($vil_city) . ', ' . htmlspecialchars($blocks) . ', ' . htmlspecialchars($districts); ?>
                    </span>
                </div>
                <div class="field">
                    <span class="label">Mobile Number:</span>
                    <span class="value">
                        <?php echo htmlspecialchars($mobile); ?>
                    </span>
                </div>
                <div class="field">
                    <span class="label">WhatsApp Number:</span>
                    <span class="value">
                        <?php echo htmlspecialchars($whatsapp); ?>
                    </span>
                </div>
            </div>

            <!-- Institution Details -->
            <div class="section">
                <h3><i class="fas fa-school"></i> Institution Details</h3>
                <div class="field">
                    <span class="label">Institution Type:</span>
                    <span class="value">
                        <?php echo htmlspecialchars($inst_type); ?>
                    </span>
                </div>
                <div class="field">
                    <span class="label">Institution Name:</span>
                    <span class="value">
                        <?php echo htmlspecialchars($inst_name); ?>
                    </span>
                </div>
                <div class="field">
                    <span class="label">Institution Address:</span>
                    <span class="value">
                        <?php echo htmlspecialchars($inst_vill) . ', ' . htmlspecialchars($inst_block) . ', ' . htmlspecialchars($inst_dist); ?>
                    </span>
                </div>
            </div>

            <!-- Instructions -->
            <div class="section hindi">
                <h3><i class="fas fa-info-circle"></i> सामान्य निर्देश / General Instructions</h3>
                <div style="background: #fff8e1; padding: 15px; border-radius: 5px; border-left: 4px solid #ff9800;">
                    <ol style="margin: 0; padding-left: 20px;">
                        <li>इस पंजीकरण पर्ची को सुरक्षित रखें। (Keep this registration slip safe.)</li>
                        <li>परीक्षा/कार्यक्रम से पहले इस पर्ची को अवश्य लेकर आएं। (Bring this slip for examination/program.)
                        </li>
                        <li>किसी भी त्रुटि की सूचना तुरंत दें। (Report any discrepancies immediately.)</li>
                        <li>पंजीकरण संख्या को नोट कर लें। (Note down your registration number.)</li>
                        <li>संपर्क सूचना अद्यतन रखें। (Keep your contact information updated.)</li>
                    </ol>
                </div>
                <div
                    style="margin-top: 15px; padding: 10px; background: #e8f5e9; border-radius: 5px; border-left: 4px solid #4CAF50;">
                    <p style="margin: 0;"><strong>Note:</strong> This is your official registration slip. Please keep it for
                        all future correspondence with STREMAX FOUNDATION.</p>
                </div>
            </div>

            <!-- Signature Section -->
            <div class="signature">
                <p style="margin-bottom: 20px;">--- Authorized Signatory ---</p>
                <p style="font-weight: bold;">STREMAX FOUNDATION</p>
                <p>Official Stamp & Signature</p>
                <p>Date:
                    <?php echo $current_date; ?>
                </p>
                <p style="font-size: 12px; color: #777;">*This is a computer-generated document, no physical signature
                    required*</p>
            </div>

            <!-- Footer -->
            <div class="footer no-print">
                <p>For any queries, contact: support@stremaxfoundation.org | Helpline: +91 XXXX XXX XXX</p>
                <p style="font-size: 12px;">Document ID: REG-
                    <?php echo str_pad($last_id, 6, '0', STR_PAD_LEFT); ?> | Generated on:
                    <?php echo date('d/m/Y H:i:s'); ?>
                </p>
            </div>
        </div>

        <script>
            // Save as Image using html2canvas
            function saveAsImage() {
                // Check if html2canvas is loaded
                if (typeof html2canvas === 'undefined') {
                    // Load html2canvas
                    const script = document.createElement('script');
                    script.src = 'https://html2canvas.hertzen.com/dist/html2canvas.min.js';
                    script.onload = function () {
                        captureImage();
                    };
                    document.head.appendChild(script);
                } else {
                    captureImage();
                }
            }

            function captureImage() {
                html2canvas(document.querySelector('.container'), {
                    scale: 2, // Higher quality
                    useCORS: true,
                    logging: false
                }).then(canvas => {
                    const link = document.createElement('a');
                    link.download = 'Registration_<?php echo $aadhar; ?>.png';
                    link.href = canvas.toDataURL('image/png');
                    link.click();

                    // Show success message
                    showMessage('Image saved successfully!', 'success');
                }).catch(error => {
                    showMessage('Error saving image: ' + error.message, 'error');
                });
            }

            // Share via WhatsApp
            function shareViaWhatsApp() {
                const message = `STREMAX FOUNDATION Registration%0A%0A` +
                    `Name: <?php echo $name; ?>%0A` +
                    `Reg No: <?php echo $aadhar; ?>%0A` +
                    `Class: <?php echo $class . ' (' . $class_group . ')'; ?>%0A` +
                    `Date: <?php echo $current_date; ?>%0A%0A` +
                    `Download: ${window.location.href}`;

                window.open(`https://wa.me/?text=${message}`, '_blank');
            }

            // Show message function
            function showMessage(text, type) {
                const alert = document.createElement('div');
                alert.style.cssText = `
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    padding: 15px 25px;
                    border-radius: 5px;
                    color: white;
                    font-weight: bold;
                    z-index: 9999;
                    animation: slideIn 0.3s ease-out;
                `;

                if (type === 'success') {
                    alert.style.background = '#4CAF50';
                } else {
                    alert.style.background = '#f44336';
                }

                alert.textContent = text;
                document.body.appendChild(alert);

                setTimeout(() => {
                    alert.style.animation = 'slideOut 0.3s ease-in';
                    setTimeout(() => alert.remove(), 300);
                }, 3000);
            }

            // Auto-print if parameter is set
            if (window.location.search.includes('autoprint')) {
                window.print();
            }

            // Add CSS for animations
            const style = document.createElement('style');
            style.textContent = `
                @keyframes slideIn {
                    from { transform: translateX(100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                @keyframes slideOut {
                    from { transform: translateX(0); opacity: 1; }
                    to { transform: translateX(100%); opacity: 0; }
                }
            `;
            document.head.appendChild(style);
        </script>
    </body>

    </html>
    <?php
}
?>