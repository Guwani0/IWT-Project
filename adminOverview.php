<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Overview</title>
        <style>
            <style>
  
    h1 {
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    input[type="text"] {
        padding: 10px;
        width: 200px;
    }
    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }
    .delete-btn {
        margin-left: 10px;
        padding: 5px 10px;
        background-color: #dc3545;
        color: #fff;
        border: none;
        cursor: pointer;
    }
    .delete-btn:hover {
        background-color: #c82333;
    }
           
        </style>
    </head>

<body>
<?php include 'Header.php' ?>
<?php include 'adminDashboard.php' ?>
<br><br><br>
<div>
<h1>Admin Edit Category Page</h1>
    <div class="form-group">
        <input type="text" id="newCategoryInput" placeholder="Enter new category">
        <button onclick="addCategory()">Add Category</button>
    </div>
    <ul id="categoryList">
        <?php include 'adminOverviewCon.php'; ?>
    </ul>

    <script>
        
        function fetchCategories() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var categories = JSON.parse(this.responseText);
                    displayCategories(categories);
                }
            };
            xhr.open("GET", "backend.php", true);
            xhr.send();
        }

        
        function addCategory() {
            var newCategory = document.getElementById("newCategoryInput").value;
            if (newCategory.trim() !== "") {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var categories = JSON.parse(this.responseText);
                        displayCategories(categories);
                    }
                };
                xhr.open("POST", "backend.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("action=add&category=" + encodeURIComponent(newCategory));
            }
        }

        
        function deleteCategory(event) {
            var categoryToDelete = event.target.parentNode.firstChild.textContent;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var categories = JSON.parse(this.responseText);
                    displayCategories(categories);
                }
            };
            xhr.open("POST", "backend.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("action=delete&category=" + encodeURIComponent(categoryToDelete));
        }

        // Function to display categories on the page
        function displayCategories(categories) {
            var categoryList = document.getElementById("categoryList");
            categoryList.innerHTML = "";
            categories.forEach(function(category) {
                var listItem = document.createElement("li");
                listItem.textContent = category;
                var deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.className = "delete-btn";
                deleteButton.onclick = deleteCategory;
                listItem.appendChild(deleteButton);
                categoryList.appendChild(listItem);
            });
        }

        // Fetch categories when the page loads
        window.onload = fetchCategories;
    </script>

</div>
</body>
</html>