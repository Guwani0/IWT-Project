<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Category</title>
</head>
<body>
    <h2>Delete Category</h2>
    <form action="deletecategoryCon.php" method="post" class="categorydelete">
        <label for="categoryID">Category ID:</label><br>
        <input type="text" class="categoryID" name="categoryID" placeholder="Enter Category ID" required><br><br> 
        <input type="submit" value="Delete Category">
    </form>
</body>
</html>