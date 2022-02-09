<?php
    function testOddEven(){
        for($i=5; $i<=20; $i++){
            if($i%2 == 0){
                echo "<br> ".$i." is Even";
            }else{
                echo "<br> ".$i." is Odd";
            }
        }
    }
    testOddEven();
?>