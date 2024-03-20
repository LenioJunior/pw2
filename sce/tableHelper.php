<?php

function printTableFieldsInformation(mysqli_result $resultado) {
    $fields = mysqli_fetch_fields($resultado);

    foreach ($fields as $field) {
        printf("Name:      %s</br>",   $field->name);
        printf("Table:     %s</br>",   $field->table);
        printf("Max. Len:  %d</br>",   $field->max_length);
        printf("Length:    %d</br>",   $field->length);
        printf("charsetnr: %d</br>",   $field->charsetnr);
        printf("Flags:     %d</br>",   $field->flags);
        printf("Type:      %d</br></br>", $field->type);        
    }
}

function getTableFieldsNames(mysqli_result $resultado, bool $printDetails = false) {
    $colunas = array();
    $fields = mysqli_fetch_fields($resultado);

    foreach ($fields as $field) {
        array_push($colunas, $field->name);
    }

    if ($printDetails) {
        $rows = mysqli_num_rows($resultado);
        $cols = mysqli_num_fields($resultado);

        $nomesColunas = implode(",", $colunas);
        echo "</br>Número de linhas: $rows.</br>Número de colunas: $cols.</br>Nomes de colunas: $nomesColunas.</br>";
    }

    return $colunas;
}

?>