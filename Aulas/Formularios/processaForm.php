<?php
    print '<pre>';
    print_r($_POST);
    print '</pre>';

    if ($_POST) {    
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $escolaridade = $_POST['escolaridade'];
        $cargo = $_POST['cargo'];
    
        /* Null coalescing operator ?? − Javascript e PHP
        Verifica se a variável interesse existe e não
        é nula , pois para o PHP inexistente ou nulo é a mesma coisa 
        */

        $interesse = $_POST['interesse'] ?? 'Não foram selecionados interesses';
        $minicurriculo = $_POST['minicurriculo'];

        if (is_array($interesse)) {            
            foreach ($interesse as $i ) {
                echo $i . '<br> ';
            }
            $interesse = join(',',$interesse);
        }


        echo "
        <div class=\"alert alert−success\">
            <strong>Nome:</strong>$nome<br>
            <strong>Idade:</strong>$idade<br>
            <strong>Escolaridade:</strong>$escolaridade<br>
            <strong>Cargo:</strong>$cargo<br>
            <strong>Nome:</strong>$interesse<br>
            $minicurriculo
         </div>
         " ;

    }
?>