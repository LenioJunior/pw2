<?php
    include('tableHelper.php');

    $connection = getConnection();
    $resultado = listaProdutos($connection);
    $fieldsNames = getTableFieldsNames($resultado);

    //verificar se obteve resultado da consulta.
    if ($resultado){        
        $rows = mysqli_num_rows($resultado);
        $cols = mysqli_num_fields($resultado);

        echo 
        "<div class='container'>
            <div class='row'>
                <div class='col-18'>
                    <table class='table table-bordered w-auto'>
                        <thead>
                            <tr>";
                                for ($col=0; $col < $cols; $col++) {
                                    $fieldName = ucfirst($fieldsNames[$col]);
                                    echo "<th scope='col'>$fieldName</th>";
                                }
                                echo 
                                "<th scope='col'>Editar</th>
                                <th scope='col'>Excluir</th>
                            </tr>
                        </thead>
                    
                        <tbody>";
                            while ($lineData = mysqli_fetch_assoc($resultado)) {
                                $id = array_values($lineData)[0];                                
                                
                                    echo "<tr class='data-id' data-id='$id'>";                                        
                                        for ($col=0; $col < $cols; $col++) {
                                            $fieldName = $fieldsNames[$col];
                                            echo "<td name='$fieldName'>$lineData[$fieldName]</td>";
                                        }
                                            echo "<td style='width: 2%'>";
                                                echo "<form id='edita-$id' style='width: 0%;' method='post' action='produto-edita.php'><input type='hidden' name='id' value='$id' />";
                                                    echo "<button type='submit' class='btn btn-success'><i class='fas fa-edit'></i></button>";
                                                echo "</form>";
                                            echo "</td>";
                                            echo "<td style='width: 3%'>";
                                                echo "<form id='exclui-$id' style='width: 0%;' method='post' action='produto-exclui.php'><input type='hidden' name='id' value='$id' />";
                                                    echo "<button type='submit' class='btn btn-danger'><i class='far fa-trash-alt'></i></button>";
                                                echo "</form>";
                                            echo "</td>";                                            
                                    echo "</tr>";
                                
                            };
                        echo "</tbody>
                    </table>
                </div>
            </div>
        </div>";
    
    }else {
        $error_sql = mysqli_error($connection);
        echo("<h4><p class='text-danger text-center'>Falha ao recuperar a lista de produtos </p></h4>");
        echo("<h4><p class='text-danger text-center'>Error  : {$error_sql} </p></h4>");
    }
?>