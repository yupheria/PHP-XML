<?php
 $myClients = simplexml_load_file('customerList.xml');
 foreach($myClients as $myClient) {
	 echo $myClient["id"]."<br/>";
     echo $myClient->name."<br/>";
	 echo $myClient->contact->home."<br/>";
	 echo $myClient->contact->cellphone."<br/>";
	 echo $myClient->address->city."<br/>";
	 echo $myClient->address->suburb."<br/>";
	 echo $myClient->address->postcode."<br/><br/>";
 }
?>