<?php
	// category
	$r=$sql->getData('SELECT * FROM nn_categories WHERE 1 ORDER BY created DESC');

	echo json_encode(array('c'=>$r));

?>
