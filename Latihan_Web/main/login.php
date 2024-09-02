<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <style>
        body {
            background-color: #f7f9fc;
        }

        h3 {
            color: #4e73df;
            font-family: 'Arial', sans-serif;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 20px;
            margin-bottom: 15px;
        }

        .btn-success {
            border-radius: 20px;
            padding: 10px 20px;
            background-color: #1cc88a;
            border-color: #1cc88a;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #17a673;
            border-color: #17a673;
        }
    </style>
</head>
<body>
    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <form action="proses_login.php" method="post">
          <h3 align="center">Login</h3>
          Username:
          <input type="text" name="username" value="" class="form-control">
          password:
          <input type="password" name="password" class="form-control"><br>
          <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center>
          <br>
          <center><input type="submit" formaction="../pegawai/resgistrasi.php" class="btn btn-success" value="REGISTASI"></></center>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
