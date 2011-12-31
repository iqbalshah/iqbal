<?php
srand((float) microtime() * 10000000);
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 4);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
echo $input[$rand_keys[2]] . "\n";
echo $input[$rand_keys[3]] . "\n";
?>
