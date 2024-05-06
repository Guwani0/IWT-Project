<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/stylesjason.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
<title></title>
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
    margin-top:-408px;
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
                <a href="#">  Home </a> 
                <a href="#"> IMA 2024 </a> 
                <a href="#"> Archives </a> 
                <a href="#"> Gallery </a> 
                <a href="#"> The IMA Story </a> 
                <a href="#"> Download The App </a> 
                <a href="#"> Contact Us </a> 
            </nav> 
    </header>
 
 <div class="float">
 <div class="loop">
    <p class="live"><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></p>
    <p class="live"><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></p>
    <p class="live"><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></p>
 

</div>

    <br>
    <center><h1 class="best">ARTIST OF THE YEAR</h1></center>
    <br>
 
    <center><video controls src="../IWT-Project/Videos/YEAR.mp4" type="video/mp4" width="80%%" height="650px">
    </video></center>
    <br>
    <br>
    <br>

    <center><h1 class="fav">VOTE YOUR FAVOURITE SUPERSTAR</h1></center>
    <center><a href="form-year.php"><button class="Vote">VOTE</button></a></center>
    <br><br><br><br><br>
    

    <div class="box">
    <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/TAYLOR.jpg">

                    
                </div>
            </div>
        </div>
        </div>
        <br><br>
        <div class="name">TAYLOR SWIFT</div>
        <p class="about"> Taylor Swift, a multi-talented artist who has become a global icon in the music industry. Rising to fame as a country-pop sensation with hits like "Love Story" and "You Belong with Me," Swift has continually reinvented herself, transitioning seamlessly between genres and captivating audiences with her heartfelt songwriting and emotive performances. Known for her autobiographical lyrics, Swift has a knack for turning personal experiences into universal anthems that resonate with fans of all ages. With chart-topping albums like "Fearless," "1989," and "Reputation," she has solidified her status as one of the best-selling music artists of all time. Continues to push artistic boundaries with her latest releases, showcasing her versatility as a singer, songwriter, and performer.</p>


        <div class="box">
        <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/HARRY.png">
                
                    
                </div>
            </div>
        </div>
        </div>
        <br><br>
        <div class="name">HARRY STYLES</div>
        <p class="about"> Harry Styles, a multifaceted artist who rose to fame as a member of the chart-topping boy band One Direction. Transitioning seamlessly from pop heartthrob to a solo artist with a distinct musical identity, Styles has captivated audiences with his charismatic persona and eclectic sound. Known for his unique fashion sense and boundary-pushing creativity, he has become an icon of individuality and self-expression. With hits like "Sign of the Times" and "Watermelon Sugar," Styles showcases his versatility as a singer-songwriter, blending elements of rock, pop, and folk to create compelling sonic landscapes. Continues to push artistic boundaries and defy expectations, earning acclaim for his authenticity and innovation in both music and fashion.</p>

        <div class="box">
        <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/LANA.png">
                
                    
                </div>
            </div>
        </div>
        </div>
        <br><br>
        <div class="name">LANA DEL REY</div>
        <p class="about"> Lana Del Rey, an enigmatic and visionary artist renowned for her captivating music and cinematic style. Emerging onto the music scene with her breakthrough single "Video Games," Del Rey's haunting vocals and dreamy, retro-inspired sound quickly garnered widespread acclaim. With albums like "Born to Die" and "Ultraviolence," she has established herself as a provocative and introspective songwriter, exploring themes of love, lust, and melancholy with poetic lyricism. Del Rey's signature blend of vintage glamour and modern melancholia has earned her a dedicated fanbase and critical praise. Continues to push artistic boundaries with her evocative storytelling and atmospheric soundscapes, cementing her status as an influential figure in contemporary music.</p>


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
            <ul><li><a href="index.php">Home</a></li>
                <li><a href="">Download The App</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">FAQ</a></li>
            </ul>
        </div>
        
    </div>
    <div class="footerBottom">
        <p>&copy; 2024 IMA Media Networks, a division of IMA Global Inc. All Rights Reserved.</p>
    </div>
</footer>
    </body>
    </html>
    
