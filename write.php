<?php

$myfile=fopen("data.csv",'w');
for($i=131114001;$i<=131114167;$i++)
    fwrite($myfile,"\"$i\",");
?>