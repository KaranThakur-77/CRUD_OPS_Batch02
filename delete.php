<?php
require("config.php");
$id=$_GET["id"];
$sql="DELETE FROM movie WHERE id='$id' ";
$result=$conn->query($sql);
if ($result==TRUE) {
    header("location:display.php");
    # code...
}

?>