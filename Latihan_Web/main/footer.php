<?php 
// session_start();
    if($_SESSION['status_login']!=true){
        header('location: ../main/login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>latihan Web</title>
    <style>
        body {
            background-color: #f4f4f4;
            padding-bottom: 50px; /* To ensure content is above the footer */
        }

        .navbar {
            box-shadow: 4px 4px 5px -4px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            font-weight: bold;
            font-style: italic;
            color: #2c3e50 !important;
        }

        .nav-link {
            color: #2c3e50 !important;
        }

        .nav-link.active {
            color: #2980b9 !important;
            font-weight: bold;
        }

        .container {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .container-fluid {
            padding: 0 20px;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
        <!-- Content here -->
    </div>
    <div class="footer">
        <p>&copy; 2024 Company Name. All rights reserved.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
