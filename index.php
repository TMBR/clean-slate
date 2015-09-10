<?php
// Always include this first
require dirname(__FILE__).'/functions.php';

// Example of json response data
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

get_template('header.php', array('title' => 'Landing Page'));
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="container-fluid">
			<div class="row">

				<?php
				// User Profile
				get_template('partials/panels/panel_profile.php'); ?>

				<?php
				// Thermal map
				get_template('partials/panels/panel_thermal.php'); ?>

				<?php
				// Charts
				get_template('partials/panels/panel_goals.php'); ?>

				<?php
				// Panel with drop down
				get_template('partials/panels/panel_dropdown.php'); ?>

				<?php
				// Panel with data set
				get_template('partials/loops/people-loop.php', $data); ?>

				<?php
				// Panel with Badges
				get_template('partials/panels/panel_badge.php'); ?>

				<?php
				// Charts
				get_template('partials/panels/panel_charts.php'); ?>

				<?php
				// Friends List
				get_template('partials/panels/panel_table.php'); ?>

			</div> <!-- / row -->
		</div><!-- /container -->

	</main>
</div><!-- #primary -->

<?php
get_template('footer.php');