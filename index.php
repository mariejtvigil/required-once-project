<?php
	require_once(dirname(_DIR_) . "lib/head-utils.php");
?>


//-------- HEADER --------

<div class="container">

	<header>

		<?php require_once(dirname(_DIR_) ."lib/header.php"); ?>

	</header>


<!-------- Section -------->

	<div class="row">
		<section class="side-panel col-md-3">

			<?php require_once(dirname(_DIR_) . "lib/content.php"); ?>

		</section>

		<section class="main-content col-md-9">
			<h1>Hello World</h1>
			<p>This is the main page content here.</p>
		</section>
	</div>



	<!-------- Footer -------->


	<footer class="footer"

		<?php require_once(dirname(_DIR_) . "lib/footer.php”); ?>

	</footer>


</div><!-- .container -->

</body>



</html>