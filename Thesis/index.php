
<?php include '../header.php' ?>

<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Unity Thesis</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
	<link rel="stylesheet" href="../css/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Final WebGL 3.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body class="template">
  <?php
			echo $HEADER; 
		?>
    <h1 style=" margin-left: 45px; margin-bottom: -25px; font-family:'Helvetica, sans-serif';""> Platformer Game</h1> <br>
  <p style="margin-left: 45px;">
    The thesis I did for the University of Pireaus concerns the development of videogames using the Unity game engine. This game accompanied my thesis and aims to show my<br>
		ability to, among other things, develop different levels and mechanics, script object behavior and develop a save system with the Unity engine.<br>
		The C# scripts used in the game can be found <a href="https://github.com/gspentzas1991/Unity-Platformer-Game">in my GitHub page</a> <br>
		The thesis accompanying the game was written in greek and <a href="thesis.pdf"> can be found here</a> <br><br> 
	</p>
    <div class="webgl-content"style="/* top: 550px; */margin-top: -100;margin-left: 20px;  position: relative;">
      <div id="gameContainer" style="width: 1280px; height: 720px"></div>
      <div class="footer"style="    margin-right: 150px;">
        <div class="webgl-logo"></div>
        <div class="title" style="position:absolute; margin-left: 950px">Unity Thesis</div>
      </div>
    </div>
  </body>
</html>