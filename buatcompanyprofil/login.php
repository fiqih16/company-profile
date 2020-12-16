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
<!DOCTYPE HTML>
<head>
  <title>Login</title>
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
<body>
    <div class="box">
      <h2>LOGIN</h2>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="inputbox">
        <input type="text" name="username" required="" placeholder="Masukan username Anda"> 
          <label for="" style="color: white;"></label>
        </div>

        <div class="inputbox">
          <input type="Password" name="password" required="" placeholder="Masukan Password Anda">
            <label for="" style="color: white"></label><br>
        </div>
        
        <button align="center" type="submit" style="width: 100px; height: 30px;" name="login">Login</button>
      </form>
    </div><!-- <br><br><br><br><br><br><br><br></br><br><br><br> -->
</body>
</html>


