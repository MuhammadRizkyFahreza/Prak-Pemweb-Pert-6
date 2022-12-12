<?php

function intToRoman($angka){
    $roman = "";
    if($angka<1){
        $roman = "Error";
    }else{
         while($angka>=1000){
             $roman .= "M";
             $angka -= 1000;
         }
         if($angka>=500){
             if($angka>500){
                 if($angka>=900){
                     $roman .= "CM";
                     $angka -= 900;
                 }else{
                     $roman .= "D";
                     $angka -= 500;
                 }
             }
         }
         while($angka>=100){
             if($angka>=400){
                 $roman .= "CD";
                 $angka -= 400;
             }else{
                $roman .= "C";
                 $angka -= 100;
             }
         }
         if($angka>=50){
             if($angka>=90){
                 $roman .= "XC";
                  $angka -= 90;
             }else{
                $roman .= "L";
                $angka -= 50;
             }
         }
         while($angka>=10){
             if($angka>=40){
                $roman .= "XL";
                $angka -= 40;
             }else{
                $roman .= "X";
                $angka -= 10;
             }
         }
         if($angka>=5){
             if($angka==9){
                 $roman .= "IX";
                 $angka -= 9;
             }else{
                $roman .= "V";
                $angka -= 5;
             }
         }
         while($angka>=1){
             if($angka==4){
                $roman .= "IV";
                $angka -= 4;
             }else{
                $roman .= "I";
                $angka -= 1;
             }
         }
    }
    return ($roman);
}

 
$angka = 289;
echo "angka romawinya adalah : ".intToRoman($angka) ;
?>