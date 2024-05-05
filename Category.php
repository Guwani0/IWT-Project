<!DOCTYPE html>
<html>
<head>
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
    .live{
        font-family:'Mono';
        font-size: 17px;
        color: white;
    }

    .line{
        border-color: rgba(255, 179, 0, 0.262);
    }

    .CAT{
        font-family:'Future';
        color: rgb(240, 220, 0);
        text-shadow:5px 5px 10px black;
    }
    .BEST{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:35px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
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
        font-size:35px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
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
        font-size:35px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
        margin-right:20px;
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
        font-size:35px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
        margin-left: 100px;
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
        font-size:35px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
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
        font-size:35px; 
        font-family:"Anton";
        border-color:rgba(255, 179, 0, 0.596);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
        margin-right:20px;
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
    background-image: url('../IWT-Project/images/back.png');
    background-color:black;
    background-size:cover; 
    background-position:center;
    background-repeat:no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    overflow-y: auto;

  
}

.float{
    position: relative; 
    z-index: 1; 
    padding: 20px; 
}
</style>
</head>

<body>
 <?php include 'Header.php'?>
 <div class="float">
    <p class="live"><marquee><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></marquee></p>
    <hr class="line">
    <center><h1 class="CAT">SELECT CATEGORY</h1></center>
    <br> <br> <br>
    <button class="BEST">
    BEST NEW ARTIST
    </button>

    <button class="YEAR">
        ARTIST OF THE YEAR
    </button>

    <button class="POP">
        MOST POPULAR ARTIST
    </button>
    <br><br><br>
    <button class="SONG">
        FAVOURITE SONG
    </button>
    <button class="GROUP">
        GROUP OF THE YEAR
    </button>
    <button class="ALBUM">
        FAVOURITE ALBUM
    </button>

    </div>
    </body>
    </html>
    
