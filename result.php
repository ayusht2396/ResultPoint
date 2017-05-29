<html>
<head>
    <title>Result</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
    <body>
        <header>
            <img src="logo.png" alt="MANIT-LOGO" width="100px" height="100px">
            <h1>ResultPoint</h1>
        </header>
       <div class="rmiddle">
        <?php
    $scholar=trim(stripslashes(htmlspecialchars($_POST['scholar'])));
    $scls=json_decode(file_get_contents('results15.json'),true);
    $os=-1;
    for($i=0;$i<sizeof($scls);$i++)
    {
        if($scls[$i]['sch_no']==$scholar)
        {$os=$i;
         break;
        }
    }
        if($os!=-1)
        {
    $sgpa=$scls[$os]['sgpa'];
    $name=$scls[$os]['name'];
    echo "<p> Congrats $name! Your  SGPA is $sgpa </p>";
           }
           else echo "<p>Invalid Scholar Number</p>";?>
        </div>
        <footer><p>&copy; 2017  Ayush Tripathi</p></footer>
    </body>
</html>
