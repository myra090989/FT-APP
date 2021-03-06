<!DOCTYPE HTML>  
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Food Truck App</title>
</head>
<body>  

<?php    
include 'menu.php';

$var1 = $var2 = $var3 = $var4 = $var5 = $var6 = $var7 = $var8 = $var9 = $var10 = $var11 = $var12 = $var13 = 0;
         
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $var1 = test_input($_POST["var1"]);
  $var2 = test_input($_POST["var2"]);
  $var3 = test_input($_POST["var3"]);
  $var4 = test_input($_POST["var4"]);
  $var5 = test_input($_POST["var5"]);
  $var6 = test_input($_POST["var6"]);
  $var7 = test_input($_POST["var7"]);
  $var8 = test_input($_POST["var8"]);
  $var9 = test_input($_POST["var9"]);
  $var10 = test_input($_POST["var10"]);
  $var11 = test_input($_POST["var11"]);
  $var12 = test_input($_POST["var12"]);
  $var13 = test_input($_POST["var13"]);
}
    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>Food Truck Menu</h2> <hr>
    
<?php

if(is_numeric($var1) and is_numeric($var2) and is_numeric($var3) and is_numeric($var4) and is_numeric($var5) and is_numeric($var6) and is_numeric($var7) and is_numeric($var8) and is_numeric($var9) and is_numeric($var10) and is_numeric($var11) and is_numeric($var12) and is_numeric($var13)){

echo "<h2>Your Receipt: </h2>";
echo ($var1 * 1) . ' ' . $meats[0]->Name . ' at ' . $meats[0]->Price . '. Item total: $' . ($var1 * $meats[0]->Price) . '<br>';
echo ($var2 * 1) . ' ' . $meats[1]->Name . ' at ' . $meats[1]->Price . '. Item total: $' . ($var2 * $meats[1]->Price) . '<br>';
echo ($var3 * 1) . ' ' . $meats[2]->Name . ' at ' . $meats[2]->Price . '. Item total: $' . ($var3 * $meats[2]->Price) . '<br>';
echo ($var4 * 1) . ' ' . $meats[3]->Name . ' at ' . $meats[3]->Price . '. Item total: $' . ($var4 * $meats[3]->Price) . '<br>';
     
echo ($var5 * 1) . ' ' . $toppings[0]->Name . ' at ' . $toppings[0]->Price . '. Item total: $' . ($var5 * $toppings[0]->Price) . '<br>';  
echo ($var6 * 1) . ' ' . $toppings[1]->Name . ' at ' . $toppings[1]->Price . '. Item total: $' . ($var6 * $toppings[1]->Price) . '<br>';  
echo ($var7 * 1) . ' ' . $toppings[2]->Name . ' at ' . $toppings[2]->Price . '. Item total: $' . ($var7 * $toppings[2]->Price) . '<br>';  
     
echo ($var8 * 1) . ' ' . $sides[0]->Name . ' at ' . $sides[0]->Price . '. Item total: $' . ($var8 * $sides[0]->Price) . '<br>';  
echo ($var9 * 1) . ' ' . $sides[1]->Name . ' at ' . $sides[1]->Price . '. Item total: $' . ($var9 * $sides[1]->Price) . '<br>';  
echo ($var10 * 1) . ' ' . $sides[2]->Name . ' at ' . $sides[2]->Price . '. Item total: $' . ($var10 * $sides[2]->Price) . '<br>';  
     
echo ($var11 * 1) . ' ' . $drinks[0]->Name . ' at ' . $drinks[0]->Price . '. Item total: $' . ($var11 * $drinks[0]->Price) . '<br>';  
echo ($var12 * 1) . ' ' . $drinks[1]->Name . ' at ' . $drinks[1]->Price . '. Item total: $' . ($var12 * $drinks[1]->Price) . '<br>';  
echo ($var13 * 1) . ' ' . $drinks[2]->Name . ' at ' . $drinks[2]->Price . '. Item total: $' . ($var13 * $drinks[2]->Price) . '<br>'; 
     
$total = (($var1 * $meats[0]->Price) + ($var2 * $meats[1]->Price) + ($var3 * $meats[2]->Price) + ($var4 * $meats[3]->Price) + ($var5 * $toppings[0]->Price) + ($var6 * $toppings[1]->Price) + ($var7 * $toppings[2]->Price) + ($var8 * $sides[0]->Price) + ($var9 * $sides[1]->Price) + ($var10 * $sides[2]->Price) + ($var11 * $drinks[0]->Price) + ($var12 * $drinks[1]->Price) + ($var13 * $drinks[2]->Price));
    
echo "<h2>Total $" . $total . '</h2><p> Seattle Tax: $' . round($total * .096, 3) . '</p><h3> Total w/ tax: $' .  round($total + $total * .096, 2) . '</h3><br><hr>';
             
}else{
    echo "<script>alert('Please enter valid numbers only.')</script>" . "<h1>Please enter valid numbers only.</h1>";
    }
    ?>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    
<?php
    
echo $meats[0]->Name . '- $'. $meats[0]->Price . '<br><input type="text" placeholder="How many?" name="var1" value="0"> <br>' .  $meats[0]->Description . '<br><br><hr>';
echo $meats[1]->Name . '- $'. $meats[1]->Price . '<br><input type="text" placeholder="How many?" name="var2" value="0"> <br>' .  $meats[1]->Description . '<br><br><hr>';
echo $meats[2]->Name . '- $'. $meats[2]->Price . '<br><input type="text" placeholder="How many?" name="var3" value="0"> <br>' .  $meats[2]->Description . '<br><br><hr>';
echo $meats[3]->Name . '- $'. $meats[3]->Price . '<br><input type="text" placeholder="How many?" name="var4" value="0"> <br>' .  $meats[3]->Description . '<br><br><hr>';
    
echo $toppings[0]->Name . '- $'. $toppings[0]->Price . '<br><input type="text" placeholder="How many?" name="var5" value="0"> <br>' .  $toppings[0]->Description . '<br><br><hr>';
echo $toppings[1]->Name . '- $'. $toppings[1]->Price . '<br><input type="text" placeholder="How many?" name="var6" value="0"> <br>' .  $toppings[1]->Description . '<br><br><hr>';
echo $toppings[2]->Name . '- $'. $toppings[2]->Price . '<br><input type="text" placeholder="How many?" name="var7" value="0"> <br>' .  $toppings[2]->Description . '<br><br><hr>';

echo $sides[0]->Name . '- $'. $sides[0]->Price . '<br><input type="text" placeholder="How many?" name="var8" value="0"> <br>' .  $sides[0]->Description . '<br><br><hr>';
echo $sides[1]->Name . '- $'. $sides[1]->Price . '<br><input type="text" placeholder="How many?" name="var9" value="0"> <br>' .  $sides[1]->Description . '<br><br><hr>';
echo $sides[2]->Name . '- $'. $sides[2]->Price . '<br><input type="text" placeholder="How many?" name="var10" value="0"> <br>' .  $sides[2]->Description . '<br><br><hr>';
    
echo $drinks[0]->Name . '- $'. $drinks[0]->Price . '<br><input type="text" placeholder="How many?" name="var11" value="0"> <br>' .  $drinks[0]->Description . '<br><br><hr>';
echo $drinks[1]->Name . '- $'. $drinks[1]->Price . '<br><input type="text" placeholder="How many?" name="var12" value="0"> <br>' .  $drinks[1]->Description . '<br><br><hr>';
echo $drinks[2]->Name . '- $'. $drinks[2]->Price . '<br><input type="text" placeholder="How many?" name="var13" value="0"> <br>' .  $drinks[2]->Description . '<br><br><hr>';
    
 ?>
  <input type="submit" name="submit"
 value="Submit">  
</form>
<br>
</body>
</html>