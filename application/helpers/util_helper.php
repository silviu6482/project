<?php
	 function pr($array, $die=true){

		echo "<pre>";
		print_r($array);
		echo "</pre>";
		if ($die){
			die("DIE HERE");
		}

	}