<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>
<body>
    <h2>Update Category</h2>
    <form action="updatecategoryCon.php" method="post" class="categoryupdate">
        <label for="categoryID">Category ID:</label><br>
        <input type="text" class="categoryID" name="categoryID" placeholder="Enter Category ID" required><br>
        <label for="categoryName">Category Name:</label><br>
        <input type="text" class="categoryName" name="categoryName" placeholder="Enter New Category" required><br><br> 
        <input type="submit" value="Update Category">
    </form>
</body>
</html>