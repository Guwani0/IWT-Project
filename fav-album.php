<!DOCTYPE html>
<html>
<head>
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

    .live{
        font-family:'Mono';
        font-size: 17px;
        color: white;
    }

    .line{
        border-color: rgba(255, 179, 0, 0.262);
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
    margin-left:17px;
    width: 370px;
    height:47px;
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
    margin-right: 70px;
    
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
 <?php include 'Header.php'?>
 <div class="float">
    <p class="live"><marquee><b>Pick your favourite now! Tune in LIVE Sunday, June 15th at 987 C PTV to see who wins!</b></marquee></p>
    <hr class="line">

    <h1 class="best">FAVOURITE ALBUM</h1>
    <br>
 
    <center><video controls src="ALBUM.mp4" type="video/mp4" width="80%%" height="650px">
    </video></center>
    <br>
    <br>
    <br>

    <h1 class="fav">VOTE YOUR FAVOURITE SUPERSTAR</h1>
    <br>
    <br>

    <div class="box">
    <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/MARS.jpeg">

                    <button class="Vote">VOTE</button>
                </div>
            </div>
        </div>
        </div>
        <div class="name">24K MAGIC - BRUNO MARS</div>
        <p class="about"> Sabrina Carpenter,  an actress turned chart-topping singer-songwriter. 
            Transitioned from Disney stardom to a flourishing music career with hits like "Sue Me" and "Skin." 
            Known for her powerful vocals, relatable lyrics, and catchy pop melodies. 
            Continues to captivate audiences with her evolving sound and genuine storytelling. 
            Her newest track, Espresso, has been trending for days!!</p>


        <div class="box">
        <div class="cards">
        <div class = "card">
            <div class="card-info">
                <img class="card-img" src="images/OLIVIA-ALBUM.jpg">
                
                    <button class="Vote">VOTE</button>
                </div>
            </div>
        </div>
        </div>
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
                
                    <button class="Vote">VOTE</button>
                </div>
            </div>
        </div>
        </div>
        <div class="name">RARE - SELENA GOMEZ</div>
        <p class="about"> Sabrina Carpenter,  an actress turned chart-topping singer-songwriter. 
            Transitioned from Disney stardom to a flourishing music career with hits like "Sue Me" and "Skin." 
            Known for her powerful vocals, relatable lyrics, and catchy pop melodies. 
            Continues to captivate audiences with her evolving sound and genuine storytelling. 
            Her newest track, Espresso, has been trending for days!!</p>


    </div>
    </body>
    </html>
    
