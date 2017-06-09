<html>
<head>
<body>
<?php
error_reporting(0);

if(isset($_POST ('submit')) {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect($servername, $username, $password, $databasename)
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
 echo "connection successfully";
}
$sql_login = 'INSERT INTO `login` (id, username, email, password)
VALUES ("'.$id.'", "'.$username.'", "'.$email.'", "'.$password.'")';

if(mysqli_query($conn, $sql_login)){
    //header (location : 'test.php');
    echo "<center> Akhirnya bisa login juga <br/>
    <br> Untuk melihat hasil  klik <a href= 'test.php'> Disini </a></center>";
}  else {
    echo " <br> Data gagal di update ". $login . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>