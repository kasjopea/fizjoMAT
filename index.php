<?php
session_start();

if (isset($_POST["name"])){
					$name = $_POST["name"];
					$mobile = $_POST["mobile"];
					$message = $_POST["message"];

					$name=trim($name);
					$name=htmlspecialchars($name);
					$name=addslashes($name);

					$mobile=trim($mobile);
					$mobile=htmlspecialchars($mobile);
					$mobile=addslashes($mobile);

					$message=trim($message);
					$message=htmlspecialchars($message);
					$message=addslashes($message);

					if(!preg_match('/^[a-ząęóżźćńłś]{2,} [a-ząęóżźćńłś-]{2,}$/i', $name))
					{$_SESSION["nazwa"]=false;} else {$_SESSION["nazwa"]=true;}
					if(!preg_match('/^[0-9-]{9,15}$/', $mobile))
					{$_SESSION["mobile"]=false;} else {$_SESSION["mobile"]=true;}

					if($_SESSION["nazwa"]==false||$_SESSION["mobile"]==false) $_SESSION["error"]="Wprowadzono nieprawidłowe dane. Popraw je i wyślij formularz jeszcze raz."; 
					else {
					$wiadomosc ="Imię i nazwisko klienta to:"." ".$name.". Telefon to:"." ".$mobile.". Wiadomość zaś to:"." ".$message;

					if (mail("fizjomat@o2.pl", "Wiadomość ze strony fizjoMAT", $wiadomosc ))
					{
					$_SESSION["done"]= "Dziękuję za wypełnienie formularza kontaktowego.";
					}else{
					$_SESSION["fail"]= "Niestety nie udało się wysłać formularza kontaktowego. Spróbuj później lub skontaktuj się telefonicznie.";
					}
					}
	}

?>
<html lang="pl">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="FizjoMAT to gabinet rehabilitacji w Warszawie. Świadczymy usługi: rehabilitacji w domu, masażu biurowego, masażu klasycznego.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizjoMAT- Rehabilitacja i masaż biurowy w Warszawie</title>
    <link rel="icon" href="img/logoIcon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="vendor/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript" src="vendor/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</head>
<body>
	<section id="social">
	<div>
		<div>
		<img src="img/logoColor.png" alt="logo FizjoMat- gabinet rehabilitacji i masażu w Warszawie prowadzony przez Mateusza Kuczkowskiego" width="100%"/>
		</div>
		<div>
		<a target="_blank" href="https://www.facebook.com/mateusz.kuczkowski?fref=ts"><img src="img/icon/facebook.png"/></a>
		<a target="_blank" href="https://www.facebook.com/mateusz.kuczkowski?fref=ts"><img src="img/icon/twitter.png"/></a>
		<a target="_blank" href="https://www.facebook.com/mateusz.kuczkowski?fref=ts"><img src="img/icon/youtube.png"/></a>
		
		</div>
	</div>
	</section>
	<nav>
		<div>
			<ul><li id="menuButton"><a><i class="fa fa-bars" aria-hidden="true"></i>Pokaż menu</a></li><li><a class="buttonMenuHide">Strona główna</a></li><li><a class="buttonMenuHide">O mnie</a></li><li><a class="buttonMenuHide">Metody</a></li><li><a class="buttonMenuHide">Oferta i cennik</a></li><li><a class="buttonMenuHide">Kontakt</a></li>
			</ul>
		</div>
	</nav>
	<header>
		<div class="animated flipInY">
		<h3>Witam!</h3>
			<p>Nazywam się Mateusz Kuczkowski. Od najmłodszych lat wiązałem swoją przyszłość z zawodem, którym będę mógł pomóc ludziom. Po skończonych studiach na kierunku fizjoterapia i zdobywaniu doświadczenia w klinikach medycznych postanowiłem zacząć działalność na szerszą skalę, dzięki temu powstała firma FizjoMat.</p>
		</div>
		<div>
			<div class="animated flipInX">
				<a href="#oferta"><img src="img/icon/offer.png" width="60%"/></a>
				<h2>Oferta i cennik</h2>
			</div>
			<div class="animated flipInY">
				<a href="#kontakt"><img src="img/icon/contact.png" width="60%"/></a>
				<h2>Kontakt</h2>
			</div>
		</div>
		
	</header>

		<!--<blockquote>
			<hgroup>
			<h2>Ruch może zastąpić  wszystkie lekarstwa, ale żadne lekarstwo nie jest w stanie zastąpić ruchu.</h2>
			<h3>- Wojciech Oczko</h3>
			</hgroup>
		</blockquote>-->

		<section id="oMnie">
		<h2>O mnie</h2>
			<div>
				<div>
					<img src="img/icon/userwhite.png"/>
				</div>
				<h3>Kim jestem?</h3>
				<p>Jestem mgr-em fizjoterapii.  Swoje doświadczenie zawodowe rozpocząłem po uzyskaniu tytułu  licencjata, a także ukończeniu pierwszego kursu terapii manualnej.  Uzyskane umiejętności doskonaliłem na warsztatach, a także licznych praktykach.  Od 2013 roku jestem związany z liderem prywatnego rynku medycznego, firmą LuxMed.</p>
			</div>
			<div>
				<div>
					<img src="img/icon/white-cross.png"/>
				</div>
				<h3>Komu pomagam?</h3>
				<p>Pomagam przede wszystkim osobom w ostrych jak i przewlekłych stanach bólowych kręgosłupa oraz stawów obwodowych. Dzięki zgromadzonemu doświadczeniu pomagam również osobom po urazach ortopedycznych, incydentach neurologicznych. Miłe i pozytywne uosobienie pozwala bez większego problemu porozumieć się z młodszą grupą pacjentów podczas gimnastyki korekcyjnej (od 6 r. ż).
				</p>
			</div>
			<div>
				<div>
					<img src="img/icon/controls.png"/ width="10px">
				</div>
				<h3>Jak się umówić?</h3>
				<p>Umówić się można telefonicznie lub poprzez formularz kontaktowy. Na wizytę należy wziąć wygodny strój niekrępujacy ruchu oraz badania obrazowe t.j. rentgen czy rezonans magnetyczny.</br> Tel. 721-762-865</p>
				<button>Formularz kontaktowy</button>
				<p></p>
			</div>	
		</section>
		
		<section id="metody">
			<h2>Metody</h2>
			<main id="rozwiniecieMetody">
				<div>
					<ul>
						<li>Terapia manualna</li>
						<li>Masaż klasyczny</li>
						<li>Trening motoryczny</li>
						<li>Gimnastyka korekcyjna</li>
						<li>Masaż biurowy</li>
					</ul>
				</div>
				<div>
					<div id="terapiaOpis">
					<div class="text100"><h3>Terapia manualna</h3><p>Terapia manualna jest to specyficzny zabieg wykonany dłonią terapeuty w celu zniwelowania wzmożonego napięcia pojawiającego się w organizmie, a także przywrócenia właściwej ruchomości w stawach.Terapia manualna jest to specyficzny zabieg wykonany dłonią terapeuty w celu zniwelowania wzmożonego napięcia pojawiającego się w organizmie, a także przywrócenia właściwej ruchomości w stawach. </p></div>
					</div>
					<div id="masazOpis">
					<div class="text100"><h3>Masaż klasyczny</h3><p>Masaż to  przyjemny, kojący zmysły, delikatny zabieg dający ulgę psychofizyczną zmęczonemu ciału. Terapia manualna jest to specyficzny zabieg wykonany dłonią.  terapeuty w celu zniwelowania wzmożonego napięcia pojawiającego się w organizmie, a także przywrócenia właściwej ruchomości w stawach. </p></div>
					</div>
					<div id="treningOpis">
					<div class="text100"><h3>Trening motoryczny</h3>
					<p>To trening mający na celu poprawę siły mięśniowej nie tylko po urazach, ale również pozwalający przygotować ciało pod konkretną dyscyplinę sportową. Każdy jest w stanie pójść na siłownię Jednak nie każdy jest w stanie wykonać poprawnie każde ćwiczenie. To trening mający na celu poprawę siły mięśniowej nie tylko po urazach,</p></div>
					</div>
					<div id="gimnastykaOpis">
					<div class="text100">
					<h3>Gimnastyka korekcyjna</h3><p>Szereg ćwiczeń dobieranych pod indywidualne możliwości każdego pacjenta oraz schorzenie  z którym się zmaga.  Odpowiedni zestaw pomaga zwalczyć dolegliwości bólowe, utrzymać  siłę mięśniową oraz ruchomość. Szereg ćwiczeń dobieranych pod indywidualne możliwości każdego </p></div>
					</div>
					<div id="biurowyOpis">
					<div class="text100"><h3>Masaż biurowy</h3><p>Masaż dla zmęczonych stresem pracowników, którzy przez wiele godzin powtarzają te same czynności w pozycji siedzącej.  Wykonany na łóżku siedzącym bądź leżącym. Podczas zabiegu nie jest wymagany strój do przebrania. Szereg ćwiczeń dobieranych pod indywidualne możliwości każdego</p></div>
					</div>
				</div>
			</main>
		</section>

		<section id="oferta">
			<h2>Oferta i cennik</h2>
			<div>
				<h3>Oferta dla klienta indywidualnego</h3>
				<img src="img/dziecko.jpeg"/>
				<table>
				<tr>
					<td>Usługa</td><td>Czas</td><td>Cena</td>
				</tr>
				<tr>
					<td>Terapia manualna</td><td>60'</td><td>120 zł</td>
				</tr>
				<tr>
					<td>Masaż</td><td>45'</td><td>120 zł</td>
				</tr>
				<tr>
					<td>Gimnastyka korekcyjna</td><td>30'</td><td>80 zł</td>
				</tr>
				<tr>
					<td>Trening na siłowni</td><td>60'</td><td>100 zł</td>
				</tr>
				</table>
				<p>Cena zawiera dojazd do klienta na terenie miasta Warszawy. Ceny usług świadczonych poza Warszawą ustalane są indywidualnie.</p>
			</div>
			<div><h3>Oferta dla firm, szkół oraz zorganizowanych grup</h3>
				<img src="img/joga.jpeg"/>
				<table>
				<tr>
					<td>Usługa</td><td>Czas i cena</td>
				</tr>
				<tr>
					<td>Masaż biurowy</td><td>do uzgodnienia</td>
				</tr>
				<tr>
					<td>Korektywa w grupie</td><td>do uzgodnienia</td>
				</tr>
				</table>
				<p>Jeśli są Państwo zainteresowani ofertą proszę o kontakt telefoniczny bądź poprzez formularz kontaktowy.</p>
				<button>Formularz kontaktowy</button>
			</div>
		</section>

		
		
		<footer id="kontakt">
			<h3>Kontakt</h3>
			<div id="photo">
				<img src="img/matt.jpg" alt="Mateusz Kuczkowski- fizjoterapeuta w Warszawie" width="100%"/>
				<p>Tel. 721-762-865</br>Godziny pracy: pn-pt 7:00-20:00 </p>
			</div>
			<div id="form">

				<p class="warning">
				<?php 
					
					//KOMUNIKATY NA STRONĘ
					if (isset($_SESSION["done"])) {
						echo $_SESSION["done"];
						}
					if (isset($_SESSION["fail"])) {
						echo $_SESSION["fail"];
						}
					if (isset($_SESSION["error"])) {
						echo $_SESSION["error"];
					 	}
				?>
				</p>
				<form method="POST">				
				<fieldset>
				<label for="name">Imię i nazwisko<span>*</span></label>
				<input type="text" name="name" value="<?php if(isset($_POST["name"])) echo $_POST["name"];?>">
				</fieldset>
				<fieldset>
				<label for="mobile">Numer telefonu<span>*</span></label>
				<input type="mobile" name="mobile" value="<?php if(isset($_POST["mobile"])) echo $_POST["mobile"];?>">
				</fieldset>
        		<fieldset>
        		<label for="message">Wiadomość<span>*</span></label>
        		<textarea rows="2" id="textarea"></textarea>
				<input type="textarea" name="message" value="<?php if(isset($_POST["message"])) echo $_POST["message"];?>" id="textareaform" rows="3">
				</fieldset>

				<input type="submit" value="Wyślij">
			</form>
			</div>
		</footer>
	<div id="author">Icons are made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>&nbsp;Licence: <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">&nbsp;CC 3.0 BY.</a>&nbsp;Logo is made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker.</a></div>
	<script>
	<?php
	if(isset($_SESSION["error"])||isset($_SESSION["fail"])||isset($_SESSION["done"]))
		echo 
	"$( document ).ready(function() {
        document.body.scrollTop = 3500; // For Chrome, Safari and Opera 
        document.documentElement.scrollTop = 3500; // For IE and Firefox
    });";
    if (isset($_SESSION["done"])) 
		unset($_SESSION["done"]);
	if (isset($_SESSION["fail"]))
		unset($_SESSION["fail"]);
	if (isset($_SESSION["error"]))
		unset($_SESSION["error"]);
    ?>
	</script>
</body>
</html>