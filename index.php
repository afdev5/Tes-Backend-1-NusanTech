<?php
function myMaze(int $size){
    $maze = "";
	$index = 0;
    $i = 1;
    $cek = true;
	while($i <= $size){
		if ($i % 2 != 0) {
			if($cek){
				$index = 2;
			} else {
				$index = $size - 1;
			}
			$maze = str_repeat("@", $size);
			$maze[$index - 1] = " ";
            print("$maze");
            $cek = !$cek;
		} else {
            $maze = str_repeat(" ", $size);
            $maze[1] = "@";
            $maze[$size-2] = "@"; 
            print("$maze");
		}
		print('<br>');
		$i++;
	}
}


myMaze(31);
?>