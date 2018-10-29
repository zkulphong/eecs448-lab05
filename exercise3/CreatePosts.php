<?php

$name = $_POST["username"];
$post = $_POST["post"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "z477k780", "aeshie4U", "z477k780");

if ($mysqli->connect_errorno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

if(trim($name) == ""){
  echo "Username must not be empty";
}

elseif(trim($post) == ""){
  echo "Post must not be empty";
}

else{


  $check = "SELECT user_id FROM users WHERE user_id = '$name';";

  $exists = $mysqli->query($check);

  $size = $exists->num_rows;

  if($size != 1){
    echo "Username not found";
  }

  else{
    $insert = "INSERT INTO posts (content, author_id) VALUES ('$post', '$name');";

    $result = $mysqli->query($insert);
    echo "Post successfully saved";
  }


}


$mysqli->close();



?>
