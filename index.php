<!DOCTYPE html>
<html>
<head> <title> PHP Conditional Statements </title>
<style>body {font-family:Arial,Helvetica, sans-serif; font-size: 16px;}</style>
<body>
<h1>PHP Conditional Statements</h1>
<p>PHP script for a Simple calculator using conditional statements</p>

 <h2>Simple Calculator</h2>
<form method="POST">
<input type="number" name="num1" placeholder="First Number" required>
<input type="number" name="num2" placeholder="Second Number" required>
        
<select name="operator" required>
<option value="add">Add</option>
<option value="subtract">Subtract</option>
<option value="multiply">Multiply</option>
<option value="divide">Divide</option>
</select>
        
<input type="submit" name="calculate" value="Calculate">
</form>



 <?php
if (isset($_POST['calculate'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
$result = 0;
if ($operator == 'add') {
$result = $num1 + $num2;
} elseif ($operator == 'subtract') {
$result = $num1 - $num2;
} elseif ($operator == 'multiply') {
$result = $num1 * $num2;
} elseif ($operator == 'divide') {
if ($num2 != 0) {
$result = $num1 / $num2;
} else {
echo "Error: Cannot divide by zero!";
exit;
}
} else {
echo "Invalid operator";
exit;
}
echo "<h3>Result: $result</h3>";
}
?>



</body>
</html> 