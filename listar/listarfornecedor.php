<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
    <link rel="stylesheet" href="../css/tabelafornec.css">
    <link rel="stylesheet" href="../css/formgerali.css">

</head>
<body>
    <h1>Fornecedores do sistema</h1><br>
    <?php 
        $op = isset($_GET['op']) ? $_GET['op'] : '0';
                $con = mysqli_connect("localhost","root","","supermercado");
                $f1 = "select * from funcionario where CPF=".$op;
                 $f2 = "select * from gerente where CPF=".$op;
                 $f3 = "select * from chefe where CPF=".$op;
                 
                 $t1 = mysqli_query($con,$f1);
                 $t2 = mysqli_query($con,$f2);
                 $t3 = mysqli_query($con,$f3);
                 
                  if($t1 -> num_rows != '0'){
                    while($line = mysqli_fetch_array($t1)){
                         echo '<a href="../funcoes/funcoesfuncionario.php?op='.$line['CPF'].'" class="btn-volt">Voltar</a>';
                    }
                 
             }
                  else if($t2 -> num_rows != '0'){
                     while($line = mysqli_fetch_array($t2)){
                         echo '<a href="../funcoes/funcoesgerente.php?op='.$line['CPF'].'" class="btn-volt">Voltar</a>';
                     }
                  }
                  else{
                    while($line = mysqli_fetch_array($t3)){
                        echo '<a href="../funcoes/funcoeschefe.php?op='.$line['CPF'].'" class="btn-volt">Voltar</a>';
                  }
                }
    ?>
    <table border="1" class="content-table">
        <tr class="content-table thead tr">
            <th class="content-table th">Código</th>
            <th class="content-table th">Nome</th>
            <th class="content-table th">UF</th>
            <th class="content-table th">Cidade</th>
            <th class="content-table th">Telefone</th>
            <th class="content-table th">Valor total dos produtos</th>
        </tr > 
            <?php
            $con = mysqli_connect("localhost","root","","supermercado");

            $forn = isset($_GET['forn']) ? $_GET['forn'] : '0';

            if($forn == '0'){
            $select = "select * from fornecedor";
            }
            else{
                $select = "select * from fornecedor where codigo =$forn";
            }
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<tr class="content-table thead tr">';
                echo '<td class="content-table td">'.$linha['codigo'].'</td>';
                echo '<td class="content-table td">'.$linha['nome'].'</td>';
               
                $select2 = "select * from UF where codigo =".$linha['UF'];
                $result2 = mysqli_query($con,$select2);
                while($linha2 = mysqli_fetch_array($result2)){
                    echo '<td class="content-table td">'.$linha2['nome'].'</td>';
                }
                echo '<td class="content-table td">'.$linha['cidade'].'</td>';
                echo '<td class="content-table td">'.$linha['telefone'].'</td>';
                
                $result3 = mysqli_query($con,"select * from valores where FORNECEDOR=".$linha['codigo']);
                while($linha3 = mysqli_fetch_array($result3)){
                    echo '<td class="content-table td">'.$linha3['Valor_TOTAL'].'</td>';
                }
                echo '</tr>';
            }
            ?>
    </table>
    
</body>
</html>
