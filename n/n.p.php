<?php
  // vsco
	$r=$sql->getData('SELECT * FROM nn_articles WHERE 1 ORDER BY created DESC');

	echo json_encode(array('v'=>$r));

?>
