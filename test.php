<?php
$haystack = array('one', 'two', 'three');

$needle = 'two';

$result = in_array($needle, $haystack);

echo strval($result)."\n";
?>