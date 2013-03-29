<html>
	<head>
		<title>TuneShare</title>
		<link rel="stylesheet" type="text/css" href="main.css"></link>
		<link rel="shortcut icon" href="images/fork.png" type="image/png" />	
		<link rel="stylesheet" type="text/css" href="songinfo.css"></link>
	</head>
	<body>
		<div id="mainpanel">		
			<table id="main_table" border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td align="left" style="width:130px"><img id="logo" src="images/logo.png"></td>
					<td style="width:180px;"><p style="text-align:center;"><a href="index.php" value="Home">Home</a></p></td>
					<td style="width:300px;" align="center"><p id="naziv">Tune Share</p></td>
					<td style="width:400px;" align="center">
						<table id="search_tabela" border="0" cellspacing="0" cellpadding="2">
							<tr>
								<td colspan="3"><p id="search" style="position:relative;left:-5px;">Search:</p></td>
								<td><input type="text"/></td>
								<td><a href="#"><img id="magnifier" src="images/magnifier.png" width="20px" height="20px"></a></td>
								<td><input type="button" value="advanced" onclick="location.href='search.php'"/></td>
							</tr>
						</table>
					</td>
					<td align="right">
						<table id="korisnik" border="0" cellspacing="0">
							<tr>
								<td style="text-align:right;" colspan="2">Welcome,<a href="login.php" style="font-weight:bold">Guest</a></td>
							</tr>
							<tr><td align="right">
								<input type="button" value="Login/Logout" style="color:green" onclick="location.href='login.php'"/>
								<input type="button" value="Sign Up" style="color:blue" onclick="location.href='login.php'"/>
							</tr></td>
						</table>
					</td>
				</tr>
			</table>
		</div>
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
			<tr><td>Post Comment:</td></tr>
			<tr><td><div style="width:400px;height:15px;background-color:skyblue;border-radius:27px;"/></td></tr>
			<tr><td><textarea rows="6" cols="40" style="background-color:#8888AA"></textarea></td></tr>
			<tr><td><input type="button" value="Submit"></td></tr>
		</table>
	</body>
</html>