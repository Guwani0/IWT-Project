<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMA News - Award Show News</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

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
     
}
@font-face{
    font-family:Future;
    src: url(../IWT-Project/fonts/future.ttf);
}
.full{
    font-family: Future;
}


h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
    color:white;
    text-align: center;
    margin-top:30px;
}

main {
    max-width: 900px;
    margin: 20px auto;
    padding: 0 20px;
}

section {
    margin-bottom: 40px;
}

h2 {
    font-size: 2em;
    margin-bottom: 20px;
    color: yellow;
    
}

.artist, .announcer {
    background-color: transparent;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    text-align: center;
   
}

.artist img, .announcer img {
    width: 200px;
    border-radius: 20%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: white;
}

p {
    font-size: 1em;
    color: white;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}
    </style>
</head>
<body>
    <?php include 'Header.php'?>
    <div class="full">
    
     <h1>IMA News</h1>
     <br><br><br><br><br>
    
    <main>
        <section id="performers">
            <h2>Performing Artists</h2>
            <br><br><br><br><br>
            <div class="artist">
                <h3>First Performer of the Night</h3>
                <br><br>
                <img src="../IWT-Project/images/artist1.jpg" alt="Artist 1">
                <h3>Taylor Swift</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis feugiat ipsum.</p>
            </div>
            <br><br><br><br><br>
            <div class="artist">
            <h3>Second Performer of the Night</h3>
            <br><br>
                <img src="../IWT-Project/images/artist2.jpeg" alt="Artist 2">
                <h3>Harry Styles</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis feugiat ipsum.</p>
            </div>
            <!-- Add more artists here -->
        </section>
        <br><br><br><br><br><br><br><br><br><br>
        <section id="announcers">
            <h2>Hosts of the Night</h2>
            <br><br><br><br><br>
            <div class="announcer">
            <h3>Fist Host of the Night</h3>
            <br><br>
                <img src="../IWT-Project/images/host1.jpeg" alt="Announcer 1">
                <h3>Kevin Hart</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis feugiat ipsum.</p>
            </div>
            <br><br><br><br><br>
            <div class="announcer">
            <h3>Second Host of the Night</h3>
            <br><br>
                <img src="../IWT-Project/images/host2.jpeg" alt="Announcer 2">
                <h3>Dwayne 'The Rock' Johnson</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis feugiat ipsum.</p>
            </div>
            <!-- Add more announcers here -->
        </section>
    </main>
    <footer>
        <p>&copy; 2024 IMA News. All rights reserved.</p>
    </footer>
</div>
</body>
</html>