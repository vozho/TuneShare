<html>
	<head>
		<title>TuneShare</title>
		<link rel="stylesheet" type="text/css" href="mainmenu.css"></link>
		<link rel="shortcut icon" href="images/fork.png" type="image/png" />	
		<link rel="stylesheet" type="text/css" href="login.css"></link>
	</head>
	<body>
	<div id="mainpanel"><?php include 'mainmenu.php'; ?></div>
	<div class="signuppanel">
		<hr style="position:relative;top:315px;width:90%;"/>
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
			<tr style="height:30px;"></tr>
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