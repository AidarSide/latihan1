<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "../config/koneksi.php";
            $qry_login=mysqli_query($conn, "select * from tabel_pegawai where username = '".$username."' and password = '".$password."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_pegawai']=$dt_login['id_pegawai'];
                $_SESSION['nama_pegawai']=$dt_login['nama_pegawai'];
                $_SESSION['status_login']=true;
                header("location: ../main/home1.php");
            } else {
                echo "<script>alert('Username atau Password tidak benar');location.href='../main/login.php';</script>";
            }
        }
    }
?>