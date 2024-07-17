<?php
    function getPaiFilhos($registros){
        $posts_array = array();

        while ($registro = mysqli_fetch_assoc($registros)) {
            $id = $registro['id'];            
            $pai = $registro['pai'];               
          
            $search = $pai;
    
            if(!isset($pai)){
                if(!array_key_exists('parent', $posts_array)){
                    $posts_array['parent'] = [];                    
                }
                $posts_array['parent'][] = $id;
            }
            else {
                if(!array_key_exists($pai, $posts_array)){
                    $posts_array[$pai] = [];
                }
                $posts_array[$pai][] = $id;
            }            
        }

        // echo "<pre>";
        // print_r($posts_array);
        // echo "</pre>";

        return $posts_array;
    }
?>