<?php
include_once('header.php');
session_start();
error_reporting(0);

?>

<p>  </p>
<h2>Daus Shop</h2>

<p class="">
  Jangan ragu untuk pembelian di tempat kami dausshop.com, karena kami memiliki alamat yang jelas dan tidak meragukan dan juga anda dianjurkan datang di tempat kami secara langsung jika ada waktu, karena pasti anda akan lebih puas dan yakin.
</p>

<div class="container">
  <div class="row">
    <div class="col l4 m6 s12 dummy-class">
       <div class="card">
        <div class="card-image">
          <img src="src/files/image/rabbit1.jpeg">
          <span class="card-title"> </span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
       <div class="card-content">
          <p>Ini kelinci 1.</p>
       </div>
      </div>
    </div>
    <div class="col l4 m6 s12 dummy-class">
        <div class="card">
         <div class="card-image">
           <img src="src/files/image/rabbit1.jpeg">
           <span class="card-title"> </span>
           <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
         </div>
        <div class="card-content">
        <p>Ini kelinci 2.</p>
        </div>
      </div>
    </div>
    <div class="col l4 m6 s12 dummy-class">
       <div class="card">
        <div class="card-image">
          <img src="src/files/image/rabbit1.jpeg">
          <span class="card-title"> </span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
      <div class="card-content">
        <p>Ini kelinci 3.</p>
    </div>
   </div>
  </div>
</div>
</div>

<h2 align="center"> Hasil Masukan </h2>
<?php
include ('src/config/konek_test.php');
?>

<p> </p>
<p> </p>
<?php include_once('footer.php');?>



</body>
</html>