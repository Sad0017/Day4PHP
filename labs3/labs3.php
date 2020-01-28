<?php

foreach (range('A','A')as $letter1){
    foreach (range('A','A')as $letter2){
        foreach(range('0','9')as $number1){
            foreach(range('0','9')as $number2){
                foreach(range('0','9')as $number3){
                    foreach (range('A','Z')as $letter3){
                        foreach (range('A','Z')as $letter4){
                            echo $letter1.$letter2."-".$number1.$number2.$number3."-".$letter3.$letter4."<br>";


                        }
                    }
                }
            }
        }
    }
}


?>