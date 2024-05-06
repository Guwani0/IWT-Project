<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Nominee</title>
</head>
<body>
    <h2>Add Nominee</h2>
    <form action="addnomineeCon.php" method="post" class="nomineeadd">
        <label for="nomName">Nominee Name:</label><br>
        <input type="text" class="nomName" name="nomName" placeholder="Enter new nominee name" required><br>
        <label for="nomCat">Nominee category:</label><br>
        <input type="text" class="nomCat" name="nomCat" placeholder="Enter new nominee category" required> 
        <br><br> 
        <input type="submit" value="Add Nominee">
    </form>
</body>
</html>