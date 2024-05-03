<?php

<include 'configure.php';>

// Retrieve all categories from the database
$sql = "SELECT name FROM categories";
$result = $conn->query($sql);

$categories = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $categories[] = $row["name"];
    }
}

// Add category to the database
if(isset($_POST['action']) && $_POST['action'] == 'add' && isset($_POST['category'])) {
    $category = $_POST['category'];
    $sql = "INSERT INTO categories (name) VALUES ('$category')";
    if ($conn->query($sql) === TRUE) {
        $categories[] = $category;
    }
}

// Delete category from the database
if(isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['category'])) {
    $category = $_POST['category'];
    $sql = "DELETE FROM categories WHERE name='$category'";
    if ($conn->query($sql) === TRUE) {
        $key = array_search($category, $categories);
        if ($key !== false) {
            unset($categories[$key]);
        }
    }
}

$conn->close();

// Output categories as JSON
echo json_encode($categories);

?>