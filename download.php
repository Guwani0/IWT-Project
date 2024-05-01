<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/download.css">
        <title>Mobile version download | IMA</title>
        <style>body {
    background-image: url('../IWT-Project/images/back.png');
    background-color:black;
    background-size:cover; 
    background-position:center;
    background-repeat:no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    overflow-y: auto;
}
</style>
    </head>
    <body>
    <?php include 'header.php'; ?>
        <div class="containerA">
            <div class="left">
                <div class="dpara1">
                <span>IMA <br>Mobile App</span>
                <div>
                <img src="images/logo.png" alt="logo" class="rotate">
                </div>
                </div>
        <div class="box">
            <form action="download.php">
                <p class="dpara2">Click on any to download</p><br>
                <div class="pic">
                <a href="https://appstoreconnect.apple.com/login"><img src="images/apple.png" alt="App store"></a>
                <a href="https://play.google.com/store/account/rewards?pli=1"><img src="images/playstore.png" alt="Google store"></a>
                <a href="https://apkpure.com/"><img src="images/apk.png" alt="download apk"></a>
        </div>
            </form>
                </div>
            </div>
        <div class="right">
        <div class="qr">
            <img src="images/phone.png" alt="QR">
        </div>
        </div>
        </div>
    </body>