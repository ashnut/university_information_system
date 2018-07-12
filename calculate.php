<?php

$budget = 10000;
if(isset($_POST['btreg']))
{
echo "Total Funds available before purchase ".$budget;
echo "<br>"; 
$num = $_POST['number'];
$num1 = $_POST['number1'];
$answer = $num * 300;
echo "The cost of Office 365 is ".$answer;
echo "<br>";
$answer1 = $num1 *200;
echo "The cost of Matlab is ".$answer1;
echo "<br>";
$answer3 = ($answer+$answer1);
echo "The overall purchase is ".$answer3;
$total = $budget - $answer3;
echo "<br>";
echo "Total Funds available after purchase ".$total;

// $answer = 200 * $num;
// echo $answer;
}
?>

<?php
  // if (isset($_POST['submit'])) {
  //   $example = $_POST['example'];
  //   $example2 = $_POST['example2'];
  //   echo $example . " " . $example2;
  // }
?>
<!-- <form action="" method="post">
  Example value: <input name="example" type="text" />
  Example value 2: <input name="example2" type="text" />
  <input name="submit" type="submit" />
</form> -->