<html>
	<head>
		<title>TuneShare</title>
		<link rel="stylesheet" type="text/css" href="main.css"></link>
		<link rel="shortcut icon" href="images/fork.png" type="image/png" />	
		<link rel="stylesheet" type="text/css" href="search.css"></link>
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
				<td style="padding-bottom:70px;text-align:right;">Welcome,<a href="login.php" style="font-weight:bold">Guest</a></td>
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
							<td>&nbsp;<input type="button" value="advanced" onclick="location.href='search.php'"/></td>
						</tr>
					</table>
				</td>
				<td>
					<table id="unutrasnja_tabela_2" cellspacing="2">
						<tr>
							<td id="login"><input type="button" value="Login/Logout" style="color:green" onclick="location.href='login.php'"/></td>
							<td id="signup"><input type="button" value="Sign Up" style="color:blue" onclick="location.href='login.php'"/></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	</body>
</html>