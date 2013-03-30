<!--Autor:Vojislav Nikolic 472/09-->
<?php
//kod za glavni meni,ucitava se u ostalim stranicama sa "php include"
echo "<table id='main_table' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
					<td align='left' style='width:160px'><a href='index.php'><img id='logo' src='images/logo.png'></a></td>
					<td><hr/><hr/><hr/><hr/></td>
					<td style='width:150px;'><p style='text-align:center;'><input type='button' value='Upload...' onclick=\"location.href='upload.php'\"></td>
					<td><hr/><hr/><hr/><hr/></td>
					<td style='width:300px;' align='center'><p id='naziv'>Tune Share</p></td>
					<td><hr/><hr/><hr/><hr/></td>
					<td style='width:500px;' align='center'>
						<table id='search_tabela' border='0' cellspacing='0' cellpadding='2'>
							<tr>
								<td colspan='3'><p id='search' style='position:relative;left:-5px;'>Search:</p></td>
								<td><input type='text'/></td>
								<td><a href='#'><img id='magnifier' src='images/magnifier.png' width='20px' height='20px'></a></td>
								<td><input type='button' value='advanced' onclick=\"location.href='search.php'\"/></td>
							</tr>
						</table>
					</td>
					<td align='right' style='width:50px;'>
						<table id='korisnik' border='0' cellspacing='0'>
							<tr>
								<!--<td rowspan='2' style='width:30px;' align='right'><hr id='tacke'/><hr id='tacke'/><hr id='tacke'/><hr id='tacke'/></td>-->
								<td style='text-align:right;' colspan='2'>Welcome,<a href='login.php' style='font-weight:bold'>Guest</a></td>
							</tr>
							<tr><td align='right' colspan='3'>
								<input type='button' value='Login/Logout' style='color:green' onclick=\"location.href='login.php'\"/>
								<input type='button' value='Sign Up' style='color:blue' onclick=\"location.href='login.php'\"/>
							</tr></td>
						</table>
					</td>
				</tr>
			</table>"
?>