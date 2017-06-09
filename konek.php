<html>
<body>
<?php
error_reporting(E_ALL);
  $servername = "	server119.idhostinger.com";
  $username = "u209524734_root";
  $password = mrf159357159";
  $databasename ="u209524734_db";

  //bikin koneksi
  $conn = mysqli_connect($servername, $username , $password, $databasename);
  

  //cek koneksi
  if (!$conn) {
      die("Connection Failed : ". mysqli_connect_error());
  }

 echo "Connected Successfully";

mysqli_close($conn);
 ?>
 </body>
 </html>