<?php

$str = "HellÇo fri3nd, you're
       looking          good today!";

print_r(str_word_count($str, 1));
echo "</br>";

print_r(str_word_count($str, 2));
echo "</br>";

print_r(str_word_count($str, 1, 'àáãç3 '));
echo "</br>";

echo str_word_count($str);
echo "</br>";

?>