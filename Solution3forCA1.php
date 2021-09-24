<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
  padding: 5px;
}
.bg{background-color:#fff;
  width:90%;
       margin: 5px;     
       padding: 5px;
      }
body{background-image: url("light.jpg");
    width: 100%;   
    background-attachment: fixed;
  }
.column {
  float: left;
  width: 35%;
  margin: 25px;
  padding: 15px;
  
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>

<body><center>
<div class="row">
  <div class="column" style="background-color:#fff;">
  <b>Addition table of 7</b><br/><br/>

<?php
$n=7;
for ($i=1; $i<=10; $i++)
{
    echo $i." + ". $n ."=". $i+$n;
    echo "<br/>";
}
?> 
  </div>
  
<div class="column" style="background-color:#fff;">
<b>Multiplication table of 7</b><br/><br/>
  <?php 
for ($i=1; $i<=10; $i++)
{
    echo $i." x ". $n ."=". $i*$n;
    echo "<br/>";
}
?>
  </div>
</div></center>

<p><b>Fibonacci series:</b> is a series of numbers in which each number 
( Fibonacci number )
   is the sum of the two <br/>preceding numbers. The simplest is the series 
   1, 1, 2, 3, 5, 8, etc</p>
<b>Fibonacci series for first 15 numbers</b>
<div class="bg" >

<?php  
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo $n1.', '.$n2.'';  
while ($num < 12 )  
{  echo ', ';
    $n3 = $n2 + $n1;  
    echo $n3;  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
    }
?> <br/></div>
</body>
</html>
