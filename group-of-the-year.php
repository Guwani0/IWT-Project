<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="styles/stylesjason.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
<title> Group of the Year </title>
<style>
    @font-face{
        font-family:Future;
        src: url(../IWT-Project/Fonts/future.ttf);
    }

    @font-face{
        font-family:Alice;
        src: url(../IWT-Project/Fonts/Alice.ttf);
    }

    @font-face{
        font-family:Mono;
        src: url(../IWT-Project/Fonts/Mono.ttf);
    }

    @font-face{
        font-family:OX;
        src: url(../IWT-Project/Fonts/Ox.ttf);
    }

    .best{
        font-family:'Future';
        font-size: 50px;
        color: rgb(240, 220, 0);
        text-shadow:5px 5px 10px black;
    }

    .fav{
        font-family:'OX';
        color: rgb(240, 220, 0);
        text-shadow:5px 5px 10px black;
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

.cards{
    display: flex;
    margin-left:40px;
    flex-direction: column;
    padding: 5rem 0;
    
}

.card{
    width: 25rem;
    border: 2px solid var(--black);
    overflow: hidden;
    box-shadow: 15px 15px 6px var(--shadow);
    transition: all o.5 ease;
    
}

.card-img{
    width:25rem;
    height:20rem;
    object-fit: cover;
    vertical-align: middle;
    border-radius:20px;
    
}

.card-info{
    
    justify-content: space-evenly;
    background: var(--white);
}

.name{
    font-family:"Alice";
    color:rgba(255, 177, 20, 0.91);
    font-size: 50px;
    margin-left:500px;
    margin-top:-448px;
    margin-bottom:31px;
}

.about{
    color:white;
    font-size: 20px;
    margin-left:500px;
    margin-bottom:300px;    
}

.Vote{
    display:flex;
    background-color:black;
    border-color:rgba(255, 177, 20, 0.91);
    border-radius:20px;
    margin-top:7px;
    width: 370px;
    height:70px;
    cursor:pointer;
    position: relative; 
    display: inline-block;
    text-transform: uppercase;
    letter-spacing: 4px;
    color: rgba(255, 177, 20, 0.91);
    font-size: 20px; 
    font-weight: bold; 
    transition: .5s;
    overflow: hidden;
    
}

.Vote:hover{
    background-color: rgba(255, 177, 20, 0.91);
    color: black;
    box-shadow: 0 0 5px rgba(255, 177, 20, 0.91),
                0 0 25px rgba(255, 177, 20, 0.91),
                0 0 50px rgba(255, 177, 20, 0.91),
                0 0 200px rgba(255, 177, 20, 0.91),

    -webkit-box-reflect: below 1px linear-gradient(transparent, black);
}

.Detail{
    margin-left:130px;
}

.box{
    background-color: black;
    width: 100%;
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


    <center><h1 class="best">GROUP OF THE YEAR</h1></center>
    <br>
 
    <center><video controls src="../IWT-Project/Videos/GROUP.mp4" type="video/mp4" width="80%%" height="650px">
    </video></center>
    <br>
    <br>
    <br>

    <center><h1 class="fav">VOTE YOUR FAVOURITE SUPERSTAR</h1></center>
    <center><a href="form-group.php"><button class="Vote">VOTE</button></a></center>
    <br><br><br><br><br>

    <div class="box">
    <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/BTS.jpg">

                    
                </div>
            </div>
        </div>
        </div>
        <br><br>
        <div class="name">BTS</div>
        <p class="about"> BTS, a South Korean boy band that has taken the global music scene by storm. Rising from humble beginnings, BTS has become a cultural phenomenon, known for their dynamic performances, captivating music videos, and meaningful lyrics. With a diverse discography spanning various genres including pop, hip-hop, and EDM, BTS has amassed a dedicated fanbase known as the ARMY. Their music often explores themes of self-love, mental health, and societal issues, resonating with listeners worldwide. Beyond their musical endeavors, BTS advocates for social causes and promotes messages of unity and inclusivity. Continues to break records and push boundaries in the music industry, solidifying their status as one of the most influential acts of the modern era.</p>


        <div class="box">
        <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/BP.jpeg">
                
                    
                </div>
            </div>
        </div>
        </div>
        <br><br>
        <div class="name">BLACKPINK</div>
        <p class="about"> BLACKPINK, a South Korean girl group that has become a global sensation. Emerging from YG Entertainment, BLACKPINK has captivated audiences with their fierce performances, stylish visuals, and infectious pop anthems. Known for hits like "DDU-DU DDU-DU" and "Kill This Love," BLACKPINK showcases a unique blend of K-pop, hip-hop, and EDM elements. Their music videos are celebrated for their high production value and trend-setting fashion. With their powerful stage presence and charismatic personalities, BLACKPINK members Jennie, Lisa, Rosé, and Jisoo have amassed a massive following known as the BLINKs. Beyond music, BLACKPINK collaborates with top fashion brands and promotes empowerment and confidence through their music and image. Continues to dominate charts and influence pop culture worldwide, solidifying their status as one of the biggest girl groups in music today.</p>

        <div class="box">
        <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/MAROON5.jpg">
                
                    
                </div>
            </div>
        </div>
        </div>
        <br><br>
        <div class="name">MAROON 5</div>
        <p class="about"> Maroon 5, originally formed as Kara's Flowers in the 1990s, transformed into a globally renowned pop-rock band. Led by frontman Adam Levine, Maroon 5 gained widespread recognition with their debut album "Songs About Jane," featuring hits like "This Love" and "She Will Be Loved." Known for their infectious hooks, polished production, and Levine's distinctive falsetto, Maroon 5 has consistently dominated the charts with catchy pop tunes infused with elements of rock, funk, and R&B. Over the years, they've continued to evolve their sound, exploring new genres and collaborating with various artists. With chart-toppers like "Moves Like Jagger," "Sugar," and "Girls Like You," Maroon 5 remains a staple of contemporary pop music, captivating audiences worldwide with their infectious melodies and dynamic performances.</p>


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
            <ul><ul><li><a href="postlogin1.php">Home</a></li>
                <li><a href="download.php"> Download The App</a></li>
                <li><a href="ima_story.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="FAQ.php"> FAQ </a></li>
            </ul>
            </ul>
        </div>
        
    </div>
    <div class="footerBottom">
        <p>&copy; 2024 IMA Media Networks, a division of IMA Global Inc. All Rights Reserved.</p>
    </div>
</footer>
    </body>
    </html>
    
