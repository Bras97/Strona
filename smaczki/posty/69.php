<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smaczki życia</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="Adam Zieliński">
<link href="../posty.css" rel="stylesheet" type="text/css" />
<link href="../galery.css" rel="stylesheet" type="text/css" />
<meta name="Robots" CONTENT="index, follow">
<meta name="Revisit-after" CONTENT="2 days">
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<script type="text/javascript" src="../js/galery2.js"></script>
<script type="text/javascript" src="../js/galery.js"></script>
<link rel="shortcut icon" href="../images/logo.ico" />

</head>
<body>

<div id="kotlet_wrapper_outer">
	<div id="kotlet_wrapper">
    
    	<div id="kotlet_header">
			<div id="site_title">
				<h1><a rel="nofollow"><strong>Smaczki życia</strong></a></h1>
			</div> <!-- end of site_title -->

			
			<div class="cleaner"></div>
		</div>

        <div id="kotlet_menu">
            <ul>
                <li><a href="../index.html">Aktualności</a></li>
                <li><a href="../onas.html">O nas</a></li>
                <li><a href="../topka.html">Topka</a></li>
                <li><a href="../przygody.html" class="current">Przygody</a></li>
                <li><a href="../przemyslenia.html">Przemyślenia</a></li>
            </ul>   
			
                <div class="cleaner"></div>
        </div> 
            

        
        <div id="kotlet_slider_wrapper">
        
			<div id="kotlet_background">
				<div id="kotlet_author">~ by Tukasz</div>
				<div id="kotlet_slider">
					
					<div id="kotlet_title">
					<CENTER>
					<h1>1,5kg mięsa z frytkami czyli <br /><br /> Uczta Weselna na czterech + Cola </h1><br />
					<div class="cleaner_h10"></div>
					</div>
						<div id="kotlet_content">
							<br />
							<div id="kotlet_img2">							
								<a href="../foto/sphinx/1.jpg" data-lightbox="../foto/sphinx/1.jpg"><img src="../foto/sphinx/1a.jpg" alt="sphinx" width="300px" /></a>
							</div>
							<br /><h3>"Pizzerinki w Realu"</h3>
							<p>
							Pizzerinki z Reala, czyli tak naprawdę to ten mały sklepik na końcu hali. W ten dzień mieliśmy mało czasu i właśnie to miejsce wybraliśmy. Większość ludzi kojarzy to miejsce właśnie ze względu na pizzerinki, które są smaczne i tanie (w okolicach 3 zł). Także my tym razem we trójkę (Adam, Piotr, Łukasz) wybraliśmy się właśnie po nie jak i po coś słodkiego. Adam nie zamówił głównego celu naszej wyprawy, ale oddał się namiętnym smakom różowemu donutowi za 1,60zł (pączkowi z wielką dziurą w środku). Nie jest to jednak miejsce w którym się chcę przebywać z powodu położenia i braku miejsc. Znajdują się tam trzy małe stoliki, kilka krzeseł i telewizor. Streszczając mały sklepik z dobrymi pizzerinkami. Taki obiad polecam studentom, nie naruszy on aż tak bardzo ich budżetu. Jeżeli będziecie robić zakupy na hali w Realu, zajrzyjcie również i tam, a wtedy sami sprawdźcie czy to wasz smaczek życia.
							<br /><br />
							
							<div align="center">
								<table border="1" cellpadding="5" cellspacing="1" align="center">
									<tr>
										<td width="200px" align="center"><b>"Sphinx"</b></td>
										<td width="150px" align="center">Adam</td>
										<td width="150px" align="center">Piotr</td>
										<td width="150px" align="center">Tukasz</td>
										<td width="150px" align="center">Okoń</td>
										<td width="80px" align="center">Średnia</td>
									</tr>
									<tr>
										<td width="200px" align="center"><b>"Sphinx"</b></td>
										<td width="150px" align="center"><img src="../images/rating/3.png" /></td>
										<td width="150px" align="center"><img src="../images/rating/6.png" /></td>
										<td width="150px" align="center"><img src="../images/rating/6.png" /></td>
										<td width="150px" align="center"><img src="../images/rating/0.png" /></td>
										<td width="80px" align="center"><h6><b>5.00</b></h6></td>
									</tr>							
									<tr>
										<td width="200px" align="center">Zamówienia:</td>
										<td width="150px" align="center">Donut</td>
										<td width="150px" align="center">Pizzerinka</td>
										<td width="150px" align="center">Pizzerinka</td>
										<td width="150px" align="center"></td>
										<td width="80px" align="center"></td>
									</tr>										
								</table>
							</div>
						</div>			
						</div>
			</div>

                <div class="cleaner_h40"></div>
        </div>
		
		<b>Komentarze</b><br /><br />

		<table>

			<?php

				// nazwa pliku z trescia komentarzy
				$nazwa = 'komentarze.txt';


				// zapis jesli co wyslano z formularza
				if&#40;$_POST['tytul'] & $_POST['tresc'] & $_POST['autor']&#41;
				&#123;
					$fp=fopen&#40;$nazwa, 'a'&#41;;
					flock&#40;$fp, 2&#41;; 
					fwrite&#40;$fp,$_POST['tytul'].'||'.strip_tags&#40;strtr&#40;$_POST['tresc'],'\n',' '&#41;&#41;.'||'.$_POST['autor'].'\n'&#41;;
					flock&#40;$fp, 3&#41;; 
					fclose&#40;$fp&#41;;
				&#125;

				// jezeli juz istnieja jakies komentarze
				if&#40;is_file&#40;$nazwa&#41;&#41;
				&#123;
					$linia = explode&#40;'\n',file_get_contents&#40;$nazwa&#41;&#41;;
					$ilosc = count&#40;$linia&#41;;
					for&#40;$i=0; $i<$ilosc; $i++&#41;
					&#123;
						$komentarz = explode&#40;'||',$linia[$i]&#41;;
						echo '<br /><b>'.$komentarz[0].'</b><br />'.$komentarz[1].'<br /><i>'.$komentarz[2].'</i><br />';
					&#125;
				&#125;
				else
					echo 'Jeszcze nie ma zadnych komentarzy. Badz pierwszy i skomentuj!<br /><br />';

			?>

			</table>

			<form action="" method="POST">
			<table><tr><td>Tytul </td><td><input type="text" name="tytul" /></td></tr>
			<tr><td>Tresc </td><td><textarea cols="30" name="tresc" rows="7"></textarea> </td></tr>
			<tr><td>Autor </td><td><input type="text" name="autor" /> </td></tr>
			<tr><td><input type="submit" value="Dodaj komentarz" /></td></tr></table>
			</form>
			
				<div id="kotlet_content_wrapper_bottm"></div>
				
			<div class="cleaner"></div>        
				<div class="cleaner"></div>        
	   
			<br />
   
		
        
	</div> <!-- end of wrapper -->
</div> <!-- end of wrapper_outer -->

</body>
</html>