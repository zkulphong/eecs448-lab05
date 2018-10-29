<?php

$name = $_POST["username"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "z477k780", "aeshie4U", "z477k780");


if ($mysqli->connect_errorno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

if(trim($name) == ""){
  echo "Username must not be empty";
}

else{

  $insert = "INSERT INTO users (user_id) VALUES ('$name');";

  $result = $mysqli->query($insert);

  if($result === TRUE){
    echo "User successfully added";
  }
  else{
    echo "Error Message: " . $mysqli->error;
  }


}


$mysqli->close();



?>
