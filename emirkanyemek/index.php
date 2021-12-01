<!DOCTYPE html>
<html>
<head>
	<title>Emirkan Ustadan Tarifler</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<table  border="5" width="400" cellspacing="0" class="tablo"height="300">
			<tr>
				<td align="center">
					
						<h1 class="anabaslik"> Emirkan Ustadan Tarifler</h1>
					
					</td>
			</tr>
			<tr>
				<td>
					<form action="index.php" method="post">
				<label class="baslik">Yemek Adı:</label>	
				<input type="textbox" name="ymkadi" size="28" style="margin-left: 37px;" placeholder="Yemek Adını Giriniz" autofocus="" class="txtarea">

		
				</td>
			</tr>
			<tr>

				<td>
					<label style="float: left;" class="baslik">Yemek Tarifi:</label>
					<div></div>
					<textarea name="ymktrf" rows="10" cols="29" placeholder="Yemek Tarifin Yazın" style="margin-left: 22px;" class="txtarea"></textarea>
				</td>
			</tr>
			<tr>
				<td align="center"> 
					<input type="submit" value="Yemek Ekle " class="buton" >
					
				</td>
			</tr>
			<tr>
				<td>
					<a href='yemektarifleri.txt' class="link">Yemek Listesini Görmek İçin Tılayınız</a>
				</td>
			</tr>
		</table>
		</form>

		<?php 
error_reporting(0);
$dosya_adi = "yemektarifleri.txt";

$deger = $_POST["ymkadi"];
$deger2 = $_POST["ymktrf"];

$yazilacak_deger = "\nYemek Adi: $deger\n Yemek Tarifi\n $deger2\n";

if ($deger) { 

if (!file_exists($dosya_adi)){ 
  
touch($dosya_adi);
chmod($dosya_adi,0666);
  
}


$dosyaya_baglanti = fopen($dosya_adi,"a+");

if (!fwrite($dosyaya_baglanti,$yazilacak_deger)){
echo "Eklenemedi.";
exit;

} 

echo "<p class=\"msj\">Yemek Tarifiniz Eklendi.</p> ";
} else {

echo "<p class=\"msj\">Yemek Tarifi Eklenmedi !!</p> ";

}

?>

</body>
</html>