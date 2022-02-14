<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Variabel</th>
			<th>Konversi Nilai</th>
			<th>Operasi Aritmatika</th>
			<th>Operasi Penugasan (=)</th>
			<th>Operasi Perbandingan</th>
			<th>Ciri - Ciri orang gila</th>
			<th>Ciri - Ciri Pembimbing PSG gw</th>
		</tr>
		<tr>
			<td>
				<?php 
				$gaji = 2000000;
				printf("Gaji Pertama = %d <br>\n", $gaji);
				$gaji = 1.5*$gaji;
				printf("Gaji sekarang = %d <br>\n", $gaji); 
				?>		
			</td>
			<td>
				<?php 
				$suhu = "30 derajat celcius";
				print("type data string : $suhu <br>\n");

				settype($suhu, "double");
				print("type data double : $suhu <br>\n");

				settype($suhu, "integer");
				print("type data integer : $suhu <br>\n");

				settype($suhu, "string");
				print("type data string : $suhu <br>\n");
				?>		
			</td>
			<td>
				<?php
				print("<b>1. Peningkatan</b><br>"); 
				print("&emsp;");$x = 1;
				print("x = $x<br>\n");
				$x++;
				print("&emsp;Peningkatan x = $x <br><br>\n");

				print("<b>2. Penurunan</b><br>");
				print("&emsp;");$x2 = 10;
				print("x2 = $x2<br>\n");
				$x2--;
				print("&emsp;Penurunan x2 = $x2 <br><br>\n");
				?>		
			</td>
			<td>
				<?php
				$x = 100; 
				$x += 2;
				print("Variabel x adalah $x <br>\n");
				$x -= 2;
				print("Variabel x adalah $x <br>\n");
				$x /= 2;
				print("Variabel x adalah $x <br>\n");
				$x %= 2;
				print("Variabel x adalah $x <br>\n");
				$x &= 2;
				print("Variabel x adalah $x <br>\n");
				$x |= 2;
				print("Variabel x adalah $x <br>\n");
				$x ^= 2;
				print("Variabel x adalah $x <br>\n");

				$x="Mas";
				$x .="&nbsp;jihadi";
				print("Pembimbing PSG adalah $x <br>\n");
				 ?>
			</td>
			<td>
				<?php 
				$a = 1;
				$b = 2;
				$c = 1;
				$me1 = "Saya"; 
				$me2 = "SAYA"; 

				printf("$a > $b => %d <br>\n", $a > $b); 
				printf("$a < $b => %d <br>\n", $a < $b);
				printf("$a == $c => %d <br>\n", $a == $c); 
				printf("$a != $b => %d <br>\n", $a != $b); 
				printf("$a <> $c => %d <br>\n", $a <> $c); 
				printf("$me1 <> $me2 => %d <br>\n", $me1 <> $me2); 
				printf("$me1 == $me2 => %d <br>\n", $me1 == $me2);
				 ?>
			</td>
			<td>
				<?php 
				print("Bau<br>\n");
				print("ber inisial M<br>\n");
				print("huruf ke-2 dari namanya yaitu A<br>\n");
				print("huruf ke-3 dari namanya yaitu N<br>\n");
				print("huruf ke-4 dari namanya yaitu S<br>\n");
				print("huruf ke-5 dari namanya yaitu U<br>\n");
				print("huruf ke-6 dari namanya yaitu R<br>\n");
				print("Orangnya Tinggi & ganteng (Katanya Maknya)<br>\n");
				print("Punya Hp Vivo Y12<br>\n");
				print("Laptopnya Merk ACER<br>\n");
				 ?>
			</td>
			<td>
				<?php 
				print("1. Berinisial Mas Jihadi<br>\n");
				print("2. Tinggi<br>\n");
				print("3. warna Rambutnya Kemerah2an<br>\n");
				print("4. Punya HP Merk Infinix s5<br>\n");
				print("5. Berkacamata<br>\n");
				print("6. Suka Yang Berbau Jepang maybe<br>\n");
				print("7. Punya Laptop <b>ASLINYA</b> merk ASUS Tapi<br> Di Tempelin Sticker Logo APPLE <br>\n");
				 ?>
			</td>
		</tr>
	</table>
</body>
</html>
<style type="text/css">
	table tr td,th{
		padding: 10px;
	}
</style>