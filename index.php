<html>
	<head>
		<title>TuneShare</title>
		<link rel="stylesheet" type="text/css" href="main.css"></link>
		<link rel="shortcut icon" href="images/fork.png" type="image/png" />	
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
		<!--tabela za rezultate-->
		<table id="search_results" border="1" cellspacing="0">
			<tr>
				<td class="result_pic"><a href="songinfo.php"><img src="images/greynote.png"/></a></td>
				<td class="result_text"><a href="songinfo.php" style="color:white">Name:<br/> Artist: <br/>Genre:</p></td>
			</tr>
			<tr>
				<td class="result_pic"><a href="songinfo.php"><img src="images/greynote.png"/></a></td>
				<td class="result_text"><a href="songinfo.php" style="color:white">Name:<br/> Artist: <br/>Genre:</p></td>
			</tr>
			<tr>
				<td class="result_pic"><a href="songinfo.php"><img src="images/greynote.png"/></a></td>
				<td class="result_text"><a href="songinfo.php" style="color:white">Name:<br/> Artist: <br/>Genre:</p></td>
			</tr>
			<tr>
				<td class="result_pic"><a href="songinfo.php"><img src="images/greynote.png"/></a></td>
				<td class="result_text"><a href="songinfo.php" style="color:white">Name:<br/> Artist: <br/>Genre:</p></td>
			</tr>
			<tr>
				<td class="result_pic"><a href="songinfo.php"><img src="images/greynote.png"/></a></td>
				<td class="result_text"><a href="songinfo.php" style="color:white">Name:<br/> Artist: <br/>Genre:</p></td>
			</tr>
			<tr>
				<td class="result_pic"><a href="songinfo.php"><img src="images/greynote.png"/></a></td>
				<td class="result_text"><a href="songinfo.php" style="color:white">Name:<br/> Artist: <br/>Genre:</p></td>
			</tr>
			<tr style="height:15px;">
				<td colspan="2" align="center" style=";"><input type="button" value="Load More" style="width:800px;"/><td>
			</tr>
		</table>
	</body>
</html>