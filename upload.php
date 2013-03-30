<!--Autor:Vojislav Nikolic 472/09-->
<html>
	<head>
		<title>TuneShare</title>
		<link rel="stylesheet" type="text/css" href="mainmenu.css"></link>
		<link rel="shortcut icon" href="images/fork.png" type="image/png" />	
		<link rel="stylesheet" type="text/css" href="upload.css"></link>
	</head>
	<body>
	<div id="mainpanel"><?php include 'mainmenu.php'; ?></div>
	<div id="upload_div">
		<table id="upload_tabela" cellpadding="4">
			<tr>
				<td align="center"><p style="padding-bottom:3px;">Record it!</p></td>
				<td align="left" colspan="2">
					<a href="#" style="position:relative;top:4px;left:15px;"><img src="images/record.png" style="width:20px;height:20px;"></a>
					<button type="text" style="position:relative;top:-5px;left:15px;width:330px;height:25px;" disabled/>
				</td>
			</tr>
			<tr style="height:50px;">
				<td align="center">Upload from computer:</td>
				<td align="left">
					<input type="file" name="file" id="file"/>
					<p style="font-size:11px;font-family:Arial;position:relative;top:-5px;">*maximum file size:20MB.</p>
				</td>
			</tr>
			<tr>
				<td align="right">Upload from link:</td>
				<td colspan="2" align="left"><input type="text" style="width:350px;"/><input type="button" value="check"></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="1" align="right"><input type="button" value="Upload!"></td>
			</tr>
		</table>
		<table id="info_panel" border="0">
			<tr><td><p style="position:relative;left:8px;">Upload info:</p></td><tr>
			<tr><td><p>Name</p></td><td><input type="text" style="position:relative;left:-10px;">*</td></tr>
			<tr><td><p>Artist</p></td><td><input type="text" style="position:relative;left:-10px;">*</td></tr>
			<tr>
				<td>Genre:</td>
				<td>
					<select style="position:relative;left:-10px;">
						<option value="" >Rock</option>
						<option value="" selected>Rock'n'Roll</option>
						<option value="">Pop</option>
						<option value="">Trance</option>
						<option value="">Classic</option>
						<option value="">Techno</option>
						<option value="">Dubstep</option>
						<option value="">Drumstep</option>
						<option value="">Electro</option>
						<option value="">Rap</option>
						<option value="">EDM</option>
						<option value="">Experimental</option>
						<option value="">Country</option>
						<option value="">Folk</option>
						<option value="">Other</option>
						<option disabled><hr/></option>
						<option value="">View more...</option>
					</select> 
				</td>
			</tr>
			<tr style="height:30px;">
				<td style="width:130px;"><p>Add Tags(separated by commas):</p></td><td><input type="text" style="width:300px;"></td></td>
			</tr>
			<tr>
				<td><p>Visibility</p></td>
				<td>
					<select style="position:relative;left:-50px;">
						<option value="" selected>Public</option>
						<option value="">Private</option>
					</select>
				</td>
			</tr>
			<tr >
				<td align="right" colspan='3'><p style="position:relative;left:-50px;">* - required fields</p></td>
			<tr>
		</table>
	</div>
	</body>
</html>