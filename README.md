<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dasboard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
	    :root {
 
    --color-1: #003366;
    --color-2: #336699;
    --color-3: #6699ff;
  }
  
  * {
    font-family: "Segoe UI";
  }
  
  body, html {
    margin: 0;
    padding: 0;
  }

  .parte-ulun {
    height: 60px;
    width: 100vw;
    background: var(--color-1);
    color: #fff;
    position: fixed;
    top: 0;
    left: 0;
    box-shadow: 0 0 25px #333;
  }

  .parte-ulun h1 {
    margin: 0;
    padding: 0.5em 1em;
    font-weight: 600;
    font-size: 1.5rem;
    overflow: hidden;
    white-space: nowrap;
  }
  
  .parte-ulun header {
    width: 80vw;
    height: 60px;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }
  
  .parte-ulun header .div-logo {
    width: 65px;
  }
  
  .parte-ulun header .div-logo img {
    width: 100%;
  }

  .parte-ulun header nav ul {
    display: flex;
    flex-direction: row;
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  .parte-ulun header nav ul li a {
    color: #fff;
    padding: 0 1em;
    font-weight: 600;
    text-decoration: none;
    text-transform: uppercase;
    line-height: 60px;
    height: 60px;
    display: block;
    border-bottom: 0px solid transparent;
    transition: 0.9s all;
  }

  .parte-ulun parte-ulun  header nav ul li a:hover {
    background: var(--color-2);
    border-bottom: 5px solid #f00;
  }
  
  .parte-ulun header nav ul li ul {
    background: var(--color-2);
    position: absolute;
    flex-direction: column;
    border-radius: 0 0 10px 10px;
    min-width: 200px;
    max-height: 0;
    overflow: hidden;
    transition: 0.9s all;
    border-bottom: 0px solid transparent;
  }
  
  .parte-ulun  header nav ul li:hover ul {
    max-height: 500px;
    opacity: 1;
  }
  
  .parte-ulun parte-ulun  header nav ul li ul li a:hover {
    border-bottom: 0 solid transparent;
    background: var(--color-3);
  }
  
  .parte-ulun header header nav ul li:hover > a {
    background: var(--color-2);
  }
  
  .parte-ulun header nav ul li ul:hover {
    border-bottom: 5px solid #f00;
  }
  
.parte-ulun header #minibotton, #miniapp {
  display: none;
}

.main {
  width: 100vw;
  min-height: 80vh;
  background: linear-gradient(
      to right,
      rgba(0, 50, 100, 0.5),
      rgba(205, 200, 0, 0.5),
      rgba(255, 255, 255, 0.5)
    ),
    url("../img/bg.jpg");
  background-size: cover;
  margin-top: 60px;
  display: flex;
}

/*tabela metan*/
.main .main-text {
  color:#fff;
  text-shadow: 0 0 5px #000;
  font-size: 1.0rem;
  text-align: left;
  margin: 2rem auto;
  background: rgba(0, 0, 0, 0.1);
  padding: 0rem 2rem 2rem ;
  width: 100vw;
}

.main .main-text h1 {
  margin: 0;
  padding: 0;
  font-size: 5rem;
  font-weight: 900;
}

.main .main-text p {
  margin: 0;
  padding: 0;
}

.Footer {
  width: 100vw;
  height: 80px;
  background: var(--color-1);
  text-align: center;
  color: #fff;
  padding: 1rem;
  text-transform: uppercase;
}

  fieldset label{
    display: inline-block;
    width: 200px;
    padding: 0.5rem 0;
    vertical-align: top;
  }
  
  fieldset input[type='text'],textarea{
    width: calc(100%- 200px);
    padding: 0.7em;
    border: 1px solid #024;
    border-radius: 5px;
    margin: 0.8em 0;   
  }
  
  fieldset input[type='reset'],
  fieldset input[type='submit']{
    border: 1px solid #002244;
    padding: 0.5em 1em;
    font-weight: 700;
    cursor: pointer;
  }

fieldset table{
  width: 100%;
  border-collapse: collapse;
}

fieldset table thead{
  background: #036;
  color: #fff;
}

fieldset table thead th{
  padding: 0.5em;
  border: 1px solid #036;
}

fieldset table tbody td{
  padding: 0.5em;
  border: 1px solid #036;
}

fieldset table tbody tr{
  background: rgba(255, 255, 255, 0.9);
}

fieldset table tbody tr:nth-child(even){
  background: rgba(175, 235, 245, 0.9);
}

fieldset a{
  color: #024;
  text-decoration: none;
  font-size: 1em;
  background: #fff;
  display: inline-block;a
  padding: 0.3em 1em;
  border: 1px solid #024;
  margin: 1em 0;
  text-shadow: none;
}

table td{
  text-shadow: none;
  color: #024;
  font-size: 0.8em;

/*----------------mobile screen---------------*/
@media screen and (max-width: 768px){

  .box-header header #miniButton{
    display: flex; font-size: 2em;
    padding: 0.2em 0.5em;
    cursor: pointer;
  }

  .main .main-text h1{
    font-size: 4rem;
  }

  .main .main-text p{
    display: none;
  }

  .main .main-text{
    width: 100%;
  }

  .box-header header {
    width: 100%;
  }

  .box-header header nav ul{
    flex-direction: column;
    background: #024; left: 0px;
    position: absolute; top: 60px;
    width: 100%;
  }

  .box-header header .div-logo{
    position: absolute;
    right: 20px;
    z-index: 100;
    width: 75px;
    top: 10px
  }

  .box-header header h1{
    position: absolute;
    text-transform: uppercase;
    left: 40px; font-weight: 200;
  }
  /*
  .box-header header nav ul li{
    position: relative;
  } */

  .box-header header nav ul li ul{
    top: auto;
    left: 35%;
    
  }
  
  .box-header header nav{
    display: none;
  }

  .box-header header input:checked ~ nav{
    display: flex;
  } 
}
    </style>
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
