<?php
	// link
	$r=$sql->getData('SELECT * FROM nn_links WHERE 1 ORDER BY created DESC');

	echo json_encode(array('l'=>$r));

?>
