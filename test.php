<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>üye kayıt</title>
</head>
<body>
	<div id="kayit_formu">
		<form action="?" method="POST" >
			<table>
				<tr>
					<td>Kullanıcı adı:</td>
					<td><input type="text" name="k_adi"></td>
				</tr>
				<tr>
					<td>Sifre:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td>Mail Adresi:</td>
					<td><input type="text" name="mail"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Kayıt Ol"></td>
				</tr>


			</table>



		</form> 

		<?php
		if ($_POST) {
			$k_adi = $_POST['k_adi'];
			$Sifre = $_POST['pass'];
			$mail = $_POST['mail'];

			if ($k_adi == "" || $Sifre == "" || $mail == "") {
				echo "Lütfen boş alan bırakmayınız";
			}else{
				error_reporting(0);
				$baglan = mysql_connect("localhost","root");
				mysql_select_db("test.vt", $baglan) or die("Mysql'e bağlanamadı!");
				

				$kayit = mysql_query("INSERT INTO uyeler (k_adi,pass,mail) VALUES ('$k_adi','$Sifre','$mail')");
				if($kayit){
					echo "Kayıt başarılı!";
				}else{
					echo "Bir hata oluştu";
				}
			}
		}
		?>
	</div>
</body>
</html>