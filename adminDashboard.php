<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Navigation Bar</title>
        <style>
            *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family:Future;
}

@font-face{
    font-family:Future;
    src: url(../IWT-Project/fonts/Unbounded/future.ttf);
}

body{
  background-color: #3c3b41;
}

.wrapper{
  display: flex;
  position: relative;
  position: relative;
 
}

.wrapper .sidebar{
  width: 100%;
  height: 15%;
  background: #242428;
  padding: 30px 0px;

  font-family: Future;
}

.wrapper .sidebar h2{
  color: white;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 5px;
  
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: white;
  display: block;
}

.wrapper .sidebar ul li:hover{
  background-color: yellow;

}
    
.wrapper .sidebar ul li:hover a{
  color: yellow;
}
</style>
</head>

<body>

<div class ="wrapper">
    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li><a href="#">Profile</a></li>
            <li><a href="#"></a>Overview of nominations</li>
            <li><a href="#"></a>Overview of categories</li>
            <li><a href="#"></a>Voting Status</li>
            <li><a href="#"></a>Notification Center</li>
            <li><a href="#"></a>IMA Organization</li>
            <li><a href="#"></a>Settings</li>
        </ul> 
    </div>
</div>

</body>
</html>