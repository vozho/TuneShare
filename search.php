<!--Autor:Milan Filipovic 541/09-->
<html>
	<head>
		<title>TuneShare</title>
		<link rel="stylesheet" type="text/css" href="mainmenu.css"></link>
		<link rel="shortcut icon" href="images/fork.png" type="image/png" />	
		<link rel="stylesheet" type="text/css" href="search.css"></link>
	</head>
	<body>
	<div id="mainpanel"><?php include 'mainmenu.php'; ?></div>
	<div>
		<table class="search_table" border="0" cellspacing="10">
			<tr><td align="center"><p style="font-weight:bold;">Search by</p></td></tr>
			<tr>
				<td style="width:200px;" align="right">Keyword(s):</td>
				<td><input class="tekstovi" type="text" style="width:500px;"/></td>
			</tr>
			<tr>
				<td style="width:200px;" align="right">Artist(s):</td>
				<td><input id="tekstovi" type="text" style="width:500px;"/></td>
			</tr>
			<tr>
				<td style="width:200px;" align="right">Genre:</td>
				<td><input id="tekstovi" type="text" style="width:500px;"/></td>
			</tr>
			<tr>
				<td style="width:200px;" align="right">Tag(s):</td>
				<td><input id="tekstovi" type="text" style="width:500px;"/></td>
			</tr>
			<tr>
				<td style="width:200px;" align="right">Uploader(s):</td>
				<td><input id="tekstovi" type="text" style="width:500px;"/></td>
			</tr>
			<tr><td colspan="2"><hr style="width:80%;"/></td></tr>
			<tr>
				<td style="width:200px;" align="right">Search for playlist(s) by keyword(s):</td>
				<td><input id="tekstovi" type="text" style="width:500px;"/></td>
			</tr>
			<tr><td align="right" colspan="2"><input type="submit" value="Go!" style="width:90px;height:40px;"></td></tr>
			<tr>
				<td colspan="2" align="left">
				<p>Notes:</p>
				<ul>
					<li>You can search by multiple parameters</li>
					<li>search keywords can be partial(as part of a name)</li>
				</ul> 
				</td>
			</tr>
		</table>
	</div>
	</body>
</html>