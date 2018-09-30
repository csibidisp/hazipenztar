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
require 'db_login.php';

//Connect database
$conn = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  $query = $conn->query("SELECT * FROM partner_tipusa");

  while ($array[] = $query->fetch_object());

  array_pop($array);
}
?>
  <form action="partner_insert.php" method="post">
    <table>
      <tr>
        <td>Partner neve :</td>
        <td><input type="text" name="partner_nev" required/></td>
      </tr>
      <tr>
        <td>Partner típusa :</td>
        <td>
          <select name="partner_tipusa" required/>
<!--            <option value="" selected>Válasszon típust</option>-->
          <?php foreach($array as $option) :  ?>
            <option value="<?php echo $option->PARTNER_TIPUSA_ID; ?>"><?php echo $option->PARTNER_TIPUSA; ?></option>
          <?php endforeach;?>
          </select>
        </td>
      </tr>
    </table>
  </form>
  <?php
  $query->close();
  $conn->close();
  if ($conn->ping()) {
    die ("Our connection is ok!\n");
    } else {
      echo "Error: %s\n", $conn->error;
    }
  ?>
</body>
</html>
