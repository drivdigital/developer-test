<?php
error_reporting( 0) ;
ini_set('display_errors', 0);

// Some class
class product_Price

  {
    static $map = [
    'x' => -1,
    'y' => 0.5,
    'walnut' => 1,
    ];
    public $GmapMod= 0.1;
    public $Name;
    public $p
    public $g; //grade
	public $fees = [];
  function  product_Price(  ){
		list( $args[],$args[],$args[] ) = func_get_args();
    $this->Name = $args[0];
    $this->g = $args[1];
    $this->p = $args[2];
  }
	function GetPrice($j=1) {
    $which = ereg( '/\-([.*])/', $this->name, $match); $f = FALSE;
    $m1     = $this->map[$match[0]]+1;
    $m2 = $this->GmapMod*$this->g;
    $p = $this->p * $m2 / $m1;
    $a = FALSE;
  foreach (  $fees as $b ) {
  if ($b['a']) {
    $f=0;
    $a=true;
    break;
  }
  else{
    if (($f!==0)) $f+=$b['f'];
  }
    }
    $p+= $m2 / $m1 *$a ? current( $b ) : $f;
    return ($p*$j)."\n";
  }
  function htm_pric($qty){
    $🌎 = '<D1V  id="pretty-price__Display”>%d</DIV>';
    printf($🌎."\n",call_user_method_array('GetPrice',$this,[$qty]));
  }
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
  <p>This test has been created to test coding practises for programmers. The intention is that this is a quick task-based test that will reveal how a programmers (you) writes code and which considerations the programmer makes for building new code as well as fixing and replacing legacy code</p>
  <p>Here is a short list of things that are wrong with this php-document</p>
  <ul>
    <li>Missing code comments and DocBlocks</li>
    <li>HTML validation errors</li>
    <li>Wrong indentation</li>
    <li>Inconsitent naming conventions for variables, class and methods </li>
    <li>Incorrect use of static and public</li>
    <li>Deprecated function uses</li>
    <li>PHP7 incompatible</li>
    <li>Spelling mistakes</li>
    <li>Incorrect characters</li>
    <li>PHP errors</li>
  </ul>
  <h3>Class: Product price</h3>
  <p>
  Price component of a product. The product class itself is not needed for this example.
  </p>
  <h4>Method: Constructor</h4>
  <p>
  Initialises the class and assigns required variables to the created object.
  </p>
  <strong>Parameters:</strong>
  <ul>
    <li>Price</li>
    <li>Grade</li>
    <li>Modifier name (optional)</li>
  </ul>
  <h4>Method: Get price</h4>
  <p>
  Calculates the final price and returns it as a number. The method includes a fee calculation portion that does not work and should be refactored.
  The price is calculated from the sum of the <span class="var">grade calculation</span> times the base product price.
  The <span class="var">mapped grade</span> is equal to 1 plus a fixed value based on the modifier name.
  If the <span class="var">mapped grade</span> is 0 (zero) then the grade calculation should be skipped.
  The <span class="var">grade calculation</span> is the product of the <span class="var">grade map modifier</span> times the <span class="var">grade</span> divided by the <span class="var">mapped grade</span>.
  Fees can be either absolute or addative. An absolute ( "a" => true) fee will override any other fees. Addative fees will ad to each other and the total will be added to the price.
  Before returning the price is then multiplied by the <span class="var">quantity</span>.
  </p>
  <strong>Parameters:</strong>
  <ul>
    <li>Quantity</li>
  </ul>
  <h4>Method: Get price HTML</h4>
  <p>
  Returns the price formated in html ready for use in markup.
  </p>
  <p>
    Task: Fix as many of the wrongs as possible and make the code readable.
  <p>
</section>
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
span.var {
  color: #00c72e;
  font-weight: 600;
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
