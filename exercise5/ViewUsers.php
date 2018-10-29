<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "z477k780", "aeshie4U", "z477k780");

$getUsers = "SELECT user_id FROM users;";

$users = $mysqli->query($getUsers);

if($users->num_rows > 0){
  echo "<table><tr><th>User</th></tr>";

  while($row = $users->fetch_assoc()){
    echo "<tr><td>".$row["user_id"]."</td></tr><br>";

  }
  echo "</table>";
}

else {
  echo "0 users";
}


$mysqli->close();



?>
