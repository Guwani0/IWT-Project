<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
    .CAT{
        font-family:"Amasis MT Pro Black";
    }
    .BEST{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:25px; 
        font-family:"Amasis MT Pro Black";
        border-color:rgb(28, 91, 207);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
        margin-left:100px;
        margin-right:30px;
        transition:backgrounf-color 0.15s, color 0.15s;

    }

    .BEST:hover{
        background-color:rgb(240, 220, 0);
        color:rgb(240, 220, 0);
    }


    .BEST:active{
        opacity:0.7;
    }

    .YEAR{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:25px; 
        font-family:"Amasis MT Pro Black";
        border-color:rgb(28, 91, 207);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
        margin-right:30px;
        transition:backgrounf-color 0.15s, color 0.15s;
    }

    .YEAR:hover{
        background-color:rgb(240, 220, 0);
        color:rgb(240, 220, 0);
    }


    .YEAR:active{
        opacity:0.7;
    }

    .POP{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:25px; 
        font-family:"Amasis MT Pro Black";
        border-color:rgb(28, 91, 207);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
        margin-right:20px;
        transition:backgrounf-color 0.15s, color 0.15s;
        
        
    }

    .POP:hover{
        background-color:rgb(240, 220, 0);
        color:rgb(240, 220, 0);
    }


    .POP:active{
        opacity:0.7;
    }

    .SONG{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:25px; 
        font-family:"Amasis MT Pro Black";
        border-color:rgb(28, 91, 207);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
        margin-left: 100px;
        margin-right:30px;
        transition:backgrounf-color 0.15s, color 0.15s;
    }

    .SONG:hover{
        background-color:rgb(240, 220, 0);
        color:rgb(240, 220, 0);
    }


    .SONG:active{
        opacity:0.7;
    }

    .GROUP{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:25px; 
        font-family:"Amasis MT Pro Black";
        border-color:rgb(28, 91, 207);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
        margin-right:30px;
        transition:backgrounf-color 0.15s, color 0.15s;
    }

    .GROUP:hover{
        background-color:rgb(240, 220, 0);
        color:rgb(240, 220, 0);
    }


    .GROUP:active{
        opacity:0.7;
    }

    .ALBUM{
        background:url('../IWT-Project/images/Button.jpg');
        background-size:cover;
        font-size:25px; 
        font-family:"Amasis MT Pro Black";
        border-color:rgb(28, 91, 207);
        border-style:solid;
        border-width:1px;
        color:white;
        height:250px;
        width:400px;
        border-radius:20px;
        cursor:pointer;
        margin-right:20px;
        transition:backgrounf-color 0.15s, color 0.15s;
    }

    .ALBUM:hover{
        background-color:rgb(240, 220, 0);
        color:rgb(240, 220, 0);
    }


    .ALBUM:active{
        opacity:0.7;
    }
</style>
</head>

<body>
 <?php include 'Header.php'?>
 <div>
    <p><marquee>Pick your favourite now! Tune in LIVE Sunday, November 16th at 987 C PTV to see who wins!</marquee></p>
    <center><h1 class="CAT"><font face="Times New Roman">Select Category</font></h1></center>
    <br> <br> <br>
    <a href=""><button class="BEST">
    BEST NEW ARTIST
    </button></a>

    <button class="YEAR">
        ARTIST OF THE YEAR
    </button>

    <button class="POP">
        <b>MOST POPULAR ARTIST</b>
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
    
