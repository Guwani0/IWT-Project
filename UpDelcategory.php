<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/stylesjason.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    
<title></title>
<style>
    @font-face{
        font-family:Mono;
        src: url(../IWT-Project/Fonts/Mono.ttf);
    }
    @font-face{
        font-family:Future;
        src: url(../IWT-Project/Fonts/future.ttf);
    }
    @font-face{
        font-family:Anton;
        src: url(../IWT-Project/Fonts/Anton.ttf);
    }
    .loop{
        display:flex;
        justify-content:flex-start;
        background: black;
        overflow:hidden;
    }

    .live{
        font-family:'Mono';
        font-size: 17px;
        text-transform:uppercase;
        color: transparent;
        -webkit-text-stroke-width: 0.1px;
        -webkit-text-stroke-color: white;
        -text-stroke-color: white;
        white-space:nowrap;
        padding: 0 6rem;
        animation: move-rtl 12s linear infinite;
    }


    @keyframes move-rtl{
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }

    .CAT{
        font-family:'Future';
        color: rgb(240, 220, 0);
        text-shadow:5px 5px 10px black;
    }
    .BEST{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:20px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:150px;
        width:300px;
        border-radius:20px;
        cursor:pointer;
        margin-left:100px;
        margin-right:30px;
        transition:background-color 0.15s, color 0.15s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition-duration: 0.3s;
        -webkit-transition-property: box-shadow, transform;

    }

    .BEST:hover, .BEST:active, .BEST:focus{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform:scale(1.1);
        background-color:rgb(240, 220, 0);
        color:rgba(255, 177, 20, 0.91);
    }


    

    .YEAR{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:20px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:150px;
        width:300px;
        border-radius:20px;
        cursor:pointer;
        margin-left:100px;
        margin-right:30px;
        transition:background-color 0.15s, color 0.15s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition-duration: 0.3s;
        -webkit-transition-property: box-shadow, transform;

    }

    .YEAR:hover, .YEAR:active, .YEAR:focus{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform:scale(1.1);
        background-color:rgb(240, 220, 0);
        color:rgba(255, 177, 20, 0.91);
    }


    .POP{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:20px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:150px;
        width:300px;
        border-radius:20px;
        cursor:pointer;
        margin-left:100px;
        margin-right:30px;
        transition:background-color 0.15s, color 0.15s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition-duration: 0.3s;
        -webkit-transition-property: box-shadow, transform;

        
        
    }

   .POP:hover, .POP:active, .POP:focus{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform:scale(1.1);
        background-color:rgb(240, 220, 0);
        color:rgba(255, 177, 20, 0.91);
    }


    .SONG{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:20px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:150px;
        width:300px;
        border-radius:20px;
        cursor:pointer;
        margin-left:100px;
        margin-right:30px;
        transition:background-color 0.15s, color 0.15s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition-duration: 0.3s;
        -webkit-transition-property: box-shadow, transform;

    }

   .SONG:hover, .SONG:active, .SONG:focus{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform:scale(1.1);
        background-color:rgb(240, 220, 0);
        color:rgba(255, 177, 20, 0.91);
    }


    .GROUP{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:20px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:150px;
        width:300px;
        border-radius:20px;
        cursor:pointer;
        margin-left:100px;
        margin-right:30px;
        transition:background-color 0.15s, color 0.15s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition-duration: 0.3s;
        -webkit-transition-property: box-shadow, transform;

    }

   .GROUP:hover, .GROUP:active, .GROUP:focus{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform:scale(1.1);
        background-color:rgb(240, 220, 0);
        color:rgba(255, 177, 20, 0.91);
    }

    .ALBUM{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:20px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:150px;
        width:300px;
        border-radius:20px;
        cursor:pointer;
        margin-left:100px;
        margin-right:30px;
        transition:background-color 0.15s, color 0.15s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition-duration: 0.3s;
        -webkit-transition-property: box-shadow, transform;

    }

    .ALBUM:hover, .ALBUM:active, .ALBUM:focus{
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        -webkit-transform: scale(1.1);
        transform:scale(1.1);
        background-color:rgb(240, 220, 0);
        color:rgba(255, 177, 20, 0.91);
    }


    body {
    background-image: url("images/back.png");
    background-color:black;
    background-size:cover; 
    background-position:center;
    background-repeat:no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    overflow-y:auto;
    background-color:#454545;
    overflow-x: auto;
    z-index: -1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh; 
}

.float{
    position:relative; 
    z-index:1; 
    padding:20px; 
}
</style>

</head>

<body>
<img src="images/logo.png" width="100px" style="margin-top:20px; margin-left:50px;">

<header class="header">

        <nav class="navbar">
        <a href="postlogin1.php">  Home </a> 
            <a href="Category.php"> IMA 2024 </a> 
            <a href="archives.php"> Archives </a> 
            <a href="gallery.php"> Gallery </a> 
            <a href="ima_story.php"> The IMA Story </a> 
            <a href="download.php"> Download The App </a> 
            <a href="contactus.php"> Contact Us </a> 
        </nav> 
</header>
 <div class="float">
 <div class="loop">
    <p class="live"><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></p>
    <p class="live"><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></p>
    <p class="live"><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></p>
 

</div>
<br>
    <center><h1 class="CAT">UPDATE VOTE</h1></center>
    <center><h4 class="sel">Select category to update.</h1></center>
    <br> <br> <br>
    <a href="BestupdateForm.php"><button class="BEST">BEST NEW ARTIST</button></a>

    <a href="YearupdateForm.php"><button class="YEAR">
        ARTIST OF THE YEAR
    </button></a>

    <a href="PopupdateForm.php"><button class="POP">
        MOST POPULAR ARTIST
    </button></a>
    <br><br><br>
    <a href="SongupdateForm.php"><button class="SONG">
        FAVOURITE SONG
    </button></a>
    <a href="GroupupdateForm.php"><button class="GROUP">
        GROUP OF THE YEAR
    </button></a>
    <a href="AlbumupdateForm.php"><button class="ALBUM">
        FAVOURITE ALBUM
    </button></a>

    <br><br><br>
    <div><br></div>
    <div><br></div>
    <div><br></div>
    <div><br></div>
    <div><br></div>
    <div><br></div>

    <center><h1 class="CAT">DELETE VOTE</h1></center>
    <center><h4 class="sel">Select category to update.</h1></center>
    <br> <br> <br>
    <a href="BestdeleteForm.php"><button class="BEST">BEST NEW ARTIST</button></a>

    <a href="YeardeleteForm.php"><button class="YEAR">
        ARTIST OF THE YEAR
    </button></a>

    <a href="PopdeleteForm.php"><button class="POP">
        MOST POPULAR ARTIST
    </button></a>
    <br><br><br>
    <a href="SongdeleteForm.php"><button class="SONG">
        FAVOURITE SONG
    </button></a>
    <a href="GroupdeleteForm.php"><button class="GROUP">
        GROUP OF THE YEAR
    </button></a>
    <a href="AlbumdeleteForm.php"><button class="ALBUM">
        FAVOURITE ALBUM
    </button></a>

    </div>
    <footer>
    <br><br><br><br><br><br><br><br><br><br>   
    <div class="footerContainer">
        <div class="socialIcons">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.google.com/"><i class="fa-brands fa-google-plus"></i></a>
            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footerNav">
        <ul><li><a href="postlogin1.php">Home</a></li>
                <li><a href="download.php"> Download The App</a></li>
                <li><a href="ima_story.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="FAQ.php"> FAQ </a></li>
            </ul>
        </div>
        
    </div>
    <div class="footerBottom">
        <p>&copy; 2024 IMA Media Networks, a division of IMA Global Inc. All Rights Reserved.</p>
    </div>
</footer>
    </body>
    </html>
    
