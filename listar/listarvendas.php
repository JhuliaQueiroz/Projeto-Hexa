<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" href="../css/tabelavend.css">
    <link rel="stylesheet" href="../css/formgerali.css">
</head>
<body>
    <h1>Vendas</h1><br>
    <table border="1" class="content-table">
        <tr class="content-table thead tr">
            <th class="content-table th">Produto</th>
            <th class="content-table th">Fornecedor</th>
            <th class="content-table th">Data</th>
        </tr>
                <?php 
                 $op = $_GET['op'];
            
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
                $select = "select p.*, v.* from produto p, vendas v where p.codigo = v.codprod";
                $result = mysqli_query($con,"select * from mostrar_prod");
                while($linha = mysqli_fetch_array($result)){
                    echo '<tr class="content-table thead tr">';
                    echo '<td class="content-table td">'.$linha['nome'].'</td>';
                
                $select2 = "select p.*,f.CPF from pessoa p, funcionario f where p.CPF = f.CPF and f.CPF =".$linha['codfun'];
                $result2 = mysqli_query($con,$select2);
                while($linha2 = mysqli_fetch_array($result2)){
                    echo '<td class="content-table td">'.$linha2['nome'].'</td>';
                }
               
                    echo '<td class="content-table td">'.$linha['data'].'</td>';
                
                echo '</tr>';
                
            }
                ?>
    </table>
</body>
</html>

