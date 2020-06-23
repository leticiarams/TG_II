<?php

	for($i = 0; $i < 64600; $i++){
		$random = rand(0, 2);
		if ($random === 0){
			echo "M" . chr(10);
		}else {
			echo "F" . chr(10);
		}
	}
