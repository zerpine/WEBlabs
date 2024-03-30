<?php
$str = 'ahb acb aeb aeeb adcb axeb';
$pattern = '/a..b/';
preg_match_all($pattern, $str, $matches);
echo "task 1a.Answer:",  "<br />";

foreach ($matches[0] as $match)
{
    echo $match, "<br />";
}

echo "\n";

//task 1b
$str = 'a1b2c3';

function degree($matches) {
    return pow($matches[0], 3);
}

$new_str = preg_replace_callback('/\d+/', 'degree', $str);
echo "task 1b.Answer:",  "<br />";
echo $new_str;