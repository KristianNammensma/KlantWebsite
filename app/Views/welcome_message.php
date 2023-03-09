<?php $userModel = new \App\Models\UserModel(); 


$dienstmodel = new \App\Models\dienstModel();

$ervaringmodel = new \App\Models\ervaringModel();
$evmodel = $ervaringmodel->findAll();
$dienstM = $dienstmodel->findAll();
$users = $userModel->findAll();

?>



<?= $this->extend('base') ?>

<?= $this->section('header') ?>

    <div class="header">
        <div class="header2">
            <a id="col-2" class="fa fa-phone" href="tel:+31 (0) 6 28 84 88 37"> <span class="spantext">+31-6-25426731</span> </a>

            <a id="col-2" class="fa fa-clock-o" href="">
                <span class="spantext">Ma - Vr: 9:00 - 16:00</span>
            </a>

            <a id="col-2" href="mailto:info@dlab.nl" class="fa fa-envelope-o"> <span class="spantext">info@dlab.nl</span> </a>


            <nav id="socials">
                <a class="fa fa-facebook" href="https://www.facebook.com/pg/DLab058/%22%3E"></a>
                <a class="fa fa-linkedin" href="https://www.linkedin.com/company/dlab-friesland%22%3E"></a>
                <a class="fa fa-instagram" href="https://www.instagram.com/dlab_lwd/%22%3E"></a>
            </nav>
        </div>
        <div class="header-white">
                <a class="logolink">
                    <img id="logoimg" src="./imgs/DLab_Logo_FC100.png"></a>
                <a class="active">Home</a>
                <a id="Projecten">Projecten</a>
                <a id="Diensten">Onze Diensten</a>
                <a id="OverOns">Over ons</a>
                <a id="Nieuws">Nieuws</a>
                <a id="Contact">Contact</a>
    </div>


<?= $this->endSection('header') ?>

<!-- CONTENT -->

<?= $this->section('main') ?>

<?= $this->section('img') ?>
	<div class="header-photo">
		
			<div class="Dlab-info">
				<h1>D'Lab</h1>
				<hr>
				<div class="Dlab-info-container">
					<img id="aboutimg" src="./imgs/logo-white.png" alt="about1">

					<div class="infotext">
						<p class="infotext-p">D'Lab is een fablab, ook wel maaklab genoemd, waar zowel bedrijven als particulieren als wel studenten terecht kunnen voor het ontwikkelen van allerlei soorten prototypes.
						<br> <br>
						Het D'Lab is onderdeel van het Friesland College maar werkt ook nauw samen met de Frisian Design Factory (onderdeel van NHL/Stenden).
						<br> <br>
						</p>
						<a id="Meer-a" href="https://www.facebook.com/pg/DLab058/%22%3E">Meer..</a>
					</div>
				</div>
			</div>
		</div>
<?= $this->endSection('img') ?>

	<div id="above">
			<div class="above-container">
				<h1>Onze diensten</h1>
				<div class="above-hr"><hr></div>
				<!-- <div class="navigation">
					<button onclick="lb()" id="left-b"><i class="fa fa-angle-left"></i></button>
					<button onclick="rb()" id="right-b"><i class="fa fa-angle-right"></i></button>
				</div> -->
			</div>
		</div>

<?= $this->section('onesection') ?>

	<div class="scroll-img">

			<div class="img">
				<img class="service" src="./imgs/service-01.jpg">
				<h1 class="scrolltitle">3D Printen - Objet30 Prime</h1>

				<p class="scrolltext">Deze hoogwaardige 3D printer print de fijnste ontwerpen in hoog detail. Het ondersteunende materiaal is wateroplosbaar en daardoor eenvoudig en zonder 'littekens' te verwijderen.</p>
			</div>

			<?php foreach($dienstM as $d){
				if (empty($d['titel'])) {
					
				} else {
					echo "
					<div id='img1'>".
						"<img class='service' src='./imgs/".$d['img']."'>".
						"<h1 class='scrolltitle'>".$d['titel']."</h1>".

						"<p class='scrolltext'>".$d['info']."</p>".
					"</div>";
				}
			} ?>
				

			

			<!-- <div id="img3">
				<img src="" alt="">
		
				<p>3D Printen - Formlabs</p>

				<p>Deze hars printer kan met behulp van laserlicht en een speciale vloeistof heel gedetaileerd 3D-printen. Zeer geschikt voor bijvoorbeeld sieraden of miniaturen.</p>
			</div>

			<div id="img4">
				<img src="" alt="">
		
				<p>Lasersnijden</p>

				<p>De lasersnijder is het werkpaard van het lab. In rap tempo worden diverse materialen (geen metalen) gesneden en/of gegraveerd. De maximale afmetingen bedragen 100 bij 60 cm.</p>
			</div>

			<div id="img5">
				<img src="" alt="" id="">

				<p>CNC</p>

				<p>Deze gloednieuwe CNC vreest moeiteloos door hout en aluminium. Lever het 3D model aan in STL of Fusion360 formaat en de machine doet de rest.</p>
			</div>

			<div id="img6">
				<img src="" alt="">
				<p>3D keramiekprinter</p>
				
				<p>Ook nieuw in ons pallet is deze grote delta 3D keramiekprinter. De klei wordt laagje voor laagje op elkaar geprint. Het eindresultaat wordt vervolgens afgebakken in een grote oven.</p>
			</div>

			<div id="img7">
				<img src="" alt="">
				<p>3D-Scannen</p>

				<p>Is een object lastig na te tekenen in een CAD programma dan kan ook gebruik worden gemaakt van een 3D-handscanner. De scan wordt omgezet naar bijvoorbeeld een STL bestand.</p>
			</div>

			<div id="img8">
				<img src="" alt="">
				<p>Printen</p>

				<p>Posters, stickers en canvas kan worden geprint op onze grote printer van 135 cm breed. Stickers kunnen naderhand worden uitgesneden met de automatische vinylsnijmachine.</p>
			</div>

			<div id="img9">
				<img src="" alt="">
				<p>Prototyping</p>

				<p>Een idee voor een nieuw product of dienst maar zelf niet de middelen of de kennis om dit verder alleen uit te werken? In het D'lab is de beschikking over zowel de machines als wel de kennis.</p>
			</div>

			<div id="img10">
				<img src="" alt="">
				<p>Workshops</p>

				<p>Leren 3D-printen, 3D-tekenen, Ontwerpen voor de lasersnijder, prototypen, werken met electronica, etc? Vraag naar de mogelijkheden.</p>
			</div>

			<div id="img11">
				<img src="" alt="">
				<p>Metaal en houtbewerking</p>

				<p>Voor metaalwerk hebben we de beschikking over een grote metaalhal en een houthal met een diversiteit aan machinerie.</p>
			</div>

			<div id="img12">
				<img src="" alt="">
				<p>Divers gereedshap</p>

				<p>Naast de grote machines is er ook een diversiteit aan klein handgereedschap beschikbaar.</p>
			</div> -->

	<div class="afspraak">
		<div class="afspraak-container">
			<h1>Maak een afspraak</h1>

			<p>Voor het maken van een afspraak voor het gebruik maken van machines, mail met info@dlab.nl <br>

				<br>

				Voor vragen m.b.t. prototyping mogelijkheden e.d, mail met info@dlab.nl <br>

				<br>
				
				Telefoon: +31 (0) 6 28 84 88 37</p>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection('onesection') ?>


<?= $this->section('twosection') ?>


	<div class="section-title-wrap mb-30">
        <h1>Projecten</h1>
        <hr>
    </div>

    <div class="project-items">
        <ul>
            <li><a id="All" href="#All">All</a></li>
            <li><a id="Design" href="#3D Design">3D Design</a></li>
            <li><a id="Art" href="#Art">Art</a></li>
            <li><a id="Electronica" href="#Electronica">Electronica</a></li>
            <li><a id="Laser" href="#Laser">Laser</a></li>
        </ul>
    </div>


	<div class="project-photos">
		<img class="project" id="project1" src="./imgs/project-h1-01.jpg" alt="01">
		<img class="project" id="project2" src="./imgs/project-h1-02.jpg" alt="02">
		<img class="project" id="project3" src="./imgs/project-h1-03.jpg" alt="03">
		<img class="project" id="project4" src="./imgs/project-h1-04.jpg" alt="04">
		<img class="project" id="project5" src="./imgs/project-h1-05.jpg" alt="05">
		<img class="project" id="project6" src="./imgs/project-h1-06.jpg" alt="06">
		<img class="project" id="project7" src="./imgs/project-h1-07.jpg" alt="07">
		<img class="project" id="project8" src="./imgs/project-h1-08.png" alt="07">
	</div>
   
<?= $this->endSection('twosection') ?>

<?= $this->Section('threesection') ?>
	<div id="ervaring-top">
		<hr>
		<h1 id="ervaringtext">Ervaringen van anderen</h1>
		<hr>
	</div>
	<div class="ervaring-inhoud-container">
		<?php foreach($evmodel as $u)
		{
			if(empty($u["naam"]))
			{

			} else
			{
				echo "<div class='ervaring-inhoud-inhoud'>".
						"<div class='quote'>".
					"<p>".$u['info']."</p>".
				"</div>".

				"<div class='client'>".
					"<img src=/imgs/".$u['img']." id='client-pfp'>".
					"<div class='client-info'>".
						"<p id='name'>".$u['naam']."</p>".
						"<p id='extra'>".$u['bedrijf']."</p>".
					"</div>".
				"</div>".
			"</div>";
			}
		}
		?>
		</div>
<!-- 

		<div class="ervaring-inhoud-inhoud">
			<div class="quote">
					<p>“Ik word altijd erg goed geholpen door de mensen in het D'Lab”</p>
			</div>

			<div class="client">
				<figure id="client-pfp"></figure>
				<div class="client-info">
					<p id="name">Mr. Hans</p>
					<p id="extra">Floqr</p>
				</div>
			</div>
		</div>

		<div class="ervaring-inhoud-inhoud">
			<div class="quote">
					<p>“Ik kon meteen de markt op met mijn prototype!”</p>
			</div>

			<div class="client">
				<figure id="client-pfp"></figure>
				<div class="client-info">
					<p id="name">Mr. Kroondijk</p>
					<p id="extra">Friesland College</p>
				</div>
			</div> 			
		</div>
	</div> -->
<?= $this->endSection('threesection') ?>

<?= $this->section('nieuws') ?>
<div class="nieuws-container">
	<div class="nieuws-top">
		<h1 id="nieuws-title">Nieuws</h1>
		<hr>
	</div>
		

	<section class="containernieuws">
		<!-- <div class="row">
			<img src="./imgs/post-01.jpg">
			<div class="background">
				<h1>Expositie Valencia</h1>
				<p class="date">1 April, 2019</p>
				<p class="bgtext">In de eerste week van april vindt er een expositie plaats in Valencia waar ook stukken van onze studenten worden tentoongesteld</p>
				<button class="btn">
				<a href="https://www.facebook.com/pg/DLab058/%22%3E">Lees verder</a>
				</button>
			</div>
		</div>
		<div class="row">
			<img src="./imgs/post-02.jpg">
			<div class="background">
				<h1>Circulair Plastic Hub</h1>
				<p class="date">2 April, 2019</p>
				<p class="bgtext">Het D'Lab gaat zich samen met verschillende partners inzetten voor het ontwikkelen van productiemethodes o.b.v. gerecycled plastic.</p>
				<button class="btn">
					<a href="https://www.facebook.com/pg/DLab058/%22%3E">Lees verder</a>
				</button>
			</div>
		</div> -->

		<?php foreach($users as $u)
		if(empty($u['titel']))
		{

		}else
		{
			echo "<div class='row'>".
			"<img src='/imgs/".$u['img']."'>".
			"<div class='background'>".
				"<h1>".$u['titel']."</h1>".
				"<p class='date'>".$u['datum']."</p>".
				"<p class='bgtext'>".$u['info']."</p>".
					"<a href='https://www.facebook.com/pg/DLab058/%22%3E'><button class='btn'>Lees verder</button></a>".
			"</div>".
		"</div>";
		}
		?>

	</section>
</div>

<?= $this->endSection('nieuws') ?>
<?= $this->endSection('main') ?>

<?= $this->section('footer-widget-area') ?>
<div class="footer-widget-area"></div>
<?= $this->endSection('footer-widget-area') ?>

<?= $this->section('footer') ?>
<div class="footerimgtext">
	<img src="./imgs/logo-white.png" id="logo">
	<p class="footertext">D'Lab is de plek voor het ontwikkelen van innovative oplossingen. Door de centrale locatie in het centrum van de stad en midden tussen een variëteit van complementaire bedrijven is dit de ideale plek voor het maken van slimme protoypes.</p>
	
	<div class="social-icons social-icons--two mt-22">
		<a href="https://www.facebook.com/pg/DLab058/">
			<i class="fa fa-facebook"></i>
		</a>
		<a href="https://www.linkedin.com/company/dlab-friesland">
			<i class="fa fa-linkedin"></i>
		</a>
		<a href="https://www.instagram.com/dlab_lwd/">
			<i class="fa fa-instagram"></i>
		</a>
	</div>
</div>

<div class="Info_Container">
	<h3 class="footerh">Informatie</h3>
	<ul class="list list-6">
		<li>
			<a href="#projects">Onze Projecten</a>
		</li>
		<li>
			<a href="#services">Onze Diensten</a>
		</li>
		<li>
			<a href="#about">Over Ons</a>
		</li>
		<li>
			<a href="#news">Laatste nieuws</a>
		</li>
		<li>
			<a href="#reserveren">Reserveren</a>
		</li>
	</ul>
</div>
<div class="widget-item">
	<div class="widget-body">
		<div class="widget-title">
			<h3 class="footerh">D'Lab locatie</h3>
		</div>
		<div class="widget-body">
			<div class="office-info">
				<p>
					<i class="fa fa-map-marker"></i>
					<a href="https://www.google.nl/maps/place/Blokhuisplein+40,+8911+LJ+Leeuwarden/@53.1998437,5.7980307,17z/data=!3m1!4b1!4m5!3m4!1s0x47c8fe85c9bf22b3:0xe19864bd64555d62!8m2!3d53.1998405!4d5.8002194">Blokhuisplein 40, Leeuwarden, Nederland</a>
				</p>
				<p>
					<i class="fa fa-phone"></i>
						<a href="tel:+31 (0) 6 28 84 88 37">+31 (0) 6 28 84 88 37</a>
				</p>
				<p>
					<i class="fa fa-envelope-o"></i>
					<a href="mailto:info@dlab.nl">info@dlab.nl</a>
				</p>
				<p>
					<i class="fa fa-clock-o"></i>
					<a>Ma - Vr: 9:00 - 16:00</a>
				</p>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection('footer') ?>

<!-- SCRIPTS -->
<?= $this->section('script') ?>
<script src="./JS/scroll.js"></script>
<script src="./JS/Diensten.js"></script>
<script src="./JS/projecten.js"></script>
<?= $this->endSection('script') ?>


<!-- -->


