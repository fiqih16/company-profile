<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
<div class="container mt-5 pt-5 pb-5 pr-5 pl-5 bg-light text-info" style="box-shadow: 0px 0px 10px #000000">
<div class="card pb-3 pt-3 pr-3 pl-3">
<div class="card">
    <table class="table mt-5 pt-5 text-info">
    <h1 class="text-center pt-3">Buku Tamu</h1>
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Pesan</th>
        </tr>
    </thead>

<?php
    include 'koneksi.php';

    $per_page = 5;
    $page = isset($_GET['per_page']) ?
    (int)$_GET['per_page'] : 1;
    $mulai = ($page>1) ? ($page * $per_page) - $per_page : 0;
    $result = mysqli_query($Con, "select * from tamu");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$per_page);

    $no = $mulai+1;
    $data = mysqli_query($Con, "select * from tamu LIMIT $mulai, $per_page");
    while($dt_tamu = mysqli_fetch_array($data))

    {

    echo "<tbody>";
        echo "<tr>";
            echo "<th>$no</th>";
            echo "<td>$dt_tamu[id]</td>";
            echo "<th>$dt_tamu[nama]</th>";
            echo "<td>$dt_tamu[email]</td>";
            echo "<td>$dt_tamu[pesan]</td>";
        echo "</tr>";
    echo "</tbody>";
}

?>
</table> 
<div class="pagination">
    <?php
        for ($i=1; $i<=$pages ; $i++)
        {
            echo "<a href=?per_page=$i><span>$i</span></a>";
        }
    ?>
</div>
</div>
<div class="row pb-5 pt-5">
    <div class="col text-center">
        <a class="text-white" href="tambah_produk.html"><button type="button" class="btn btn-info">Tambah</button></a>
        <button type="button" class="btn btn-info">Ubah</button>
        <button type="button" class="btn btn-info">Hapus</button>
    </div>
</div>
</div>
</div>
</body>
</html>