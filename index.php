<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px solid black">
        <tr>
            <th>Id</th>
            <th>Movie Name</th>
            <th>Rating</th>
            <th>Summary</th>
            <th>Actions</th>
        </tr>
    <?php
    require("config.php");  
    $sql="SELECT * FROM movie";
    $res=$conn->query($sql);
    if ($res->num_rows>0) {
       while($row=$res->fetch_assoc()){
       ?>
       <tr>
            <td><?php echo $row['id'];?></td>       
            <td><?php echo $row['title'];?></td>       
            <td><?php echo $row['rating'];?></td> 
            <td><?php echo $row['summary'];?></td>   
            <td>
                <a href="update_form.php?id=<?php echo $row['id']?>&title=<?php echo $row['title'];?>&rating=<?php echo $row['rating'];?>&summary=<?php echo $row['summary'];?>">Edit</a>
                <a href="delete.php?id=<?php echo($row['id']);?>">Delete</i></a>
            </td>
       </tr>
   <?php
       
    }
    } else {
        # code...
        echo("There are no data in the database.");
    }
    
    $conn->close();

?>

    </table>
    <h3><a href="add_form.php"> Add New Movie.</a></h3>
    
</body>
</html>