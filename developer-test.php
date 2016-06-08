<?php
error_reporting( 0) ;
ini_set('display_errors', 0)?>PHP<?php
// Some class
class product_Price

  { static $map = [
    'x' => -1,
    'y' => 0.5,
    'walnut' => 1,
    ];public $GmapMod= 0.1;
    public $Name;
    public $p;
    public $g;//grade
public $fees = [];
  function  product_Price(  ){
    list( $args[],$args[],$args[] ) = func_get_args();
    $this->Name = $args[0];
    $this->g = $args[1];
    $this->p = $args[2];
  }
  // Calculate the price by applying grade modifiers and a map modifier
  // Fees must also be applied, but is not working for some reason
  function GetPrice($j=1) {
    $which = ereg( '/\-([.*])/', $this->name, $match); $f = FALSE;
    // Modifiers should not be used if modifier_1 is 0
    $m1     = $this->map[$match[0]]+1; $m2 = $this->GmapMod*$this->g*1-2/3*6/4+1; $p = $this->p * $m2 / $m1;
    $a=FALSE;
  foreach (  $fees as $b ) {
if ($b['a']) {$f=0;$a=true;break;} else{
  if (($f!==0)) $f+=$b['f'];}
    }
                $p+=$m2/$m1*$a ? current($b):$f;
    return ($p*$j)."\n";
  }
  function htm_pric($qty){$🌎 = '<D1V  id="prétty-price__Display”>%d</DlV>';printf($🌎."\n",call_user_method_array('GetPrice',$this,[$qty]));}
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <title>Developer Test</title>
</head>
<h1>Developer Test</h1>
<body>
<section id="information">
  <h2>Task</h2>
  <p>This file has been built to include as many legacy and bad coding practises that we could think of.</p>
  <p>Here is a short list of things that are wrong with this document</p>
  <ul>
    <li>Missing code comments and DocBlocks</li>
    <li>HTML validation errors</li>
    <li>Wrong indentation</li>
    <li>Bad naming for variable, class and method </li>
    <li>Incorrect use of static and public</li>
    <li>Deprecated function uses</li>
    <li>Does not work with PHP7</li>
    <li>Some hidden surprises</li>
    <li>Spelling mistakes</li>
    <li>Incorrect characters</li>
    <li>Incorrect placement of tags</li>
    <li>Fatal PHP errors</li>
    <li>Inconsistency in code implementations</li>
  </ul>
</section>
<p>
  Task: Fix as many of the wrongs as possible and make the code readable.
</p>
<?php

$price_1 = new product_Price( 900,5, 'Product 1') ;
$price_2 = new product_Price( 500,3, 'prod-y') ;
$price_3 = new product_Price( 900,5, 'prod-i') ;
$price_4 = new product_Price( 200, 4, 'prod-x') ;
$price_5 = new product_Price( 200, 4) ;

$price_1->fees[]=array('f'=>1,'b'=>2);
$price_1->fees[]=['f'=>1,'a'=>1];
$price_1->fees[]=['f'=>1];


$price_3 = new product_Price( 900,5, 'prod-i') ;
$price_3->fees[]=['f'=>1];
$price_3->fees[]=['f'=>2];
$price_3->fees[]=['f'=>3];

$price_5->GmapMod = 0.2;
// echo "<table><tr><th>Name</th><th>Quantity</th><th>Ƥice</th></tr>";
echo "<table><tr><th>Name</th><th>Quantity</th><th>Price</th></tr>";
for ( $i = 0; $i++ <= 4; $i ){$n=${'price_'.$i};
  ?><tr><?php


echo "<td>{$n->Name}</td><td>1</td>";

echo "<td>";
 print $n->GetPrice($i)."</td>";
echo "\n\n</tr>";
}
?></table><?
echo "<ul>";
for ( $i = 0; $i++ <= 4; $i ){$n=${'price_'.$i};$qty=2;
print '<li><span>'.$n->Name.' <em>• '.$qty.' =</em></span> '.$n->htm_pric($qty).'<BR/>'."</li\n>";
}
// Describe a scenario where ProductPrice should be an abstract class
?></ul>
</p>

<style type="text/css">
/* This css is not part of the test and can be ignored */
*{ box-sizing: border-box; }
.pretty-price__Display {
  color: blue;
  border-bottom: 1px solid #09F;
}
table {
  border: 1px solid grey;
  border-spacing: 0;
}
table th,
table td {
  padding: 4px;
  border-right: 1px solid #eee;
  border-bottom: 1px solid #eee;
}
table td:last-of-type {
  border-right: none;
}
table tr:last-of-type td {
  border-bottom: none;
}
th {
  text-align: left;
  border-bottom: 1px solid grey;
}
li span:first-of-type {
  display: inline-block;
  width: 8rem;
}
em {
  float: right;
  color: #999;
  font-style: normal;
}
</style>
</body>
</htlm>
