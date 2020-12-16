<?php
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }else{
        $page = "view_tamu.php";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard admin</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body style="background-image:url(assets/img/home.jpg); background-attachment:fixed;">
        <?php
            session_start();
            if (!isset($_SESSION["username"])) header("location:login.php");
        ?>
    <div class="header">
            <div class="welcome">
            Welcome, <span><?php echo $_SESSION["username"]?></span>         
            </div>
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <nav class="menu" tabindex="0">
            <div class="smartphone-menu-trigger"></div>
            <header class="avatar">
                <img src="img/logo1.png" width="120" height="100">
                <h2><?php echo $_SESSION["username"] ?></h2>
            </header>
            <ul>
                <li tabindex="0" class="icon-barang">
                    <a href="?p=view_tamu.php">
                        Buku Tamu
                    </a>
                </li>
                <li tabindex="0" class="icon-employee">
                    <a href="form_petugas.php" target="content">
                        
                    </a>
                </li>
                <li tabindex="0" class="icon-customers">
                    <a href="form_pemesan.php" target="content">
                        
                    </a>
                </li>
                <li tabindex="0" class="icon-jual">
                    <a href="form_pesanan.php" target="content">
                        
                    </a>
                </li>
            </ul>
        </nav>
<div class="container">
    <!-- <h1>Contoh</h1> -->
    <?php include $page; ?>
</div>
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
</body>
</html>