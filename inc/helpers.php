<?php

// is production switch for serving up compiled stylesheets
function is_production() {
	return ( function_exists('is_wpe') && is_wpe() );
}

function is_staging() {
	return ( function_exists('is_wpe_snapshot') && is_wpe_snapshot() );
}


// Print Pretty var dump
function debug($bug) {
	echo '<pre>';
		print_r($bug);
	echo '</pre>';
}
