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
        <div class="middle">
        <form method="post" action="result.php">
            <img src="logo.png" alt="MANIT-LOGO" width="100px" height="100px">
            <input type="text" placeholder="Enter Your Scholar No." class="schl" name="scholar" required>
            <input type="submit" value="Get Result!" class="bttn" name="bttn" >
        </form>
        </div>
        <footer><p>&copy; 2017  Ayush Tripathi</p></footer>
    </body>
</html>
