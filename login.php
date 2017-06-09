<?php include_once('headrer.php');?>

<p>  </p>
<h2>Daus Shop</h2>

<?php
session_start();
include ('config/konek.php');

if(isset($_GET['id'])){
$id =$_GET['id'];

  $sql_login = SELECT * FROM `login` WHERE 1 ;
  $result_login = mysql_query($sql_login);
  $data_login  =  mysqli_fetch_array($sql_login);  

$user_id = $data['id'];
$username = $data['username'];
$password = $data['password'];

}
else{
	$nama = '';
  $username ='';
  $password ='';
}

?>
<form action="aksi_login.php">
    <div class="container">
        <img src="image/avatar.jpeg" alt="avatar" class="avatar">
    </div>

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember Me
    </div>

    <div class="container" style="background-color: #f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">Password</a></span>
    </div>
</form>    

<div class="chip">
    <img src="image/ridwan.jpg" alt="Contact Person">
    Ridwan Firdaus
  </div>

<?php include_once('footer.php');?>

</body>
</html>