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

$query_login = "SELECT * FROM `login` WHERE 1"; 
$result_lgn = mysqli_query($conn, $query_login);

 if($query_lgn){
        $row = mysql_num_rows($query_lgn);
         
        // jika $row > 0 atau username dan password ditemukan
        if($row > 0){
            $_SESSION['isLoggedIn']=1;
            $_SESSION['username']=$username;
            header('Location: test.php');
        }else{
            echo "username atau password salah";
        }
    }
?>