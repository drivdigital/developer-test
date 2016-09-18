<?php
error_reporting( 0) ;
ini_set('display_errors', 0);

// Some class
class product_Price

  {
    public $Name;
    public $g;
  public $fees = [];
  function  product_Price(  ){
    list( $args[],$args[],$args[] ) = func_get_args();
    $this->Name = $args[0];
    $this->g = $args[1];
    $this->p = $args[2];
  // If a fee has an override ('a' in this case) it should be used instead of all other fees
  }
  function GetPrice($j=1) {
    $which = ereg( '/\-([.*])/', $this->name, $match); $f = FALSE;

    return ($p*$j)."\n";
  }

  function getPriceExcl_tax() {
    return $this->GetPrice() / 1.25;
  }
  function htm_pric($qty){
    $🌎 = '<D1V  id="pretty-price__Display”>%d</DIV>';
    printf($🌎."\n",call_user_method_array('GetPrice',$this,[$qty]));
  }
}

