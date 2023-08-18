<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Movie</title>
</head>
<body>
    <form action="update.php" method="get">
        <!-- Include the id as a hidden field -->
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" name="movie_name" value="<?php echo $_GET['title']; ?>"><br>

        <label for="rating">Rating:</label>
        <input type="number" name="rate" min="1" max="5" value="<?php echo $_GET['rating']; ?>"><br>

        <label for="desc">Description:</label>
        <input type="text" name="desc" value="<?php echo $_GET['summary']; ?>"><br>

        <button type="submit" name="submit_button">Done</button>
    </form>

</body>
</html>
