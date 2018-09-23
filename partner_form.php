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
          <?php endforeach;
          $query->close();
          $conn->close(); 
          ?>
          </select>
        </td>

      </tr>

    </table>
  </form>
</body>
</html>
