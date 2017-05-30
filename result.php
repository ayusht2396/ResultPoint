<?php
           if(isset($_POST['bttn']))
           {
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
                    for($i=0;$i<sizeof($scls[$os]['subjects']);$i++)
                    {
                        $sn=$scls[$os]['subjects'][$i]['name'];
                        $sg=$scls[$os]['subjects'][$i]['grade_points'];
                    }
                }
            }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ResultPoint</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
        <header>
            <img src="logo.png" alt="MANIT-LOGO" width="100px" height="100px">
            <h1>ResultPoint</h1>
        </header>
       <div class="rmiddle">
        <?php if($os!=-1){echo "<p> Congrats $name! Your  SGPA is $sgpa </p>";}?>
           <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading" id="he"><?php if($os!=-1)echo $name; else echo "Invalid Scholar No.!";  ?></div>
               <?php
               if($os!=-1) echo "<table>
            <tr>
                <th>Subject Name</th>
                <th>Grade Points</th>
                <th>Credits Earned</th>
            </tr>"; ?>
            <?php
                if($os!=-1){
                for($i=0;$i<sizeof($scls[$os]['subjects']);$i++){
                $sn=$scls[$os]['subjects'][$i]['name'];
                $sg=$scls[$os]['subjects'][$i]['grade_points'];
                $sc=$scls[$os]['subjects'][$i]['credit_earned'];
            ?>
            <tr>
                <td><?php echo $sn;?></td>
                <td><?php echo $sg;?></td>
                <td><?php echo $sc;}}?></td>
            </tr>
               </table></div>
        </div>
        <footer><p>&copy; 2017  Ayush Tripathi</p></footer>
    </body>
</html>
