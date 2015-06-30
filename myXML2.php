<?php
$myProducts = simplexml_load_file('productList.xml');
$result = $myProducts->xpath('product[name="Furniture"]');
 foreach($result as $x) {
	 $x->price = '1500';
 }
$myProducts->asXML("myNewProductList.xml");
?>