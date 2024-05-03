<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Success Page</title>
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

    .box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 800px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
    text-align: center;
}


h1 {
    margin-bottom: 20px;
}

.button-box {
    margin-top: 30px;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    margin: 0 10px;
    font-size: 16px;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #0056b3;
}
    </style>
</head>
<body>
    
    <div class="box">
        <h1>Successfully Submitted, Voting Complete</h1>
        <p>Thank you for your vote!</p>
        <div class="button-box">
            <a href="https://example.com/mobile-app-download" class="button"><i class="fas fa-cloud-download-alt"></i> Download Mobile App</a>
            <a href="https://example.com/home" class="button"><i class="fas fa-home"></i> Go to Homepage</a>
        </div>
    </div>
</body>
</html>