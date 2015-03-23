<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Karmany Connect</title>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<header>
  <div class="container">
    <div class="logo"><a href="#">Karmany Connect</a></div>
    <div class="comingsoon">
      <p>Coming soon</p>
    </div>
  </div>
</header>
<section>
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="content">
        <?php
//$name = $_POST['name'];
$email = $_POST['semail'];
$fp = fopen("emails.txt", "a");
//$savestring = $name . "," . $email . "n";
$savestring = $email . "\n";
fwrite($fp, $savestring);
fclose($fp);
echo "<br><p>Thank you!</p>";
?>
<script> setTimeout(function(){history.back();}, 3000); </script>
      </div>
      </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>