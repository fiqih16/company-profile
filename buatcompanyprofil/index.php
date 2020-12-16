<?php 
if(isset($_GET['p'])){
	$page = $_GET['p'];
}else{
	$page = "home.php";
}


?>

<?php
session_start();
$_SESSION["username"]="Fiqih";
$_SESSION["password"]="123";
if (isset($_POST["login"])){
    if ($_POST["username"]=="fiqih" && $_POST["password"]=="123"){
        header("location:admin.php");
    }else{
        echo "Maaf Username Atau Password Salah !";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="img/logo1.png">
<style>
	

	body{
  margin:0;
  padding: 0;
  font-family: sans-serif;
  background-image: url();
  background-size: cover;
  /*background-color: grey;*/
}

.box{
  position:absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  padding: 40px;
  background: rgb(0,0,0,.8);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
}

.box h2{
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box .inputbox{
  position: relative;
}

.box .inputbox input{
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  letter-spacing: 1px;
  color: #fff;
  margin-bottom: 30px;
  border:none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.box .input label{
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.box .inputbox input:focus ~ label,
.box .inputbox input:valid ~ label{
  top: -18px;
  left: 0;
  color: #03a9f4;
  font-size: 12px
}

.box input[type="submit"]{
  background: transparent;
  border:none;
  color: #fff
  background:#03a9f4;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
<div class="container">
  <a class="navbar-brand" href="?p=home.php">Company profile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="?p=beranda.php">Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=gallery.php">Galery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=bukutamu.php">Buku Tamu</a>
      </li>
      <li class="nav-item">
       <!--  <a class="nav-link" href="?p=log.php" data-toggle="modal" data-target=".modalBesar">Login</a> -->
      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBesar">Large modal</button> -->

      <!-- Login pop up -->
       <span class="nav-link" data-toggle="modal" data-target=".modalBesar">LOGIN</span>

    <div class="modal fade modalBesar" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">

        <div class="modal-content" style="margin-top: 50%; background: transparent; border: none;">
          
          <div class="modal-body text-center">
            
            <div class="box">
          	<h2>LOGIN</h2>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="inputbox">
        <input type="text" name="username" required="" placeholder="Masukan username Anda"> 
          <label for="" style="color: white;"></label><br><br>
        </div>

        <div class="inputbox">
          <input type="Password" name="password" required="" placeholder="Masukan Password Anda">
            <label for="" style="color: white"></label><br><br>
        </div>
        
        <button align="center" type="submit" style="width: 100px; height: 30px;" name="login">Login</button>
      </form>
          </div>
        </div>

      </div>
    </div>
    </div>
      </li>

      
     <!--  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 text-dark" type="submit">Search</button>
    </form>
  </div>
 </div>
</nav>


<!-- membuat jumbrotan -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
          <img src="img/logo1.png" width="40%" alt="">
          <h1 class="display-4">PT ABCD</h1>
            <p class="lead">Tindakan kita untuk menciptakan dunia yang lebih sehat</p>
        </div>
    </div>

<div class="container">
	<!-- <h1>Contoh</h1> -->
	<?php include $page; ?>
</div>




<!-- membuat footer -->
    <!-- <div class="container"> -->
    <!-- <footer class="bg-info text-white">
      <div class="row col-lg-12">
        <div class="col text-center">
          <p>Copyright 2020</p>
        </div>
      </div>
    </footer> -->

<footer>
	<div class="footer" style=" width: 100%; height: 100%; font-family: sans-serif; background-color: #efeff5;">
		<div class="container" style="padding: 10px; margin-top: 50px;">
			<h3 style="margin-top: 15px;">Follow us on: <img src="img/logo.png" alt="" style="width: 27%;"></h3><br><b><hr width="100%"></b><br><br><br>

			<div class="row">
				<div class="col">
					<ul>
						<li style="font-family: arial; list-style-type: none;">MORE ABOUT US</li></h3><br><br>
						<li style="font-family: times new roman; list-style-type: none;">Contact us</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Investor relations</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Careers</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Location</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Blog</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Think with Google</li><br>
					</ul>
				</div>

				<div class="col">
					<ul>
						<li style="font-family: arial; list-style-type: none;">PRESS ROOM</li><br><br>
						<li style="font-family: times new roman; list-style-type: none;">Press inquiries</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Image & B-roll</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Permissions</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Speaker requests</li><br>
					</ul>
				</div>
				<div class="col">
					<ul>
						<li style="font-family: arial; list-style-type: none;">POLICY</li><br><br>
						<li style="font-family: times new roman; list-style-type: none;">Application security</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Software principles</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Unwanted software policy</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Responsible supply chain</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Extended workforce</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Conflict minerals policy</li><br>
						<li style="font-family: times new roman; list-style-type: none;">Community Guidelines</li><br>
						<li style="font-family: times new roman; list-style-type: none;">How our business works</li><br>
					</ul>
				</div>
			</div>

			<b><hr width="100%"></b><br>
			<div class="row">
				<div class="col-2">
					<h3 style="font-family: : verdana;">PT ABCD</h3>
				</div>
				<div class="col-10 text-left">
					<span class="margun">❔ Help</span>
					<span class="margun">Privacy</span>
					<span class="margun">Terms</span>
				</div>
				
			</div>
		</div>
	</div>
</footer>


	<script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
</body>
</html>