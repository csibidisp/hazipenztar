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
  $query1 = $conn->query("SELECT * FROM partner_tipusa");
  $query2 = $conn->query("SELECT * FROM megjelenes");

  while ($array1[] = $query1->fetch_object());
  while ($array2[] = $query2->fetch_object());

  array_pop($array1);
  array_pop($array2);
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
          <?php foreach($array1 as $option1) :  ?>
            <option value="<?php echo $option1->PARTNER_TIPUSA_ID; ?>"><?php echo $option1->PARTNER_TIPUSA; ?></option>
          <?php endforeach;?>
        <tr>
          <td>Partner állapota :</td>
          <td>
            <select name="partner_allapota" required/>
            <?php foreach ($array2 as $option2) : ?>
              <option value="<?php echo $option2->MEGJELENES_ID; ?>"><?php echo $option2->MEGJELENES; ?></option>
            <?php endforeach;?>
            </select>
          </td>
        </tr>
          </select>
        </td>
      </tr>
    </table>
  </form>
  <?php
  $query->close();
  $conn->close();
  ?>
</body>
</html>
