<html>
<body>
<?php

error_reporting(0);


if (isset($_POST['masukan'])) {
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$masukan = $_POST['masukan'];

$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo
  "connection successfully";
}
$sql_tambah = 'INSERT INTO `form` (id, nama, email, alamat, masukan)
VALUES ("'.$id.'", "'.$nama.'", "'.$email.'", "'.$alamat.'", "'.$masukan.'")';

if (mysqli_query($conn, $sql_tambah)){
    //  header ('location:test.php');
    echo "<center> Data berhasil diupdate <br/>
    <br> Untuk melihat hasil  klik <a href= 'test.php'> Disini </a></center>";
}  else {
    echo " <br> Data gagal di update ". $tambah . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

</body>
</html>