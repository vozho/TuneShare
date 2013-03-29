<html>
	<head>
		<title>TuneShare</title>
		<link rel="stylesheet" type="text/css" href="main.css"></link>
		<link rel="stylesheet" type="text/css" href="songinfo.css"></link>
		<link rel="shortcut icon" href="images/fork.png" type="image/png" />	
	</head>
	<body>
		<div class="mainpanel">		
			<hr class="vertikalna_1"/>
			<hr class="vertikalna_2"/>
			<hr class="horizontalna"/>
			<table class="main_table" id="main_table"  border="1" cellspacing="5" cellpadding="15">
				<tr id="main_tr">
					<td id="logo" style="width:150px"></td>
					<td><p id="naziv">Tune Share</p></td>
					<td style="padding-bottom:70px;text-align:right;">Welcome,<a href="#" style="font-weight:bold">Guest</a></td>
				</tr>
				<tr id="main_tr">
					<td>
						<p style="text-align:center;padding-top:15px;"><a href="index.php" value="Home">Home</a></p></td>
					<td style="padding:10px 10px 10px 10px;">
						<table id="unutrasnja_tabela" border="0" cellspacing="0" cellpadding="2">
							<tr><td><p id="search">&nbsp;Search</p></td></tr>
							<tr>
								<td><input type="text"/></td>
								<td><a href="#"><img id="magnifier" src="images/magnifier.png" width="20px" height="20px"></a></td>
								<td>&nbsp;<input type="button" value="advanced"/></td>
							</tr>
						</table>
					</td>
					<td>
						<table id="unutrasnja_tabela_2" cellspacing="2">
							<tr>
								<td id="login"><input type="button" value="Login/Logout" style="color:green"/></td>
								<td id="signup"><input type="button" value="Sign Up" style="color:blue"/></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<div class="songinfopanel">		
			<table class="songinfotable" border="0">
				<tr>
					<td><div class="slicicaokvir"><img class="slicica" src="images/greynote.png"/></div></td>
				</tr>
				<tr>
					<td class="td_download" align="center"><input class="download_manzetne" type="button" value="get as MP3"></td>
					<td rowspan="3" align="center">
						<img src="images/plejer.png" style="width:450px;height:30px;position:relative;top:25px;left:10px"/>
						<div class="info">Song name</div>
						<div class="control_buttons">
						<a href="#"><img src="images/play.png" style="position:relative;"/></a>
						<a href="#"><img src="images/stop.png" style="position:relative;"/></a>
						<a href="#"><img src="images/sound.png" style="position:relative;"/></a>
						</div>
					</td>
				</tr>
				<tr>
					<td class="td_download" align="center"><input class="download_manzetne" type="button" value="get as WAV"></td>
				</tr>
				<tr>
					<td class="td_download" align="center"><input class="download_manzetne" type="button" value="get as OGG"></td>
				</tr>
			</table>
		</div>		
		<table class="comments" cellpadding="5">
			<tr><td><p style="color:white;">Comments:</p></td></tr>
			<tr><td><div>Write a new comment:</div></td></tr>
			<tr><td><p style="color:#9999DD;position:relative;left:30px;">Author Name</p><div class="comment_box"/></td></tr>
			<tr><td><p style="color:#9999DD;position:relative;left:30px;">Author Name</p><div class="comment_box"/></td></tr>
		</table>
	</body>
</html>