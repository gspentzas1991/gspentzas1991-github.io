
<?php include '../header.php' ?>

<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Turret Game</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
	<link rel="stylesheet" href="../css/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/WebGl Build.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body class="template">
  <?php
			echo $HEADER; 
		?>
  <h1 style=" margin-left: 45px; margin-bottom: -25px; font-family: 'Helvetica, sans-serif'; "> Turret Game</h1><br>
  <p style=" margin-left: 45px; margin-bottom: -15px; "> A top down game where you control a turret against a horde of undead. See how many you can kill before they overwhelm you!</p><br>
  <p style=" margin-left: 45px; margin-bottom: -15px; ">The turret features 4 different weapons, that you can select with the number keys 1 - 4. It can be controled by the mouse, the keyboard or by the AI.</p><br>
  <p style=" margin-left: 45px; margin-bottom: -15px; ">You can view the C# scripts created for this game <a href="https://github.com/gspentzas1991/Top-Down-Turret-Game"> here</a></p>
		
    <div class="webgl-content"style="/* top: 550px; */margin-top: -100 ;margin-left: 20px;  position: absolute;  top: 680; left:520 ">
      <div id="gameContainer" style="width: 1000px; height: 750px"></div>
      <div class="footer"style=" position:absolute;">
        <div class="webgl-logo"></div>
        <div class="title" style="margin-left:650"> Turret Game</div>
      </div>
    </div>
  </body>
</html>