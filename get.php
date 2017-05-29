<?php
$file=fopen("data.csv",'r');
$schl="151111001";
$scls=fgetcsv($file);
$os=0;
for($i=0;$i<sizeof($schl);$i++)
    if($scls[$i]==$schl)
    {$os=i;
     break;}
$scls=fgetcsv($file);
echo $scls[$os];
$scls=fgetcsv($file);
echo $scls[$os];
echo $scls[$os]-1;
?> 