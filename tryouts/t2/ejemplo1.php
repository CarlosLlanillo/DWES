<?php
switch ("x") {
    case  0:
        print "cast 0";
        break;
    case "x":
        print "x";
        break;
}

$arr = ["value"];
function cb1($a, $b)
{
    return $a .= " $b";
}
var_dump(array_map("cb1", $arr, $arr));
