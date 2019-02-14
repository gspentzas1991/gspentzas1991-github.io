
<?php include '../header.php' ?>

<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thesis Project</title>
    <link rel="stylesheet" href="TemplateData/style.css">
	<link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <script src="TemplateData/UnityProgress.js"></script>
  </head>
  <body class="template">
	<?php
			echo $HEADER; 
		?>
    <div class="template-wrap clear">
	
		<p>The thesis I did for the University of Pireaus concerns the development of videogames using the Unity game engine. This game accompanied my thesis and aims to show my<br>
		ability to, among other things, develop different levels and mechanics, script object behavior and develop a save system with the Unity engine. The thesis was written in greek<br> and <a href="/projects/thesis.pdf"> can be found here</a> <br><br> 
		First load may take a few minutes.</p>
      <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="720px" width="1280px"></canvas>
      <br>
      <div class="logo"></div>
    </div>
    <script type='text/javascript'>
  var Module = {
    TOTAL_MEMORY: 268435456,
    errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
    compatibilitycheck: null,
    backgroundColor: "#222C36",
    splashStyle: "Light",
    dataUrl: "Release/7.data",
    codeUrl: "Release/7.js",
    asmUrl: "Release/7.asm.js",
    memUrl: "Release/7.mem",
  };
</script>
<script src="Release/UnityLoader.js"></script>

  </body>
</html>
