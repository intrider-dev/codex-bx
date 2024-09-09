<?php
class Sorter
{
    public static function By($arr, $field){
		print_r(1);
		usort($arr, fn($a, $b) => $a[$field] <=> $b[$field]);
	}
}
?>
