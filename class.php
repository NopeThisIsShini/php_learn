<?php
class Test {
//     public $name = 'shini';
//     public $age = 18;
    
//     public function ageHalf(){
//         $agehalf = $this->age/2;
//         return $agehalf;
//     }
// }
// $test = new Test();
// // var_dump($test);
// // print $test -> name. "<br>";
// // $test -> name = 'santa';
// // print $test -> name. "\n";
// $agehalf = $test -> ageHalf();
// var_dump($agehalf);
// print_r($agehalf) ;

//-- member functions in php --
public $name = 'shini';
public $price = 2;
// public function getPrice($currencySymbol){
//     $getPrice = $this->price*10;
//     return $currencySymbol.$getPrice;
// }
// }
// $product = new Test(); //object creation
// print $product->getPrice('$');
// -- member functions with default value
// public function getPrice($currencySymbol='$'){
//     //if i want to use this method without argumnet we need to set a default value
//     $updatedPrice = $this->price*10;
//     return $currencySymbol.$updatedPrice;
// }
public function getPrice( $multiplier,$currencySymbol='$'){
    //if i want to use this method without argumnet we need to set a default value
    $updatedPrice = $this->price*$multiplier;
    return $currencySymbol.$updatedPrice;
}
}
$product = new Test(); //object creation
//if i pass a value here it will override the default value
// print $product->getPrice('#');
// -- if i have two value as parameters
// we need to use the the uninitialized parameter first -- ||
print $product->getPrice(100,'$');





