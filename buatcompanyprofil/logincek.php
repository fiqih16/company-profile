<?php
include "login.php";
$username = $_POST['username'];
$password = $_POST['password'];
//  kondisi x                kondisi y
if($username == 'admin' && $password == 'adminPassword'){
    echo "Selamat datang admin di system";
}elseif($username == 'admin1' && $password == 'adminPassword1'){
    echo "Selamat datang admin1 di system";
}else{
    echo "Anda tidak berhak masuk system";
}

?>