<html>
<head> 
</head>
<body>
<?php
error_reporting(0);

if(isset($_POST('submit')){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

     //membuat koneksi
     $conn = mysqli_connect($servername, $username, $password, $databasename)
if(!$conn)
   die("connection failed: " . mysqli_connect_error());
}
echo "connection successfully";
}
$sql_signup = 'INSERT INTO `signup`(`id`, `nama`, `username`, `password`) 
 VALUES  ("'.$id.'", "'.$nama.'", "'.$username.'", "'.$password.'")';

if(mysqli_query($conn, $sql_signup))








</body>
</html>