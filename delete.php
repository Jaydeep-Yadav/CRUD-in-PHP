<?php

include 'conn.php';
extract($_GET);
$query = "delete from user where id='$id' ";
mysqli_query($conn,$query);

header('location:display.php');

?>