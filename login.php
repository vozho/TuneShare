<html>
	<head>
		<title>TuneShare</title>
		<link rel="stylesheet" type="text/css" href="main.css"></link>
		<link rel="shortcut icon" href="images/fork.png" type="image/png" />	
		<link rel="stylesheet" type="text/css" href="login.css"></link>
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
	<div class="signuppanel">
		<hr style="position:relative;top:292px;width:90%;"/>
		<table cellpadding="4" border="0">
			<tr>
				<td>Name</td>
				<td  class="drugi_red" ><input type="text" value="First" style="color:grey"></td>
				<td class="drugi_red"><input type="text" value="Last" style="color:grey"></td>
			</tr>
			<tr>
				<td>Choose a username:</td>
				<td align="left"><input type="text"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" value="Password" style="color:grey"></td>
				<td align="center"><input type="text" value="Retype Password" style="color:grey"></td>
			</tr>
			<tr>
				<td>Choose Avatar:</td>
				<td colspan="2"><input type="file" name="file" id="file"/></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<div style="border:3px dashed black;width:100px;height:100px;position:relative;left:-20px;">
						<img src="images/avatar-blank.jpg" style="width:100px;height:100px;">
					</div>
				</td>
			</tr>
			<tr>
				<td>Email Address:</td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td>Type Captcha:</td>
				<td colspan="2"><div style="width:200px;height:50px;background-color:green;"/></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="text" style="position:relative;left:-15px;"></td>
			</tr> 
			<tr>
				<td colspan="3" align="left"><input type="button" value="Create Account" style="position:relative;left:30px;"></td>
			</tr>
		</table>
	</div>
	<div class="logpanel">
		<table border="0">
		<tr><td style="width:100px;" colspan="3"><p style="font-weight:bold;position:relative;left:10px;height:20px;word-wrap:disable;">Have an account?</p></td></tr>
		<tr>
			<td><p>Username:</p></td>
			<td><input type="text"/></td>
		</tr>
		<tr>
			<td><p>Password:</p></td>
			<td><input type="text"/></td>
		</tr>
		<tr>
			<td><a href="#" style="font-size:12px;">Forgot password?</a></td>
			<td style="font-size:12px;">remember me?<input type="checkbox"/></td>
			<td style="width:5px"><input type="button" value="Sign in" style="position:relative;left:-60px;"/></td>
		</tr>
		</table>
	</div>
	</body>
</html>