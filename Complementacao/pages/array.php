<?php

    function addToArr($search, $arr){
        if(in_array($search, $arr)){
            echo "inArray $search </br>";
        } else {
            echo "notInArray $search </br>";
            $arr[] = $search;
            $arr[$search] = [];
        }
        return $arr;
    }

    $arr = [];
    $idx = 1;
    $search = 'bla';

    $arr = addToArr($search, $arr);
    $arr = addToArr($search, $arr);
    $arr = addToArr($search, $arr);

    //$index = array_search($idx, $posts_array);

    print "<pre>";
    print_r($arr);
    print "</pre>";
?>