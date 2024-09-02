<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>REGISTRASI</h3>
    <form action="proses_registrasi.php" method="post">
        Nama Pegawai :
        <input type="text" name="nama_pegawai" value="" class="form-control">
        <br>
        Nik : 
        <input type="text" name="Nik" value="" class="form-control">
        <br>
        Gender : 
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="3"></textarea>
        <br>
        Jabatan :
        <select name="id_jabatan" class="form-control">
            <option>
                <?php 
            include '../config/koneksi.php';
            $qry_jabatan=mysqli_query($conn,"select * from tabel_jabatan");
            while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                echo '<option value="'.$data_jabatan['id_jabatan'].'">'.$data_jabatan['nama_jabatan'].'</option>';    
            }
            ?>
            </option>
        </select>
        <br>
        Username : 
        <input type="text" name="username" value="" class="form-control">
        <br>
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <br>
        <center><input type="submit" name="simpan" value="Tambah Pegawai" class="btn btn-primary"></center>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>