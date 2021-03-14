<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message '];

  $mailTo = "ysabate@mun.ca";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name.".\n\n".$message; 


  mail($mailTo, $txt, $headers );
  header("Location: index.html?mailsent");

}
    




