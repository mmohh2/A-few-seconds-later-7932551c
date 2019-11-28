<?php
$s = readline();
$letter=strpos($s, "s");
if ($letter){
    print str_replace("s", "seconden" , $s);
} else{
    print "geen tijd";
}


