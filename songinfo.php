<html>
	<head>
		<title>TuneShare</title>
		<link rel="stylesheet" type="text/css" href="mainmenu.css"></link>
		<link rel="shortcut icon" href="images/fork.png" type="image/png" />	
		<link rel="stylesheet" type="text/css" href="songinfo.css"></link>
	</head>
	<body>
		<div id="mainpanel"><?php include 'mainmenu.php'; ?></div>
		<div class="songinfopanel">		
			<table class="songinfotable" border="0">
				<tr><td><div class="slicicaokvir"><img class="slicica" src="images/greynote.png"/></div></td></tr>
				<tr><td><input class="download_dugmici" type="button" value="get as MP3"></td></tr>
				<tr><td><input class="download_dugmici" type="button" value="get as WAV"></td></tr>
				<tr><td><input class="download_dugmici" type="button" value="get as OGG"></td></tr>
				<tr><td rowspan="3" align="left">
						<img src="images/plejer.png" style="width:450px;height:30px;position:relative;top:25px;left:10px"/>
						<div class="info">Song name</div>
						<div class="control_buttons" align="center">
							<a href="#"><img src="images/play.png" style="position:relative;"/></a>
							<a href="#"><img src="images/stop.png" style="position:relative;"/></a>
							<a href="#"><img src="images/sound.png" style="position:relative;"/></a>
						</div>
				</td></tr>
			</table>
		</div>		
		<table class="comments" cellpadding="5">
			<tr><td><p style="color:white;">Comments:</p></td></tr>
			<tr><td><div></div></td></tr>
			<tr><td><p style="color:#9999DD;position:relative;left:20px;">Poster</p><div class="comment_box"/></td></tr>
			<tr><td><p style="color:#9999DD;position:relative;left:20px;">Poster</p><div class="comment_box"/></td></tr>
			<tr><td><p style="color:white">Post Comment:</td></tr>
			<tr><td><div style="width:340px;height:10px;background-color:skyblue;border-radius:27px;"/></td></tr>
			<tr><td><textarea rows="6" cols="40" style="background-color:#8888AA;position:relative;top:-10px;"></textarea></td></tr>
			<tr><td><input type="button" value="Submit"></td></tr>
		</table>
	</body>
</html>