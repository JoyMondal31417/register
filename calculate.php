<?php
function calculate_cgpa($marks) {
    if ($marks >= 80) return 4.0;
    if ($marks >= 75) return 3.75;
    if ($marks >= 70) return 3.5;
    if ($marks >= 65) return 3.25;
    if ($marks >= 60) return 3.0;
    if ($marks >= 55) return 2.75;
    if ($marks >= 50) return 2.5;
    if ($marks >= 45) return 2.25;
    if ($marks >= 40) return 2.0;
    return 0.0;
}

$subject1 = $_POST['subject1'];
$subject2 = $_POST['subject2'];
$subject3 = $_POST['subject3'];
$subject4 = $_POST['subject4'];
$subject5 = $_POST['subject5'];

$cgpa = (calculate_cgpa($subject1) + calculate_cgpa($subject2) + calculate_cgpa($subject3) + calculate_cgpa($subject4) + calculate_cgpa($subject5)) / 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA Result</title>
    <style>
        
    </style>
</head>
<body>
    <div class="result-container">
        <h1>CGPA Result</h1>
        <p>Your CGPA is: <strong><?php echo number_format($cgpa, 2); ?></strong></p>
        <a href="reg.html">Go Back</a>
    </div>
</body>
</html>
