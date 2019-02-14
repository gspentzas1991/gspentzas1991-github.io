
<?php include '../header.php' ?>

<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> Maze Generator | Unity WebGL Player </title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
	<link rel="stylesheet" href="../css/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/webgl.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body class="template">
  <?php
			echo $HEADER; 
		?>
  <h1 style=" margin-left: 45px; margin-bottom: -25px; font-family: 'Helvetica, sans-serif'; "> Maze Generator</h1><br>
  <p style=" margin-left: 45px; margin-bottom: -15px; "> A random maze generator featuring three different algorithms. Binary Tree, Sidewinder and Recursive Backtracking</p><br>
  <p style=" margin-left: 45px; margin-bottom: -15px; ">After generating a maze with the dimensions you want, you can try to solve it</p><br>
  <p style=" margin-left: 45px; margin-bottom: -15px; ">You can view the C# scripts created for this game <a href="https://github.com/gspentzas1991/Unity-Maze-Generator"> here</a></p>
		
    <div class="webgl-content"style="/* top: 550px; */margin-top: -100px ; margin-left:150px;  position: absolute;  top: 680; left:520 ">
      <div id="gameContainer" style="width: 1280px; height: 720px"></div>
      <div class="footer"style=" position:absolute;">
        <div class="webgl-logo"></div>
        <div class="title" style="margin-left:500"> Maze Generator</div>
      </div>
    </div>
  </body>
</html>