<?php include('header.php')?>
<link rel="stylesheet" href="estilos.css">
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro de empleados</h1>
			</div>

			<div class="articulo">
				<form action="procesar.php" method="post" name="frm">
				    <p>Id. del empleado: <input type="text" name="idem"/></p>
					<br/>
					<label>Fecha de nacimiento: 
						<input type="date" name="bday">
					</label>
					<br/>
					<br/>
					<p>Nombre: &nbsp;&nbsp;<input type="string" name="nombre"/></p>
					<br/>
					<p>Apellido: &nbsp;&nbsp;<input type="string" name="apellido"></p>
					<br/>
					<p>Direccion: <input type="text" name="direccion"></p>
					<br/>
					<p>Telefono: &nbsp;<input type="text" name="tlfno"></p>
					<br/>
					<p>Sexo:  
					<input type="radio" id="hombre" name="sexo" value="Hombre">
					<label for="hombre">Hombre</label>
					<input type="radio" id="mujer" name="sexo" value="Mujer">
					<label for="Mujer">Mujer</label>
					<input type="radio" id="otro" name="sexo" value="Otro">
					<label for="html">Otro</label>
				    </p>
					<br/>
					<input type="submit" value="Enviar" style='width:70px; height:25px'/>	
					</select>
			
				</form>
			</div>
		</div>
	</section>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<?php include('footer.php')?>
</body>
</html>