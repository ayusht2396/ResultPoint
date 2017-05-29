<?php
$file=json_decode(file_get_contents('results15.json'),true);
echo '<pre>'.print_r($file,true).'</pre>';
?>