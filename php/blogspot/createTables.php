<?php
  include "connectDatabase.php";

  // creating table users
  $sql = "
    CREATE TABLE users(
    user_id INT,first_name varchar(255),last_name varchar(255),
    email varchar(255),bio TEXT,mobile varchar(15),date_of_birth DATE)";
  createTable($conn,$sql);

  // creating table tags
  $sql = "
    CREATE TABLE tags(
    tag_id INT,tag_name varchar(255))";
  createTable($conn,$sql);

  // creating table posts
  $sql = "
    CREATE TABLE posts(
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    post_title varchar(255) NOT NULL,
    post_content TEXT NOT NULL,
    author_id INT NOT NULL,
    date_posted Date NOT NULL
    )";
  createTable($conn,$sql);

  // closing the connection
  mysqli_close($conn);

  function createTable($conn,$sql){
    if (mysqli_query($conn, $sql))
    echo "Table created successfully";
    else
    echo "Error creating table: " . mysqli_error($conn);
  }
?>
