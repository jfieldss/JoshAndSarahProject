<?php

$cars=[[
        'year'=>'2015',
	'make'=>'Jeep',
	'model'=>'Renegade',
	'price'=>'$24,179',
	'condition'=>'Used',
	'picture'=>'https://cnet3.cbsistatic.com/img/BF4OTBdGSHbQtFw-I81IjGmyQe8=/940x0/2019/12/06/8ff85011-6f3d-4d21-be04-be8c5bd573f0/renegade.jpg'
	],
    [
	'year'=>'2004',
        'make'=>'Chevrolet',
	'model'=>'SSR LS',
	'price'=>'$20,385',
	'condition'=>'Used',
	'picture'=>'https://www.oldcaronline.com/photos/839816/839816_1.jpg'
	],
    [
	'year'=>'2004',
        'make'=>'Honda',
	'model'=>'S2000',
	'price'=>'$17,895',
	'condition'=>'Used',
	'picture'=>'https://cdn.bringatrailer.com/wp-content/uploads/2018/02/15182107253146c77P1830353-940x705.jpg'
	]];

if(!isset($_GET['id'])){
	echo 'Please enter the id of a member or visit the <a href="index.php">index page</a>.';
	die();
}
if($_GET['id']<0 || $_GET['id']>count($cars)-1){
	echo 'Please enter the id of a member or visit the <a href="index.php">index page</a>.';
	die();
}

?>
<!doctype html>
<html lang="en">
<body style="background-color:blue">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?= $cars[$_GET['id']]['firstname'].' '.$cars[$_GET['id']]['model'] ?></title>
  </head>
  <body>
	  <div class="container">
		<h1 style="color:white;"><?= $cars[$_GET['id']]['year'].' '.$cars[$_GET['id']]['make'].' '.$cars[$_GET['id']]['model'] ?></h1>
		<p style="color:white;"><?= $cars[$_GET['id']]['price'] ?></p>
		<img src="<?= $cars[$_GET['id']]['picture'] ?>" width="500" />
		<p style="color:white;"><?= $cars[$_GET['id']]['condition'] ?></p>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
