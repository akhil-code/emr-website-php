<?php
  include "connectDatabase.php";

  // deleting table users
  $sql = "DROP TABLE users";
  executeQuery($conn,$sql);

  // deleting table posts
  $sql = "DROP TABLE posts";
  executeQuery($conn,$sql);

  // deleting table tags
  $sql = "DROP TABLE tags";
  executeQuery($conn,$sql);


  function executeQuery($conn,$sql){
    if (mysqli_query($conn, $sql))
      echo "Table deleted successfully";
    else
      echo "Error deleting table: " . mysqli_error($conn);

  }

  // closing the connection
  mysqli_close($conn);

?>
