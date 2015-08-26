<?php
// If it's not local() and not staging() then must be production
function is_production() {
	return ( !is_local() && !is_staging() );
}

// Staging server must have "staging." in the URL
function is_staging() {
	return ( stripos( $_SERVER['HTTP_HOST'], 'staging.' ) !== false );
}

// Local domains need to have ".dev" in them
function is_local() {
  return ( stripos( $_SERVER['HTTP_HOST'], '.dev' ) !== false );
}


// Print Pretty var dump
function debug($bug) {
	echo '<pre>';
		print_r($bug);
	echo '</pre>';
}
