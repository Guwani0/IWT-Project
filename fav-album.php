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

    <center><h1 class="best">FAVOURITE ALBUM</h1></center>
    <br>
 
    <center><video controls src="../IWT-Project/Videos/ALBUM.mp4" type="video/mp4" width="80%%" height="650px">
    </video></center>
    <br>
    <br>
    <br>

    <center><h1 class="fav">VOTE YOUR FAVOURITE SUPERSTAR</h1></center>
    <center><a href="form-album.php"><button class="Vote">VOTE</button></a></center>
    <br><br><br><br><br>

    <div class="box">
    <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/MARS.jpeg">

                    
                </div>
            </div>
        </div>
        </div>
        <br><br>
        <div class="name">24K MAGIC - BRUNO MARS</div>
        <p class="about"> Bruno Mars, a versatile entertainer renowned for his exceptional talent in singing, songwriting, and performing. Rising to fame with his debut album "Doo-Wops & Hooligans," Mars quickly became a household name with hit singles like "Just the Way You Are" and "Grenade." His dynamic stage presence and infectious energy have earned him accolades as a top live performer, showcasing his impressive vocal range and captivating audiences worldwide. Mars' music seamlessly blends elements of pop, R&B, funk, and soul, creating a signature sound that transcends genres. With multiple Grammy Awards and chart-topping hits to his name, including collaborations with industry giants like Mark Ronson and Cardi B, Bruno Mars continues to push boundaries and redefine modern pop music. His enduring influence and timeless appeal solidify his status as one of the most influential artists of his generation.</p>


        <div class="box">
        <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/OLIVIA-ALBUM.jpg">
                
                    
                </div>
            </div>
        </div>
        </div>
        <br><br>
        <div class="name">GUTS-OLIVIA RODRIGO</div>
        <p class="about"> Sabrina Carpenter,  an actress turned chart-topping singer-songwriter. 
            Transitioned from Disney stardom to a flourishing music career with hits like "Sue Me" and "Skin." 
            Known for her powerful vocals, relatable lyrics, and catchy pop melodies. 
            Continues to captivate audiences with her evolving sound and genuine storytelling. 
            Her newest track, Espresso, has been trending for days!!</p>

        <div class="box">
        <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/SELENA.jpg">
                
                    
                </div>
            </div>
        </div>
        </div>
        <br><br>
        <div class="name">RARE - SELENA GOMEZ</div>
        <p class="about"> Selena Gomez, a multifaceted artist who rose to prominence as a Disney Channel star before establishing herself as a successful singer, actress, and producer. Transitioning from her early roles in "Wizards of Waverly Place" to a flourishing music career, Gomez has captivated audiences with her heartfelt performances and relatable persona. With hit singles like "Come & Get It" and "Good for You," she has showcased her versatile vocal range and knack for crafting infectious pop melodies. Beyond her music, Gomez has also made waves in the film industry with roles in movies like "Spring Breakers" and "The Fundamentals of Caring," demonstrating her versatility as a performer. Known for her authenticity and resilience, Gomez continues to evolve as an artist, using her platform to advocate for important social causes and connect with fans on a deeper level. With her latest projects garnering widespread acclaim, including her chart-topping album "Rare," Selena Gomez remains a prominent figure in both the entertainment industry and popular culture.






</p>


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
    
