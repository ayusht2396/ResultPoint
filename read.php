<?php
$scls=json_decode(file_get_contents('results15.json'),true);
echo sizeof($scls[0]['subjects']);
    ?>