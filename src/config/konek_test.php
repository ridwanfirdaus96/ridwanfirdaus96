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

  $query_select = "SELECT * FROM `form` WHERE 1"; 
$result = mysqli_query($conn, $query_select);

if (mysqli_num_rows($result) > 0) {
  echo "
  <table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Masukan</th>
          </tr>
        </thead>";

while ($row  = mysqli_fetch_assoc($result)){
  echo "
        <tbody>
          <tr>
            <td>".$row["id"]."</td>
            <td>".$row["nama"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["alamat"]."</td>
            <td><a href='view.php'>".$row["masukan"]."</td>
          </tr>
        </tbody>
      ";
}
echo "</table>";
}
else {
  echo "";
}

mysqli_close($conn);
 ?>
 </body>
 </html>