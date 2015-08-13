<? php
	required_once (dirname (_DIR_)  . “/head-utils.php”);
?>


//-------- HEADER --------

<div class="container">

	<header>

		<?php required_once (dirname (_DIR_)  . “/header.php”); ?>

	</header>


<!-------- Section -------->

	<div class="row">
		<section class="side-panel col-md-3">
			<?php required_once (dirname (_DIR_)  . “/content.php”); ?>
		</section>

		<section class="main-content col-md-9">
			<h1>Hello World</h1>
			<p>This is the main page content here.</p>
		</section>
	</div>



	<!-------- Footer -------->


	<footer class="footer">
		<?php required_once (dirname (_DIR_)  . “/footer.php”); ?>
	</footer>


</div><!-- .container -->

</body>



</html>


?>