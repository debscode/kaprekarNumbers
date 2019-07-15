<?php

function kaprekarNumbers($p, $q) {    
    $cadena="";  
    $bandera=false;  
    if($p>0){
        if($q>$p){
            if($q<100000){
                for($i=$p;$i<=$q;$i++){
                    $digits=strlen($i);
                    $res=pow($i,2);
                    if(strlen($res)==1){
                        if($res==$i){
                            $cadena.=$i." ";
                            $bandera=true;
                        }
                    }                    
                    else{                        
                        $longLeft=strlen($res)-$digits;                        
                        $left=substr($res,0,$longLeft);
                        $right=substr($res,-$digits);
                        $k=$left+$right;                                               
                        if($k==$i){
                            $cadena.=$i." ";
                            $bandera=true;
                        }
                    }                    
                }                                
            }
        }
    }
    if($bandera){
        $cadena=substr($cadena,0,strlen($cadena)-1);
        echo $cadena;
    }
    else{
        echo "INVALID RANGE";
    }
}

kaprekarNumbers(1,100);
