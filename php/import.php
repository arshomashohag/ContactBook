<?php
include_once('db_function.php');

$email = $_REQUEST['q'];

$result = getAllContacts($email);


 

   
  $filename = "website_data_" . date('Ymd') . ".csv";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: text/csv");

  $out = fopen("php://output", 'w');

  $flag = false;
  while($row=mysqli_fetch_assoc($result)) {

    if(!$flag) {
      fputcsv($out, array_keys($row), ',', '"');
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    fputcsv($out, array_values($row), ',', '"');
  }

  fclose($out);

  echo "Done Exporting!!";

?>