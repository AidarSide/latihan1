<?php
if($_POST){
    $nama_pegawai=$_POST['nama_pegawai'];
    $Nik=$_POST['Nik'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['jenis_kelamin'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $id_jabatan=$_POST['id_jabatan'];
    if(empty($nama_pegawai)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='registrasi.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='registrasi.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='registrasi.php';</script>";
    } else {
        include '../config/koneksi.php';
        $insert=mysqli_query($conn,"insert into tabel_pegawai (nama_pegawai,Nik,jenis_kelamin, alamat, username, password, id_jabatan) value ('".$nama_pegawai."','".$Nik."','".$gender."','".$alamat."','".$username."','".($password)."','".$id_jabatan."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>