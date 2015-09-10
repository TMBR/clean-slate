<?php
// Always include this first
require dirname(__FILE__).'/functions.php';

get_template('header.php', array('title' => 'Landing Page'));
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="container-fluid">
			<div class="row">

				<?php
				// groups
				$i = 0;
				while ( $i <= 6) {
					get_template('partials/panels/panel_groups.php');
					$i++;
				} ?>

			</div> <!-- / row -->
		</div><!-- /container -->

	</main>
</div><!-- #primary -->

<?php
get_template('footer.php');