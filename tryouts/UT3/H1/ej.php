<?php
setlocale(LC_ALL, "es_ES");
print date("l, F Y");

$sum100 = 0;


for ($i = 10; $i < 100; $i++) {
    if ($i % 2 === 0) $sum100 += $i;
}
print "\n$i";
