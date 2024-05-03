<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/contactusstyles.css">
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
        <h1><p class="p1">How can we Help?</p></h1>
        <div class="containerB">
            <div class="left">
                <div class="frame">
                    <p class="p2">If you have concerns or questions don't 
                        hesitate to reach out to us at XX XXX XXX <br>
                        You can also easily fill out contact form below and IMA will
                        get back to you as soon as possible.<br>
                        <b>Thank you</p>
                    </p>
                </div>
            </div>
            <div class="right">
                <div class="sqr">
                <form action="contact us.php" method="post">
                <label for="name">Name</label><br>
                <input type="text" required><br>
                <label for="email">Email</label><br>
                <input type="text" required><br>
                <label for="subject">subject</label><br>
                <input type="text" required><br>
                <label for="message">Message</label><br>
                <textarea id="message" name="message" rows="4"></textarea> <br>
                <input type="submit" value="Sumbit">
            </form>
                </div>
            </div>
        </div>
    </body>