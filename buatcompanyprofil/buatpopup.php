<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="assets/css/bootstrap.css"> 
	<title>Tutorial Membuat Modal Dengan Bootstrap 4 - www.malasngoding.com</title> 
</head> 
<body> 
	

	<div class="container">

		<center>
			<h3>Tutorial Membuat Modal Dengan Bootstrap 4</h3>
			<h4><a href="https://www.malasngoding.com/modal-bootstrap-4/">www.malasngoding.com</a></h4>
		</center>


		<br/>
		<br/>


    <h4>Modal Sederhana</h4>
    <!-- Tombol yang memicu modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">
      Klik Saya 
    </button>

    <!-- Contoh Modal -->
    <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalSayaLabel">Judul Modal Di Sini</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Halo, ini modal sederhana.
            <br/>
            Seri Tutorial Bootstrap 4 lengkap dari dasar sampai mahir.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Oke</button>
          </div>
        </div>
      </div>
    </div>



    <br/>
    <hr>
    <br/>


    <h4>Ukuran Modal</h4>
    <!-- Extra large modal / Modal paling besar-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalPalingBesar">Extra large modal</button>

    <div class="modal fade modalPalingBesar" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl">

        <div class="modal-content">
          <div class="modal-header">
            <h5>Modal extra large (xl)</h5>
          </div>
          <div class="modal-body">
            Contoh modal berukuran paling besar.
          </div>
        </div>

      </div>
    </div>

    <!-- Large modal / Modal besar-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBesar">Large modal</button>

    <div class="modal fade modalBesar" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">

        <div class="modal-content">
          <div class="modal-header">
            <h5>Modal large (lg)</h5>
          </div>
          <div class="modal-body">
            Contoh modal berukuran sedang.
          </div>
        </div>

      </div>
    </div>

    <!-- Small modal / Modal kecil-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalKecil">Small modal</button>

    <div class="modal fade modalKecil" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm">

        <div class="modal-content">
          <div class="modal-header">
            <h5>Modal small / kecil (sm)</h5>
          </div>
          <div class="modal-body">
            Contoh modal berukuran paling kecil.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam.
            sLorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam.
          </div>
        </div>

      </div>
    </div>



    <br/>
    <hr>
    <br/>


    <h4>Modal Scroll</h4>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contohModalScroll">
      Modal Scroll
    </button>

    <div class="modal fade" id="contohModalScroll" tabindex="-1" role="dialog" aria-labelledby="contohModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="contohModalScrollableTitle">Contoh modal scroll bootstrap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3>Tutorial Bootstrap 4</h3>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>


  </div>



  <script src="assets/js/jquery.js"></script> 
  <script src="assets/js/popper.js"></script> 
  <script src="assets/js/bootstrap.js"></script>
</body> 
</html>