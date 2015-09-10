<?php
// Always include this first
require dirname(__FILE__).'/functions.php';

get_template('header.php', array('title' => 'Landing Page'));
?>

<div id="primary" class="content-area">

			<?php
			//get_template('sidebar.php');
			?>

			<main id="main" class="site-main" role="main">

				<div class="container-fluid">
					<div class="row">

						<?php
						// User Profile
						get_template('partials/account/login.php'); ?>

		    		</div> <!-- / row -->
				</div><!-- /container -->

			</main>

</div><!-- #primary -->

<?php
get_template('footer.php');