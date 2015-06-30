<?php
$myProducts = simplexml_load_file('productList.xml');
$myProducts->addChild("product");
$myProducts->product[2]->addChild("name","Mattress");
$myProducts->product[2]->addChild("price","700");
$myProducts->asXML("myNewProductList1.xml");
?>