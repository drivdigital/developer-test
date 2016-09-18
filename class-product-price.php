<?php
error_reporting( 0) ;
ini_set('display_errors', 0)

// Some class
class product_Price

  {
    public $Name;
		public $currency;
    public $taxP = 25; // tax in percentage
    public $taxA;
	public $fees = [];
  function  product_Price(  ){
		list( $args[],$args[],$args[] ) = func_get_args();
    $this->Name = $args[0];
    $this->currency = $args[1];
	$this->p = $args[2];
  }
  /**
   * [setPrice description]
   * @param float $p [description]
   */
  function setPrice($p) {
    $this->taxA = $p / 125 * 100;
    $this->p = $p;
  }
  function GetPrice($j=1) {
    $which = ereg( '/\-([.*])/', $this->name, $match); $f = FALSE;

    if ( $match[1] == '11338' ) {
      $this->p += 25;
    }


    return ($this->p*$j)."\n";
  }

  function getPriceExcl_tax($j) {
    return $this->p - $this->taxA * $j;
  }
  function htm_pric($qty = 1, $method = 'GetPrice' ){
    $🌎 = '<div  id="price”>%d</div>';
    printf($🌎."\n",call_user_method_array($method,$this,[$qty]));
  }
}

