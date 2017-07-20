<?php

    $data = [];

   function dd($data, $color = 'green' ){
       echo "<pre style='color:$color'>";

       var_dump($data);die();
       echo "</pre>";
   }

   function parseFloat($ptString) { 
            if (strlen($ptString) == 0) { 
                    return false; 
            } 
            
            $pString = str_replace(" ", "", $ptString); 
            
            if (substr_count($pString, ",") > 1) 
                $pString = str_replace(",", "", $pString); 
            
            if (substr_count($pString, ".") > 1) 
                $pString = str_replace(".", "", $pString); 
            
            $pregResult = array(); 
        
            $commaset = strpos($pString,','); 
            if ($commaset === false) {$commaset = -1;} 
        
            $pointset = strpos($pString,'.'); 
            if ($pointset === false) {$pointset = -1;} 
        
            $pregResultA = array(); 
            $pregResultB = array(); 
        
            if ($pointset < $commaset) { 
                preg_match('#(([-]?[0-9]+(\.[0-9])?)+(,[0-9]+)?)#', $pString, $pregResultA); 
            } 
            preg_match('#(([-]?[0-9]+(,[0-9])?)+(\.[0-9]+)?)#', $pString, $pregResultB); 
            if ((isset($pregResultA[0]) && (!isset($pregResultB[0]) 
                    || strstr($preResultA[0],$pregResultB[0]) == 0 
                    || !$pointset))) { 
                $numberString = $pregResultA[0]; 
                $numberString = str_replace('.','',$numberString); 
                $numberString = str_replace(',','.',$numberString); 
            } 
            elseif (isset($pregResultB[0]) && (!isset($pregResultA[0]) 
                    || strstr($pregResultB[0],$preResultA[0]) == 0 
                    || !$commaset)) { 
                $numberString = $pregResultB[0]; 
                $numberString = str_replace(',','',$numberString); 
            } 
            else { 
                return false; 
            } 
            $result = (float)$numberString; 
            return $result; 
} 
?>