<?php
$file=json_decode(file_get_contents('results15.json'),true);
echo $file[0]['sch_no'];
?>