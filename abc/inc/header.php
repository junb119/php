<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php 
  echo $title; ?> - ABC.com</title>
</head>
<body>
  <h1>Abc.com</h1>
  <nav>
    <a href="index.php">home</a>
    <a href="about.php">about</a>
    <a href="location.php">location</a>
    <a href="login.php">login</a>
    <a href="logout.php">logout</a>
  </nav>
