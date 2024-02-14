<?php 
	if(!is_dir("images")) mkdir("images");

	foreach (scandir("images") as $items) {
		if(!in_array($items, [".", ".."])) {
			unlink("images/".$items);
		}
	}

	echo "Imagens deletadas com sucesso";
?>