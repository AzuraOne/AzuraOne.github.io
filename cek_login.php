<?php

//panggil koneksi database
include "koneksi.php";


$email = mysqli_escape_string($koneksi, $_POST['email']);
$password = mysqli_escape_string($koneksi, $_POST['password']);


//cek email, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM pengunjung WHERE Email = '$email' AND password = '$password' ");
var_dump($cek_user);

$user_valid = mysqli_fetch_array($cek_user);
var_dump($user_valid);
//uji jika email terdaftar
if ($user_valid) {
    //jika email terdaftar
    //cek password sesuai atau tidak
    if ($password == $user_valid['password']) {
        //jika password sesuai
        //buat session
        session_start();
        $_SESSION['Email'] = $user_valid['Email'];
        $_SESSION['Nama'] = $user_valid['Nama'];
        
    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='login.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');</script>";
}
