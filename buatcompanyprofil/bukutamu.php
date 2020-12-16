<?php 
  include 'koneksi.php';

 if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    mysqli_query($Con, "INSERT INTO
    tamu(nama, email, pesan)
    values ('$nama', '$email', '$pesan')");
  }
?>
 <div class="container col-md-7">
      <form method="POST">
            <div class="form-group">
              <label for="nama">Name </label>
              <input type="text" class="form-control" name="nama" placeholder="Input your name">
            </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Input your email address">
              </div>
                <div class="form-group">
                  <label for="pesan">Message</label>
                  <textarea name="pesan" class="form-control"></textarea>
                </div>
                  <div class="form-group">
                  <button class="btn btn-primary" name="submit">Submit</button>
                  </div>
        </form> 
    </div>