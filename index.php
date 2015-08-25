<?php
// Always include this first
require dirname(__FILE__).'/functions.php';

get_template('header.php', array('title' => 'Landing Page'));
?>

<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<main id="main" class="site-main" role="main">
				<div class="col-sm-8">

					<?php
					$data = array(
						'people' => array(
							'Brian',
							'Anthony',
							'Chris',
							'Matt',
							'Kristen',
							'Galen',
							'Stephen',
						),
						'places' => array(
							array(
								'name' => 'Jackson, WY',
								'zip' => '83002',
							),
							array(
								'name' => 'Island Park, ID',
								'zip' => '83429',
							),
						),
					);
					get_template('partials/loops/people-loop.php', $data);
					?>

				</div><!-- /col -->
			</main>

			<?php get_template('sidebar.php'); ?>

		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- #primary -->

<?php
get_template('footer.php');
