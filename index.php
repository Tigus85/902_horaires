<?php

include("entreprises_frequentation.php");

$res = [];


for($i=0; $i<count($arrayAffluences);$i++){
    foreach($arrayAffluences[$i] as $timeAffluences => $affluences){
        $res[$timeAffluences] += round($affluences / count($arrayAffluences),2) ;
        
    }
   
}
unset($res["company_id"]);


var_dump($res);