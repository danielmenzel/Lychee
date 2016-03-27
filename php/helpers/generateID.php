<?php

/**
 * @return string Generated ID.
 */
function generateID() {

    mt_srand((double)microtime()*10000);
    $charid = md5(uniqid(rand(), true));
    $decid = hexdec(substr($charid,0,10));

	// Generate id based on the current microtime
	$id = str_replace('.', '', $decid);

	// Ensure that the id has a length of 14 chars
	while(strlen($id)<14) $id .= 0;

	// Return id as a string. Don't convert the id to an integer
	// as 14 digits are too big for 32bit PHP versions.
	return $id;

}

?>