<?php
    function phoneFormat($number) {
        if(!preg_match("/[^+0-9]/",trim($number))){
            // cek apakah no hp karakter ke 1 dan 2 adalah angka 62
            if(substr(trim($number), 0, 2)=="62"){
                $hp =trim($number);
            }
            // cek apakah no hp karakter ke 1 adalah angka 0
            else if(substr(trim($number), 0, 1)=="0"){
                $hp ="62".substr(trim($number), 1);
            }
        }

        return $hp;
    }
?>