<?php

$members = [

["images/Paolo.png","Lead vocals, acoustic guitar","Paolo Benjamin","Member","Since 2015"],
["images/Miguel.png","Lead vocals, acoustic guitar","Miguel Benjamin","Member","Since 2015"],
["images/Jam.png","Drummer","Jam Villanueva","Member","Since 2017-2026"],
["images/Patricia.png","Keyboard","Patricia Lasaten","Member","Since 2017"],
["images/Poch.png","Electric/lead guitar, backing vocals","Poch Barretto","Member","Since 2017"],
["images/Agnes.png","Bass guitar","Agnes Reoma","Member","Since 2017"],
["images/Andrew.png","Percussion, backing vocals","Andrew de Pano","Member","Since 2017"],
["images/Toni.png","Percussion, backing and occasional lead vocals","Toni Muñoz","Member","Since 2017"],
["images/Keifer.png","Violin, backing vocals","Keifer Cabugao","Member","Since 2017"]

];

?>
<!DOCTYPE html>
<html>

<head>

<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">

<title>Members</title>

<style>

body{
    background-image:url("Ben&Ben BG.svg");
    background-size:cover;
    margin:0;
}

.nav{
    background-color:rgba(152,147,21,0.819);
    width:1000px;
    margin:auto;
    margin-top:30px;
    border-radius:90px;
    text-align:center;
    box-shadow:0px 8px 18px rgba(0,0,0,0.5);
}

.nav a{
    display:inline-block;
    text-decoration:none;
    color:black;
    width:140px;
    padding:5px;
    margin:5px;
    font-weight:bold;
    font-family:"Libre Baskerville", serif;
}

.members{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:50px;
    margin-top:50px;
}

.card{
    width:180px;
    text-align:center;
}

.card img{
    width:180px;
    height:235px;
    object-fit:cover;
    box-shadow:0 10px 20px rgba(0,0,0,.25);
}

</style>

</head>

<body>

<div class="nav">

<a href="index.html">Home</a>
<a href="about.html">About</a>
<a href="members.php">Members</a>
<a href="albums.html">Albums</a>
<a href="achievements.html">Achievements</a>
<a href="socials.html">Socials</a>

</div>

<div class="members">

<?php foreach($members as $m){ ?>

<div class="card">

<img src="<?= $m[0] ?>">

<p><?= $m[1] ?></p>
<p><?= $m[2] ?></p>
<p><?= $m[3] ?></p>
<p><?= $m[4] ?></p>

</div>

<?php } ?>

</div>

</body>

</html>