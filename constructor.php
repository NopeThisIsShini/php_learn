<?php
class product 
{
    public $name ;
    public $price ;
    // when the object of class is created constructor is automatically called
    // public function __construct($name, $price)
    // if pass a default value here we can use named arguments to pass values
    public function __construct($name='santa', $price=10)
    {
        // Fatal error: Cannot use temporary expression in write context in
        // C:\xampp\htdocs\php_learn\constructor.php on line 9
        // this when occurs if we forgot to give $ 
       $this->name = $name;
       $this->price = $price;
    }
    
    // public function priceAsCurrency($divisor =1, $currencySymbol = '$')
    // {
    //     $priceAsCurrency = this->price/ $divisor;
    //     return $currencySymbol. $priceAsCurrency;
    // }

}

//give the constructor arguments default values
// $product = new product('Santa', 1000);
// print "{$product-> name}<br>" ;
// print $product-> price;

//use named arguments to only pass a price arguments

$product = new product(price: 2000);
print "{$product-> name}<br>" ;
print $product-> price;

?>