<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="../css/tabelaprod.css">
<link rel="stylesheet" href="../css/formgerali.css">

</head>
<body>
    <h1>Produtos</h1>
    <?php
    $op = isset($_GET['op']) ? $_GET['op'] : '0';
    echo '<form action="pesquisa.php?op='.$op.'" method="post">';
       echo '<input type="image" src="lente.jpeg" alt="">';
        echo '<input type="text" name="busca" id="busca">';
        echo '<input type="submit" value="Buscar">';
        echo '<button href="../listar/listarprod.php?busca=0&op='.$op.'">Apagar</button>';
        echo '<link rel="stylesheet" href="../css/formgerali.css">';
    echo '</form>';
      
    echo '<table border="1" class="content-table">'; 
        echo '<tr class="content-table thead tr">';
            echo '<th class="content-table th">Código</th>';
            echo '<th class="content-table th">Nome</th>';
            echo '<th class="content-table th">Valor</th>';
            echo '<th class="content-table th">Data de validade</th>';
            echo '<th class="content-table th">Data de fabricação</th>';
            echo '<th class="content-table th">Lote</th>';
            echo '<th class="content-table th">Setor</th>';
            echo '<th class="content-table th">Fornecedor</th>';
            echo '<th class="content-table th">Imagem</th>';
        echo '</tr>';
        echo '<tr>';
            
            $con = mysqli_connect("localhost","root","","supermercado");
            $busca = isset($_GET['busca']) ? $_GET['busca']: '0';
           
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
           else if($t2 -> num_rows !='0'){
                while($line = mysqli_fetch_array($t2)){
                   echo '<a href="../funcoes/funcoesgerente.php?op='.$line['CPF'].'" class="btn-volt">Voltar</a>';
              }
           }
              else{
               while($line = mysqli_fetch_array($t3)){
                   echo '<a href="../funcoes/funcoeschefe.php?op='.$line['CPF'].'" class="btn-volt">Voltar</a>';
              }
           
       }
            if($busca == '0'){
            $select = "select * from produto";
            }
            else{
                $select = "select * from produto where nome like '%".$busca."%'";
            }
            $result = mysqli_query($con, $select);
            while($linha = mysqli_fetch_array($result)){
                echo '<tr class="content-table thead tr">';
                echo '<td class="content-table td">'.$linha['codigo'].'</td>';
                echo '<td class="content-table td"> '.$linha['nome'].'</td>';
                echo '<td class="content-table td">'.$linha['valor'].'</td>';
                echo '<td class="content-table td">'.$linha['datavalidade'].'</td>';
                echo '<td class="content-table td">'.$linha['datafab'].'</td>';
                echo '<td class="content-table td">'.$linha['lote'].'</td>';
            
                $select2 = "select * from setores where codigo =".$linha['codSet'];
                $result2 = mysqli_query($con, $select2);
                while($linha2 = mysqli_fetch_array($result2)){
                    echo '<td class="content-table td">'.$linha2['tipo'].'</td>';
            }
    
                $select3 = "select * from fornecedor where codigo =".$linha['codfor'];
                $result3 = mysqli_query($con, $select3);
                while($linha3 = mysqli_fetch_array($result3)){
                    echo '<td class="content-table td"><a href="listarfornecedor.php?forn='.$linha3['codigo'].'&op='.$op.'">'.$linha3['nome'].'</a></td>';
            }
            echo '<td><img border = 0 height = "63px" src="../upload/'.$linha['imagem'].'"></td>';
            echo '</tr>';
        }
            ?>
        </tr>
    </table>
</body>
</html>