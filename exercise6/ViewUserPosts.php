<?php
$username = $_POST["data"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "z477k780", "aeshie4U", "z477k780");

$getPosts = "SELECT * FROM posts WHERE author_id='$username';";

$posts = $mysqli->query($getPosts);

if($posts->num_rows > 0){
  echo "<table><tr><th>Posts from $username</th></tr>";

  while($row = $posts->fetch_assoc()){
    echo "<tr><td>".$row["content"]."</td></tr><br>";

  }
  echo "</table>";
}

else {
  echo "0 posts";
}


$mysqli->close();



?>
