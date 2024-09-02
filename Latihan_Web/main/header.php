<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: ../main/login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>SecondThrift</title>
    <style>
        body {
            background-color: #f4f4f4;
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
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <strong><em><a class="navbar-brand" href="#">LatihanWeb</a></em></strong>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../main/home.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container bg-light rounded" style="margin-top:10px">
        <!-- Content here -->
    </div>

