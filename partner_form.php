<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Hazipenztar</title>
</head>

<body>

<!--
<php

//Require DB details
include 'db_login.php';

//Connect database
$conn = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

if(mysqli_connect_error()) {
  die('connect_error(' . mysqli_connect_errno().')'. mysqli_connect_error());
} else {
  $sql = "SELECT * from partner_tipusa";
  $query = mysql_query($sql);
  while ($results[] = mysql_fetch_object($query));
  array_pop ($results);
  print_r_html($results);

}
?>
-->

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
