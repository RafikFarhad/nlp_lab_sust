<?php
require_once("dbcontroller.php");
$db_handle = new DBController();


  $result = mysql_query("SELECT count(*) FROM user_details WHERE email_id='" . $_POST["email"] . "'");
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'> E-mail found.</span>";
  }else{
      echo "<span class='status-available'> E-mail not found</span>";
  }

?>