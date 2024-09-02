<?php
if($_POST){
    $nama_jabatan = $_POST['nama_jabatan'];
    $gaji_pokok = $_POST['gaji_pokok'];

    if(empty($nama_jabatan)){
        echo "<script>alert('Nama jabatan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } else if(empty($gaji_pokok)){
        echo "<script>alert('Gaji pokok tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } else {
        include "../config/koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO tabel_jabatan (nama_jabatan, gaji_pokok) VALUES ('".$nama_jabatan."', '".$gaji_pokok."')");

        if($insert){
            echo "<script>alert('Sukses menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        }
    }
}
?>
