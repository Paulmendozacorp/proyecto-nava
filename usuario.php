
<?php include('header.php'); ?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Usuario</h1>
			</div>

			<div class="articulo">
				<article>
					<p></p>
					<br/>
					<p>  </p>
					<br/>
					<p></p>
					<br/>
					<p></p>
				</article>
				<form action="welcome.php" method="post">
                Nombre: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                <input type="submit">
                </form>
			</div>

            <?php include('sidebar.php'); ?>	
		</div>
	</section>
	<?php include('footer.php'); ?>
</body>
</html>