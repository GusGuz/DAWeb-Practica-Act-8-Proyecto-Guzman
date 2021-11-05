<?php include('header.php')?>
<link rel="stylesheet" href="estilos.css">
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro de peliculas</h1>
			</div>
			<link rel="stylesheet" href="CSS/main.css" type="text/css">
			<div class="articulo">
				<form action="process.php" method="post" name="frm">
					<label>Fecha de Estreno: 
						<input type="date" name="estreno">
					</label>
					<br/>
					<br/>
					<p>Titulo: &nbsp;&nbsp;&nbsp;<input type="string" name="titulo"/></p>
					<br/>
					<p>Director:&nbsp;<input type="string" name="director"></p>
					<br/>
					<p>País: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="string" name="pais"></p>
					<br/>
					<div class="txt-center">
						<div class="rating">Rating: &nbsp;
							<input id="star5" name="star" type="radio" value="1" class="radio-btn hide" />
							<label for="star5">☆</label>
							<input id="star4" name="star" type="radio" value="2" class="radio-btn hide" />
							<label for="star4">☆</label>
							<input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
							<label for="star3">☆</label>
							<input id="star2" name="star" type="radio" value="4" class="radio-btn hide" />
							<label for="star2">☆</label>
							<input id="star1" name="star" type="radio" value="5" class="radio-btn hide" />
							<label for="star1">☆</label>
							<div class="clear"></div>
						</div>
					</div>
					<br/>
					<p>Genero:  
					<input type="radio" id="Accion" name="genero" value="Accion">
					<label for="accion">Accion</label>
					<input type="radio" id="Aventura" name="genero" value="Aventura">
					<label for="aventura">Aventura</label>
					<input type="radio" id="Animada" name="genero" value="Animada">
					<label for="animada">Animada</label>
					<input type="radio" id="Clasica" name="genero" value="Clasica">
					<label for="clasica">Clasica</label>
					<input type="radio" id="Comedia" name="genero" value="Comedia">
					<label for="comedia">Comedia</label>
				    </p>
					<br/>
					<input type="submit" value="Enviar" style='width:70px; height:25px'/>	
					</select>
			
				</form>
			</div>
		</div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	</section>
	<?php include('footer.php')?>
</body>
</html>