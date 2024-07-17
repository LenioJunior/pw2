<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="script" href="../../bootstrap-5.3.3/js/bootstrap.js">
    <title>Tabelas</title>
</head>
<body>

    <?php
        $con = mysqli_connect("localhost", "root", "1234", "sce");

        if($con) {
            $res = mysqli_query($con, "SELECT * FROM produto");
            
            if($res){
                while($line = mysqli_fetch_assoc($res)){
                    echo $line['id'];
                }
            }            
        } else {
            echo "mysqli_error($con)";
        }

    ?>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>   
</body>

    <link rel="stylesheet" href="../../bootstrap-5.3.3/css/bootstrap.css">
</html>