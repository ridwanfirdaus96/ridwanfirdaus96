<?php 
include ('header.php');
if(isset($_GET['id'])){
$id =$_GET['id'];

$query_select = "SELECT * FROM 'form' where 1";
$result = mysql_query($query_select);
$data  =  mysqli_fetch_array($query_select);  

$id = $data['id'];
$nama = $data['nama'];
$email = $data['email'];
$alamat = $data['alamat'];
$masukan = $data['masukan'];
}
else{
	$nama = '';
  $email ='';
  $alamat ='';
	$masukan = '';
}
?>


<p>  </p>
<h2>Daus Shop</h2>

<p>
  JANGAN ragu untuk pembelian di tempat kami dausshop.com, karena kami memiliki alamat yang jelas dan tidak meragukan dan juga anda dianjurkan datang di tempat kami secara langsung jika ada waktu, karena pasti anda akan lebih puas dan yakin.
</p>




<h2 align="center">Form Masukan</h2>
<p><span class="error">* required field.</span></p>
<form class="col s12" method="post" action="aksi.php">
<div class="row">
        <div class="row">
            <div class="input-field col s6">
                <input name="id" type="text" class="validate" value="<?php echo $_GET['id']; ?>">
                <label for="id">ID</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="nama" type="text" class="validate" value="<?php echo $nama; ?>">
                <label for="nama">Nama</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="email" type="text" class="validate" value="<?php echo $email; ?>">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
               <input name="alamat" type="text" class="validate" value="<?php echo $alamat; ?>">
               <label for="alamat">Alamat</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea name="masukan" class="materialize-textarea" data-length="120" value="<?php echo $masukan; ?>"></textarea>
                <label for="textarea1">Masukan</label>
                <button class="btn waves-effect waves-light" type="submit" name="masukan" value="Lihat">Submit
                <i class="material-icons right">send</i>
                </button> 
            </div>
        </div>
</div>    
</form>
<?php 
echo $nama;
echo "<br>";
echo $email;
echo "<br>";
echo $alamat;
echo "<br>";
echo $masukan;
?>

<div class="chip">
    <img src="image/ridwan.jpg" alt="Contact Person">
    Ridwan Firdaus
  </div>

<?php include_once('footer.php');?>


</body>
</html>