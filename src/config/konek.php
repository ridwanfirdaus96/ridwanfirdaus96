<html>
<body>
<?php
error_reporting(E_ALL);
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename ="rabbit_db";

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