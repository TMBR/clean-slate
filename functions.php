<?php
// Filesystem Path to the root of site
define('ROOT_PATH', dirname(__FILE__));

/**
 * Requires a file relative to the current webroot.  It also allows you
 * to pass an associative array of information to the template.
 * @param string $file Path to the template you want to load, relative to the webroot
 * @param array $data Associative array of information you want to be available to the template.
 * @return none
 */
function get_template($file, $data = array()) {
  extract( $data );
  require ROOT_PATH . '/' . $file;
}

get_template('inc/helpers.php');
get_template('inc/assets.php');
