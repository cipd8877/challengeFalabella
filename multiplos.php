<?php


$limitNumber = $_GET['limitNumber'];



$multiple3 = 3;
$multiple5 = 5;

for($increment =1; $increment <= $limitNumber; $increment++){
    $message = $increment;
    foreach ([3, 5] as $d) {
        if (0 == $increment % $d) {
            switch($increment){
                case ($increment == $multiple3 && $increment == $multiple5):
                    $message = "Integraciones";
                    $multiple3 = $multiple3 + 3;
                    $multiple5 = $multiple5 + 5;
                    break;
                case ($increment == $multiple3 ):
                    $message = "Falabella";
                    $multiple3 = $multiple3 + 3;
                    break;
                case ($increment == $multiple5 ):
                    $message = "IT";
                    $multiple5 = $multiple5 + 5;
                    break;
                
            }
            break;
        }
    }
    echo nl2br($message."\n");
}

