<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Hazipenztar</title>
</head>

<body>


<?php
error_reporting(-1);
//Require DB details
//require 'db_login.php';

$dbServer = 'localhost';
$dbUsername = 'root';
$dbPassword = 'e1M9M7ya6';
$dbName = 'hazipenztar';

//Connect database
$conn = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

if(mysqli_connect_error()) {
  die('connect_error(' . mysqli_connect_errno().')'. mysqli_connect_error());
} else {
  $SELECT = "SELECT partner_tipusa FROM partner_tipusa";

  $stmt = $conn->prepare($SELECT);
  $stmt->execute();
  $stmt->store_result();
  $rnum = $stmt->num_rows;

  echo 'Num rows: ' . $stmt->num_rows . "<BR />\n";

  $stmt->close();
  $conn->close();

}
?>


  <form action="partner_insert.php" method="post">
    <table>
      <tr>
        <td>Partner neve :</td>
        <td><input type="text" name="partner_nev" required/></td>
      </tr>

    </table>
  </form>
</body>
</html>
