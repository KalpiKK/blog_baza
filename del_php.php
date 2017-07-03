<?php
$connection=mysqli_connect("localhost","bloguser","","blog");

$id = $_POST['id'];

$ins = mysqli_query($connection, "DELETE FROM posts where id = $id");