<?php

	$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
	print_r($m);
   echo "Connection to database successfully";
   
?>