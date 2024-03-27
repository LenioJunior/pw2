<?php

    function getDateFromStr($stringDate) {
        $date = date_create($stringDate);  
        return date_format($date,"d/m/Y H:i:s");
    }

?>