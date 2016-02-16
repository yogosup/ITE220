<html>
<head>
	<!-- Pranjala Singh -->
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div><?php
$selectedseats =$_POST["seats"];
echo "You bought ".count($selectedseats)." <br>";
$totalPrice=0;
foreach ($selectedseats as $selectedseats) {
	echo $selectedseats;
  $displayMessage="";
if ($selectedseats[0]=="A"){
		$price=3000;
		if ($selectedseats[2]=="4"){
			$price = 1500;
			$displayMessage = "50% off on this one:<br>";
			}
}
else if ($selectedseats[0]=="B"){
		$price=2000;
	}
	else {
		$price=1000;
	}
	echo": ".$price." THB<br>".$displayMessage;
	
	$totalPrice+=$price;
	}
echo "Total Price is: ".$totalPrice."THB";
?></div>
</body>
</html>