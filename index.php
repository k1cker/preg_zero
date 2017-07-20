<?php

   include_once './lib/functions.php';

   $arr = ['55.100','55.01','50.01','55.00','50.00'];



$new_prices=[];

	function pregmatch_foo($item){
		foreach ($item as $key => $value) {
			if(preg_match('/([0]+)\b/', $value)){
				
    		$new_prices[] = parseFloat(preg_replace("/[^0-9,\.]/", "", $value));
			
			}
		
		}
		
		var_dump($new_prices);

	}



pregmatch_foo($arr);


?>