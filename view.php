<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #acb6e5, #74ebd5);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 1.8em;
        }
        p {
            font-size: 1em;
            color: #555;
            margin: 10px 0;
        }
        .back-button {
            margin-top: 20px;
            padding: 12px 20px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            text-decoration: none;
            transition: 0.3s;
        }
        .back-button:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Submitted Data</h1>
        <p><strong>Full Name:</strong> <?= htmlspecialchars($_GET['fullname']) ?></p>
        <p><strong>Student ID:</strong> <?= htmlspecialchars($_GET['studentid']) ?></p>
        <p><strong>Address:</strong> <?= htmlspecialchars($_GET['address']) ?></p>
        <p><strong>Date of Birth:</strong> <?= htmlspecialchars($_GET['dob']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($_GET['email']) ?></p>
        <p><strong>Contact:</strong> <?= htmlspecialchars($_GET['contact']) ?></p>

        <a class="back-button" href="cgpa.html">Calculate CGPA</a>
    </div>
</body>
</html>
