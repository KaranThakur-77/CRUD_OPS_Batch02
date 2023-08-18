<?php
require("config.php");
if (isset($_GET['submit_button'])) {
    $id = intval($_GET['id']);
    $movie_name = $_GET['movie_name'];
    $rating = $_GET['rate'];
    $summary = $_GET['desc'];
    $sql = "UPDATE movie SET title = ?, rating = ?, summary = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssi", $movie_name, $rating, $summary, $id);
        $result = $stmt->execute();

        if ($result) {
            // echo "Record updated successfully";
            header("Location:index.php");
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>
