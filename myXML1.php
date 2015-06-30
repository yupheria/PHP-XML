<?php
$client_id = "C02";
$myProducts = simplexml_load_file('productList.xml');
$result = $myProducts->xpath('product[buyer="'.$client_id.'"]');
foreach($result as $x){
	echo $x->name."<br />";
}
$myClients = simplexml_load_file('customerList.xml');
$result = $myClients->xpath('customer[@id="'.$client_id.'"]');
foreach($result as $y) {
	echo $y->name."<br />";
}
?>