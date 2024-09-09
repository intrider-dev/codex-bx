<?php
class Sorter
{
    public static function By($arr, $field){
		usort($arr, fn($a, $b) => $a[$field] <=> $b[$field]);
		return $arr;
	}
}
?>
