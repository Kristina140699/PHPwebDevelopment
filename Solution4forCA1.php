<!DOCTYPE html>
<html>
  <head>
    <style>
      body{background-image: url("simple.jpg");
        width: 100%;
        
  
  background-attachment: fixed;
  }
  .bgColor{
    background-color:#fff;
    margin:30px;
    padding: 2px;
  }
     .bg{
       margin: 5px;     
       padding: 10px;}
    </style>
</head>
    <body>
       <div style="background-color:rgb(255, 255, 255, 0.6);
       width:88%; margin:20px;padding: 15px;">
     
        <p ><b>Operators in PHP:</b>   An operator is a symbol that performs operations on operands.
    In PHP (Hypertext Preprocessor), there are different types of
     operators depending on the number of operands they take.
   </p>
   <b>Arithmatic Operators:</b> this are the operators used for performing 
   the basic mathametical operation such as: 
  Addition (+)
  Subtraction (-)
  Multiplication (×)
  Division (÷) Modulus (%) and 
  Exponetial (^).
<div class="bg" >
<?php

$a = 368.7;
$b = 21;

print"The first number[a] is: ";
print "<b>". $a . "</b>";

print"<br>The second number[b] is: ";
print "<b>". $b. "</b>";
echo "<ul>";
 
 $c = $a + $b;
 print "<li>The sum of the two[a+b] numbers: ";
 print "<b>".$c."</b>"; 
 
 $c = $a - $b;
 print "<br><li>The difference of the two[a-b] numbers: ";
 print "<b>".$c."</b>"; 
 
 $c = $a * $b;
 print "<br><li>The product of the two[a*b] numbers: ";
 print "<b>".$c."</b>"; 
 
 $c = $a / $b;
 print "<br><li>The quotient of the two[a/b] numbers: ";
 print "<b>".$c."</b>"; 
 
 $c = $a % $b;
 print "<br><li>The remainder of the two[a%b] numbers: ";
 print "<b>".$c."</b>"; 
 
 $x = 9.8;
 $y = 3;
 print "<br/><li>The exponent of the two[x^y] numbers: <b>" . $x ** $y;
echo "</b><ul/>";
?>
</div>

<b>Assignment Operators :</b>
The assignment operator = assigns the value of 
its right-hand operand to a variable, a property, 
or an indexer element given by its left-hand operand. 
The result of an assignment expression is the value assigned 
to the left-hand operand. The original values of a and b are 
now assigned to the new variables x and y respectively.
 However, in PHP there are other assignment operators as seen below:
<div class="bg">
<?php
 
 print"Value of [x] initially: <b>". $x. "</b>";
 print"<br/>Value of [y] initially: <b>". $y."</b>";
 $x = $a;//Assignment 
 print"<br/><br/><b><em>After the use of assignment operators.</em></b> <br/>
 The first number[x] is :";
 print "<b>".$x."</b>";
 
 print"<br/>The second number[y] is :";
 $y = $b;//Assignment 
 print "<b>". $y. "</b>";
 
 print"<ul> <li>The sum[x+=y] of the two numbers:  <b>";
 print  $x += $y;
 echo "</b>";//Addition Assignment 
 
 print"<br><li> The difference[x-=y] of the two numbers: <b>";
 print $x -= $y;
 echo "</b>";
 
 print"<br> <li>The product[x*=y] of the two numbers: <b>";
 print $x *= $y;
 echo "</b>";

 
 print"<br> <li>The quotient[x/=y] of the two numbers: <b>";
 print $x /= $y;
 echo "</b>";

 
 print"<br> <li>The modulus[x%=y] of the two numbers: <b>";
 print $x %= $y;
 echo" </b></ul>";
?>
</div>

<b>Comparison Operators:</b> A comparison operator 
  allows us to compare two values and returns 
  true if the comparison is truthful and false otherwise.
  The PHP comparison operators are 
  used to compare two values (number or string) 
  as seen in the following examples.
<div class="bg"  >
<?php
$x=-140.6;
$y= 140.6;
 echo "Comparing the values of x: <b>". $x ."</b> and y: <b>".$y. "</b>";
 print"<ol><li>Check for equality[x == y]: <b>";
 print var_dump($x == $y); // Returns true if $x is equal to $y
 echo "</b>";
 
 print" <br><li>Check for identical[x=== y]: <b>";
 print var_dump($x === $y); 
 echo "</b>";

 
 print"<br><li> Check for not equal[x != y] and [x <> y]: <b>";
 print var_dump($x != $y); 
 echo "</b>";
 print" and <b>";
 print var_dump($x <> $y);
 echo "</b>";
 
 print"<br> <li>Check for not-identical[x!==y]: <b>";
 print var_dump($x !== $y); 
 echo "</b>";

 print"<br> <li>Check for greater than [x>y]: <b>";
 print var_dump($x > $y); 
 echo "</b>";

 print"<br> <li>Check for less than [x &lt; y]: <b>";
 print var_dump($x < $y); 
 echo "</b>";

 print"<br> <li>Check for greater than or equal to [x>=y]: <b>";
 print var_dump($x >= $y);
 echo "</b>";

 print"<br> <li>Check for less than or equal to [x &lt; = y]: <b>";
 print var_dump($x <= $y);
 echo "</b>";
 
 print"<br> <li>Check for Spaceship operator [x <=> y]: <b>";
 print var_dump($x <=> $y);
 echo "</b>";

 print"<br> <li>Check for Spaceship operator (altering positions): <b>";
 print var_dump($y <=> $x);
 echo "</b>";

 print"<br> <li>Check for Spaceship operator (for same values): <b > ";
 print var_dump(23 <=> 23);
 echo "</b></ol>";
?>
</div>

</div>
</body>
</html>
