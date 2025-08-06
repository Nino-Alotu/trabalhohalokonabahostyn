<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dasboard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="parte-ulun">
        <header>
				
		<label id="miniButton"  for="miniapp"> &#9776; </label>
		<input type="checkbox" id="miniapp">

        <div class="div-logo">
		    <img src="img/IOB.png">
        </div>

        <h1>Dashboard, <?php echo date("d M Y");?> - 
		<span id="oras"><?php echo date("H:m:s");?> </span></h1>
        <nav>
				<ul>
					<li> <a href="index.php"> home </a> </li>
					<li> <a href="#"> input </a> 
						<ul>
							<li> <a href="#">Fakuldade</a></li>
							<li> <a href="#">Departamento</a></li>
							<li> <a href="#">Programa Estudu</a></li>
						</ul>
					</li>
					<li> <a href="#"> process</a> 
						<ul>
							<li> <a href="?pagina=estudante"> Estudante</a></li>
							<li> <a href="#"> Badinas ba Eskola</a></li>
							<li> <a href="#"> krs</a></li>
						</ul>
					</li>
					<li> <a href="#"> output </a> 
						<ul>
							<li> <a href="#"> Relatorio</a></li>
							<li> <a href="#"> Horario</a></li>
							<li> <a href="#"> Absensia</a></li> 
						</ul>
					</li>
				</ul>
			</nav>
        </header>
    </div>
	
	<section class="main">
		<div class="main-text">
			<?php
			if(isset($_GET['pagina'])){
				$page =$_GET['pagina'];
				if($page=="estudante"){
					include 'php/estudante/view.php';
				}
				if($page=="form-estudante"){
						include 'php/estudante/form.php';
				}
	
			}

		else{

					// HOME BENVINDO
			echo" <center><h1>BENVINDO</h1>
			<strong><b>Mai iha Aplikasaun Programasaun WEB TI-ETI-2025</strong></b>
			<P> Programa ida ne'e hanesan Rezultadu husi Estuda programasaun website, iha Faculdade ICT, Departamento Tecnica Informatica</P></center>";
		}
			?>
		</div>
		
	</section>

	<div class="Footer">
		<strong>Tecnica Informatica ICT-IOB</strong><br>
		<i>IOB - 2025 </i>
	</div>

    
</body>
<script type="text/javascript">
	setInterval(function(){
		const data = new Date();
		const ors = data.getHours();
		const mnt = data.getMinutes();
		const sec = data.getSeconds();
		document.getElementById('oras').innerHTML=ors+':'+mnt+':'+sec},1000);
        </script>
</html>