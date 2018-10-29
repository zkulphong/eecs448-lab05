<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "z477k780", "aeshie4U", "z477k780");


echo "Removed: " . "<br>";
foreach($_POST['remove'] as $post){
  echo $post . "<br>";
  $deletePosts = "DELETE FROM posts WHERE post_id='$post';";

  $posts = $mysqli->query($deletePosts);

}


$mysqli->close();







?>
