<?php
// Instead of PDF, generate HTML with print styles
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Slip - {{name}}</title>
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
        }

        /* Screen styles */
        @media screen {
            body {
                max-width: 210mm;
                margin: 20px auto;
                padding: 20px;
                background: #f5f5f5;
            }

            .container {
                background: white;
                padding: 20mm;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
        }

        .container {
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .field {
            margin-bottom: 8px;
        }

        .label {
            font-weight: bold;
            display: inline-block;
            width: 150px;
        }

        /* Hindi text support */
        .hindi {
            font-family: "Noto Sans Devanagari", "Arial Unicode MS", sans-serif;
        }

        .print-btn {
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin: 20px 0;
        }

        .download-btn {
            background: #2196F3;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin: 20px 10px;
        }
    </style>
</head>

<body>
    <div class="no-print" style="text-align: center;">
        <button class="print-btn" onclick="window.print()">🖨️ Print Registration Slip</button>
        <button class="download-btn" onclick="window.location.href='?format=pdf'">📥 Download as PDF</button>
        <button class="download-btn" onclick="window.location.href='?format=image'">🖼️ Save as Image</button>
    </div>

    <div class="container">
        <div class="header">
            <h1>STREMAX FOUNDATION</h1>
            <h2>Student Registration Slip</h2>
            <p>Registration No: {{aadhar}} | Date: {{submission_date}}</p>
        </div>

        <div class="section">
            <h3>Student Details</h3>
            <div class="field">
                <span class="label">Name:</span> {{name}}
            </div>
            <div class="field">
                <span class="label">Father's Name:</span> {{f_name}}
            </div>
            <div class="field">
                <span class="label">Class:</span> {{classs}} ({{classs_group}})
            </div>
            <div class="field">
                <span class="label">Date of Birth:</span> {{dob}}
            </div>
            <div class="field">
                <span class="label">Aadhar Number:</span> {{aadhar}}
            </div>
        </div>

        <div class="section">
            <h3>Contact Information</h3>
            <div class="field">
                <span class="label">Address:</span> {{vil_city}}, {{blocks}}, {{districts}}
            </div>
            <div class="field">
                <span class="label">Mobile:</span> {{mobile}}
            </div>
            <div class="field">
                <span class="label">WhatsApp:</span> {{whatsapp}}
            </div>
        </div>

        <div class="section">
            <h3>Institution Details</h3>
            <div class="field">
                <span class="label">Institution Type:</span> {{inst_type}}
            </div>
            <div class="field">
                <span class="label">Institution Name:</span> {{inst_name}}
            </div>
            <div class="field">
                <span class="label">Institution Address:</span> {{inst_vill}}, {{inst_block}}, {{inst_dist}}
            </div>
        </div>

        <div class="section hindi">
            <h3>सामान्य निर्देश / General Instructions</h3>
            <ol>
                <li>इस पंजीकरण पर्ची को सुरक्षित रखें। (Keep this registration slip safe.)</li>
                <li>परीक्षा से पहले इस पर्ची को अवश्य लेकर आएं। (Bring this slip for examination.)</li>
                <li>किसी भी त्रुटि की सूचना तुरंत दें। (Report any discrepancies immediately.)</li>
                <li>पंजीकरण संख्या: {{aadhar}} (Registration No.)</li>
            </ol>
        </div>

        <div class="section" style="text-align: center; margin-top: 30px;">
            <p>--- Signature / हस्ताक्षर ---</p>
            <p>Authorized Signatory, STREMAX FOUNDATION</p>
            <p>Date: {{submission_date}}</p>
        </div>
    </div>

    <script>
        // Auto-print option
        if (window.location.search.includes('autoprint')) {
            window.print();
        }

        // Save as image using html2canvas
        function saveAsImage() {
            if (typeof html2canvas === 'undefined') {
                // Load html2canvas library
                var script = document.createElement('script');
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
            html2canvas(document.querySelector('.container')).then(canvas => {
                var link = document.createElement('a');
                link.download = 'registration_{{aadhar}}.png';
                link.href = canvas.toDataURL('image/png');
                link.click();
            });
        }
    </script>
</body>

</html>
<?php
$html = ob_get_clean();

// Replace placeholders
$html = str_replace('{{name}}', $name, $html);
// ... other replacements

// Output based on format requested
if (isset($_GET['format']) && $_GET['format'] === 'pdf') {
    // Generate PDF for those who want it
    require_once __DIR__ . '/vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html);
    $mpdf->Output('registration.pdf', 'I');
} else {
    // Output HTML by default
    echo $html;
}
?>