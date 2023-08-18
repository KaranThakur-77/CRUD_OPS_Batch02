<?php 
require("config.php");
if (isset($_GET["submit_button"])) {
    # code...
    $title=$_GET['movie_name'];
    $rating=$_GET['rate'];
    $summary=$_GET['desc'];
    $sql="INSERT INTO movie (id,title,rating,summary) VALUES (null,'$title','$rating','$summary')";
    $result=$conn->query($sql);
    if ($result===TRUE) {
        // echo "Data saved successfully";
        header("Location:index.php");
        # code...
    }
    else {
        echo http_response_code(http_request);
    }
}


?>