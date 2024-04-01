<?php $music = "music/1.mp3"; ?>
<?php
$time_name = "America/Toronto";
date_default_timezone_set($time_name);
$heure = date("H");
$minutes = date("i");
$time = $heure . " " . "h" . " " . $minutes;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alata&family=Bebas+Neue&family=Domine:wght@400..700&family=Madimi+One&family=Rubik+Glitch+Pop&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>karma-Bento</title>
</head>
<body class="body">
    <div class="all-box">
        <div class="box-1">
            <audio class="audio" src="<?php echo $music; ?>" controls></audio>
           
        </div>
        <div class="box-2"></div>
        <div class="box-3"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-6"></div>
        <div class="box-7"></div>
        <div class="box-8"> <h1 class="time"><?php echo $time; ?></h1></div>
        <div class="box-9"></div>
        <div class="box-10"></div>
        <div class="box-11"></div>
        <div class="box-12"></div>
    </div>
   
    <style>
        .body {
            background: linear-gradient(90deg, lightblue, pink);
        }
        .all-box {
            display: flex;
            padding: 5%;
            margin: 5px;
            position: relative;
            border-radius: 25px;
        }
        .box-1 {
            height: 500px;
            width: 0px;
            background: #1E1F24;
            margin: 5px;
            border-radius: 25px;
            filter: drop-shadow(0 0 0.1px black);
            z-index: -999;
            visibility: hidden;
        }
       
        .box-2 {
            height: 500px;
            width: 1000px;
            background: gray;
            margin: 5px;
            border-radius: 25px;
            filter: drop-shadow(0 0 2px black);
            visibility: hidden;
        }
        .box-3 {
            height: 500px;
            width: 500px;
            background: gray;
            margin: 5px;
            border-radius: 25px;
            filter: drop-shadow(0 0 1px black);
        }
        .box-4 {
            height: 250px;
            width: 700px;
            background: gray;
            margin: 5px;
            position: relative;
            border-radius: 25px;
            filter: drop-shadow(0 0 1px black);
         
        }
        .box-5 {
            height:500px;
            width: 2500px;
            background: gray;
            margin: 5px;
            border-radius: 25px;
            filter: drop-shadow(0 0 1px black);
        }
        .box-6 {
            height: 500px;
            width: 200px;
            background: gray;
            margin: 5px;
            border-radius: 25px;
            filter: drop-shadow(0 0 1px black);
        }
        .box-7 {
            height: 225px;
            width: 2000px;
            background: gray;
            margin: 5px;
     position: relative;
     border-radius: 25px;
     filter: drop-shadow(0 0 1px black);
        }
        .box-8 {
            border-radius: 25px;
            height: 250px;
            width: 5000px;
            background-image: url('img/b.jpg');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            margin: 5px;
            position: relative;
            top: 250px;
            right: 100px;
          z-index: -999;
        }
        .box-9 {
            height: 500px;
            width: 5000px;
            background: gray;
            margin: 5px;
            position: relative;
            right: -00px;
            border-radius: 25px;
            filter: drop-shadow(0 0 1px black);
        }
        .box-10 {
            height: 100px;
            width: 5000px;
            background: gray;
            margin: 5px;
            border-radius: 25px;
            filter: drop-shadow(0 0 1px black);
        }
        .box-11 {
            height:390px;
            width: 2000px;
            background: gray;
            margin: 5px;
            position: relative;
            right: 255px;
            top: 110px;
            border-radius: 25px;
            filter: drop-shadow(0 0 1px black);
        }
        .box-12 {
            height: 500px;
            width: 500px;
            background: gray;
            margin: 5px;
            border-radius: 25px;
            filter: drop-shadow(0 0 1px black);
        }
        .audio {
            rotate: -90deg;
            width: 500px;
        height: 1000px;
            position: relative;
            top: -250px;
            right: 690px;
            border-radius: 25px;
            z-index: +999;
            filter: drop-shadow(0 0 1px black);
            visibility: visible;
            
            
        }
        .time {
            font-family: "Madimi One", sans-serif;
              color: white;
            filter: drop-shadow(0 0 25px black);
            scale: 1.5;
            position: relative;
            right: -110px;
            top: 75px;
            z-index: -998;
           
        }
        .time:hover {
     cursor: grab;
           
        }
    </style>
</body>
</html>
