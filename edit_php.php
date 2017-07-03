<?php
$connection=mysqli_connect("localhost","bloguser","","blog");
$id = $_POST['id'];
$title = $_POST['title'];
$date = $_POST['date'];
$image = $_POST['image'];


$ins = mysqli_query($connection, "UPDATE posts SET title = '$title', date = '$date', image = '$image' WHERE id = '$id' ");
