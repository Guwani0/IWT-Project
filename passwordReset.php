<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
    
    body {
    background-image: url('../IWT-Project/images/back.png');
    background-color:black;
    background-size:cover; 
    background-position:center;
    background-repeat:no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    overflow-y: auto;
    font-family: Future;
    }

    @font-face{
    font-family:Future;
    src: url(../IWT-Project/fonts/Unbounded/future.ttf);
}

    .container {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background-color: black;
    border-radius: 5px;
    box-shadow: 30px 30px 30px 30px rgba(0, 0, 0, 0.1);

    
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: white;
}



.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: white;
}

input[type="password"] {
    width: 92%;
    padding: 20px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ccc;
    

}

button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    background-color: black;
    font-family:Future;
    color: white;
    border: 2px solid white;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.5s;
}

button[type="submit"]:hover {
    background-color: yellow;
    color:black;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Password Reset</h1>
        <form action="#" method="post" class="reset-form">
            <div class="form-group">
                <label for="current-password">Current Password:</label>
                <input type="password" id="current-password" name="current-password" required>
            </div>
            <div class="form-group">
                <label for="new-password">New Password:</label>
                <input type="password" id="new-password" name="new-password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm New Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-group">
                <button type="submit">Reset Password</button>
            </div>
        </form>
    </div>
</body>
</html>