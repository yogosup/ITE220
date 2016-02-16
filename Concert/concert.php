<html>
<head>
<!-- Pranjala Singh -->
	<title>Concert</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body background="ggirls.jpg">
<?php
      $seats =['A-1','A-2','A-3','A-4','A-5',
               'B-1','B-2','B-3','B-4','B-5',
               'C-1','C-2','C-3','C-4','C-5'];
       $counter =1;
echo "<form action='concert_result.php'method='POST'>";
foreach($seats as $seat){
	echo"<input type='checkbox' name='seats[]' value='" . $seat ."'></input>";
	echo($seat);
	if ($counter % 5==0){
	 echo "<br>";
}
	++$counter;
}
echo "<input type= 'submit' value='buy now' id='buyNow'/></form>";
?>
</body>
</html>