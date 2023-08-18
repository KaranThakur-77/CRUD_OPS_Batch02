<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="get">
        <label for="name">Name:</label>
        <input type="text" name="movie_name" id=""><br>

        <label for="rating">Rating:</label>
        <input type="number" min="1" max="5" name="rate" id=""><br>

        <label for="desc">Description:</label>
        <input type="text" name="desc" id=""><br>

        <button type="submit" name="submit_button">Done</button>
    </form>
    
</body>
</html>