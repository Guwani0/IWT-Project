<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nominee</title>
</head>
<body>
    <h2>Update Nominee</h2>
    <form action="updatenomineeCon.php" method="post" class="nomineeupdate">
        <label for="nomID">Nominee ID:</label><br>
        <input type="text" class="nomID" name="nomID" placeholder="Enter Nominee ID" required><br>
        <label for="nomName">Nominee Name:</label><br>
        <input type="text" class="nomName" name="nomName" placeholder="Enter updated nominee name" required><br>
        <label for="nomCat">Nominee Category:</label><br>
        <input type="text" class="nomCat" name="nomCat" placeholder="Enter Nominee Category" required>
        <br><br> 
        <input type="submit" value="Update Nominee">
    </form>
</body>
</html>