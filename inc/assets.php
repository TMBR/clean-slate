<?php

function header_assets() {
	$stylesheet_path = is_production()
			? asset_path_revved('css/application.min.css')
			: asset_path('css/application.css');
	?>
  <link href="<?php echo $stylesheet_path; ?>" media="all" rel="stylesheet" />
  <?php
}

function footer_assets() {
	$vendorscript_path = is_production()
			? asset_path_revved('js/vendor.min.js')
			: asset_path('js/vendor.js');
	$appscript_path = is_production()
			? asset_path_revved('js/application.min.js')
			: asset_path('js/application.js');
	?>
	<script type='text/javascript' src="<?php echo $vendorscript_path; ?>"></script>
	<script type='text/javascript' src="<?php echo $appscript_path; ?>"></script>
  <?php
}

function asset_path($target) {
	return '/public/' . $target;
}

// asset revving for serving up hashed files
// use `gulp build` to generate new releases and builds
function asset_path_revved($target) {
	$scripts = file_get_contents(ROOT_PATH . '/public/rev-manifest.json');
	$scripts = json_decode($scripts);
	if ( isset( $scripts->{$target} ) ) {
		return '/public/' . $scripts->{$target};
	}
	return $target . ' :: file-not-found-in-public-dir';
}