
<?php include('header.php'); ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Empleado</h1>
			</div>

			<div class="articulo">
				<article>
					<p></p>
					<br/>
					<p>   </p>
					<br/>
					<p></p>
					<br/>
					<p></p>
				</article>
				<h1>Formulario</h1>

                <form action="/action_page.php">
                <label for="fname">NOMBRE:</label>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="lname">APELLIDOS:</label>
                <input type="text" id="lname" name="lname"><br><br>
                <input type="submit" value="Submit">
                </form>

                <p>Haga clic en el botón "Enviar" y los datos del formulario se enviarán a una página en el servidor .</p>
			</div>

            <?php include('sidebar.php'); ?>	
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>