<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Web Applications and Technologies</title>
 <link type="text/css" rel="stylesheet" href="main.css" />
 </head>
 <body>
 <header>
 <h1>Muna kc  / c7227191</h1>
 </header>

 <section id="container">
 <h1> Fundamentals of PHP</h1>

 </section>
 <footer>
 <small>    <a href="../home.php">Go to Home</a></small>
 </footer>
 </body>
</html>
<?php
 echo("<h1>Arrays</h1>");
 echo("<h3>Simple Arrays</h3>");

 $products= array("t-shirt","cap","mug");
 print_r($products);
 echo("<br/>");
 $products= array("t-shirt","shirt","mug");
 print_r($products);
 echo("<br/>");
 $products= array("t-shirt","shirt","mug", "skirt");
 print_r($products);
 echo("<br/>");
 echo("Items in my products array <br/>");
 echo("The item at index[2] is: ".$products[2]. "<br/>");
echo("The item at index[3] is: ".$products[3]. "<br/>");

echo("<h3>Associative Arrays</h3>");
$customer= array(
"CustID"=> "12",   "CustName"=> "Sarah",
"CustAge"=> "23",   "CustGender"=> "F",
);
print_r($customer);
echo("<br/>");
$customer= array(
"CustID"=> "12",   "CustName"=> "Sarah",
"CustAge"=> "32",   "CustGender"=> "F",
"CustEmail"=> "sarah@gmail.com"
);
print_r($customer);
echo("<br/>");
echo("Items in my customer array<br/>");
echo("The item at index[CustName] is: ".$customer["CustName"]. "<br/>");
echo("The item at index[CustEmail] is: ".$customer["CustEmail"]. "<br/>");

echo("<h3>Multi-Dimension Arrays</h3>");
$stock = array(
	"id1" =>  array(
		"description" => "t-shirt",
		"price" => "9.99",
		"stock" => "100",
		"colour" => "blue", "green", "red"
	),

	"id2" =>  array(
		"description" => "cap",
		"price" => "4.99",
		"stock" => "50",
		"colour" => "blue", "black", "grey"
	),


	"id3" =>  array(
		"description" => "mug",
		"price" => "6.99",
		"stock" => "30",
		"colour" => "yellow", "green", "pink"
	),

		 );
		 
		 foreach ($stock as $key => $value)
 {
	
	echo $key ."<br/>";
	foreach ($value as $o => $value) 
	{
		# code...
		echo $o ."=" .$value. "<br/>";
		
	}
}
echo("This is my order: ".$stock["$value"]);

echo("<h1>Loops</h1>");
echo("<h3>While Loop</h3>");
$counter=1;
while($counter<6)
{
	echo("Count: ".$counter."<br/>");
	$counter++;
	
}

$shirt_price=9.99;
$counter=1;
while($counter<=10)
{
	$total=$counter*$shirt_price;
	$counter++;
	echo($counter. " - ".$total. "<br/>");
	
}


$counter=1;
$shirt_price=9.99;
echo "<table border=1 cell-padding=5 cell-spacing=5 width=300px>";
	echo "<tr>";
	echo "<td><b>";
	echo "Quantity";
	echo "</td></b>";
	echo "<td><b>";
	echo "Price";
	echo "</td></b>";
	echo "</tr>";
	echo "</table>";

while($counter<=10)
{

echo "<table border=1 cell-padding=5 cell-spacing=5 width=300px>";

	echo "<tr>";
	echo "<td>";
	echo "$counter";
	echo "</td>";
	echo "<td>";
	echo "$total";
	echo "</td>";
	echo "</table>";
	
	

	$total=$counter*$shirt_price;
	$counter++;
	
	

	}

//Extension Excercise
	echo "<h1> Some Useful Functions </h1>";
	$password= "pass";
	echo "Password is: ".$password;


?>