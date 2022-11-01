<?php
is (isset($_POST[Login])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
if ($user == "oktora"&& $pass =="1310"){
    header('location:formuliruts.php');
    //echo "Login Berhasil";
}else {
    echo "Login Gagal";
}
}
?>