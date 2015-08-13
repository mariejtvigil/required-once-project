<?php

$PAGE_TITLE = "required-once-project";
require_once("lib/head-utils.php");
?>


//-------- HEADER --------

<div class="container">

	<header>


		<?php require_once("lib/header.php"); ?>
	</header>


<!-------- Section -------->

	<div class="row">
		<section class="side-panel col-md-3">
			<?php require_once("lib/side-panel.php"); ?>
		</section>

		<section class="main-content col-md-9">
			<h1>Hello World</h1>
			<p>This is the main page content here.</p>
		</section>
	</div>

	<footer class="footer">
		<?php require_once("lib/footer.php"); ?>
	</footer>
</div><!-- .container -->

</body>
</html>


?>