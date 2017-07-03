<?php
$connection=mysqli_connect("localhost","bloguser","","blog");

$title = $_POST['title'];
$date = $_POST['date'];
$image = $_POST['image'];
$authorImage = $_POST['authorImage'];



$ins = mysqli_query($connection, "INSERT INTO posts (title, date, image, authorImage) VALUES ('$title', '$date', '$image', '$authorImage')");


?>

