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
  // If a fee has an override ('a' in this case) it should be used instead of all other fees
  }
  // Calculate the price by applying grade modifiers and a map modifier
  // Fees must also be applied, but is not working for some reason
  function GetPrice($j=1) {
    $which = ereg( '/\-([.*])/', $this->name, $match); $f = FALSE;
    // Modifiers should not be used if modifier_1 is 0
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
