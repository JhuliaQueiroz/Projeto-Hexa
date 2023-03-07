<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente</title>
    <link rel="stylesheet" href="../css/tabelageren.css">
    <link rel="stylesheet" href="../css/formgerali.css">

</head>
<body>
    <h1>Gerentes</h1><br>
    <?php
        $op = $_GET['op'];

        $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from chefe where CPF=".$op;

        $result = mysqli_query($con,$select);
       if($result){
            echo '<a href="../funcoes/funcoeschefe.php?op='.$op.'" class="btn-volt">Voltar</a>';
        }

    ?>
    <table border="1" class="content-table"> 
        <tr class="content-table thead tr">
            <th class="content-table th">CPF</th>
            <th class="content-table th">Nome</th>
            <th class="content-table th">Idade</th>
            <th class="content-table th">Data de nascimento</th>
            <th class="content-table th">Sexo</th>
            <th class="content-table th">Email</th>
            <th class="content-table th">Senha</th>
            <th class="content-table th">Cidade</th>
            <th class="content-table th">UF</th>
            <th class="content-table th">Telefone</th>
            <th class="content-table th">Status</th>
            <th class="content-table th">Turno</th>
            <th class="content-table th">Departamento</th>
        </tr>
        <?php
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select p.*, g.* from pessoa p, gerente g where p.CPF = g.CPF";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<tr class="content-table thead tr">';
                echo '<td class="content-table td">'.$linha['CPF'].'</td>';
                echo '<td class="content-table td">'.$linha['nome'].'</td>';
                echo '<td class="content-table td">'.$linha['idade'].'</td>';
                echo '<td class="content-table td">'.$linha['datanasc'].'</td>';
                echo '<td class="content-table td">'.$linha['sexo'].'</td>';
                echo '<td class="content-table td">'.$linha['email'].'</td>';
                echo '<td class="content-table td">'.$linha['senha'].'</td>';
                echo '<td class="content-table td">'.$linha['cidade'].'</td>';
                $select2 = "select * from UF where codigo = ".$linha['UF'];
                $result2 = mysqli_query($con,$select2);
                while($linha2 = mysqli_fetch_array($result2)){
                    echo '<td class="content-table td">'.$linha2['nome'].'</td>';
                }
                echo '<td class="content-table td">'.$linha['telefone'].'</td>';
                $select3 = "select * from status where codigo = ".$linha['status'];
                $result3 = mysqli_query($con,$select3);
                while($linha3 = mysqli_fetch_array($result3)){
                    echo '<td class="content-table td">'.$linha3['tipo'].'</td>';
                }
                $select4 = "select * from turno where codigo = ".$linha['turno'];
                $result4 = mysqli_query($con,$select4);
                while($linha4 = mysqli_fetch_array($result4)){
                    echo '<td class="content-table td">'.$linha4['tipo'].'</td>';
                }
                $select5 = "select * from departamento where codigo = ".$linha['departamento'];
                $result5 = mysqli_query($con,$select5);
                while($linha5 = mysqli_fetch_array($result5)){
                    echo '<td class="content-table td">'.$linha5['nome'].'</td>';
                }
            }  
            ?>  
    </table>
</body>
</html>
