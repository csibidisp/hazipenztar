<?php

$partner_nev = $_POST['partner_nev'];
$partner_tipusa = $_POST['partner_tipusa'];
$partner_allapota = $_POST['partner_allapota'];

//echo "$partner_nev, $partner_tipusa, $partner_allapota";

if(!empty($partner_nev) || !empty($partner_tipusa) || !empty($partner_allapota)) {

  //connect database
  require "db_login.php";

  $conn = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

  if ($conn->connect_error) {
    die("Coennection failed: " . $conn->connect_error);
  } else {

    $query = "SELECT partner_nev FROM hazipenztar WHERE partner_nev = ?";

    $insert = "INSERT INTO partnerek (partner_nev, partner_tipusa, partner_allapota) VALUES (?,?,?)";

    //prepare statement partner_nev check
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s",$partner_nev);
    $stmt->execute();
    $stmt->bind_result($partner_nev);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if ($rnum==0 ) {
      $stmt->close;

      $stmt = $conn->prepare($insert);
      $stmt->bind_param("sii",$partner_nev, $partner_tipusa, $partner_allapota);
      $stmt->execute();
      echo "New record inserted successfully";
    } else {
        echo "Someone already register using this partner_nev!";
    }
    $stmt->close();
    $conn->close();
  }
} else {
  echo "All field are required!";
  die();
}
?>
