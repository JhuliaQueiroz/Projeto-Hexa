<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" href="../css/formgerali.css">
</head>
<body>
<div class="container">
      <span class="big-circle"></span>
      <img src="../imggeral/bolinhas.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
            <br><br>
          <h3 class="title">Registrar Venda</h3><br>
          <p class="text">
          Por favor, insira os dados da Venda que 
          deseja registrar.
          </p>

          <div class="social-media">
            <br><br><br><br>
            <?php
            $op = isset($_GET['op']) ? $_GET['op'] : '0';

                    $con = mysqli_connect("localhost","root","","supermercado");
                    if($op == '0'){
                    $select = "select * from funcionario";
                    }
                    else{
                        $select = "select * from funcionario where CPF= ".$op;
                    }
                    $result = mysqli_query($con,$select);
                    while($linha = mysqli_fetch_array($result)){
                        echo '<a href="../funcoes/funcoesfuncionario.php?op='.$linha['CPF'].'" class="btn-volt">Voltar</a><br> <br>';
                    }

                    echo '<a href="../index.html" class="btn-volt">Menu </a>';

                    echo '</div>';
                    echo '</div>';

                    echo '<div class="contact-form">';
                    echo '<span class="circle one"></span>';
                    echo '<span class="circle two"></span>';
                    echo '<form action="../conexoes/vendas.php?op='.$op.'" method="post">';
?>

         

        <div class="input-container">
        <label for="codprod">Código Produto</label>
        <span>Código Produto</span>
        <input  class="input" type="number" name="codprod" id="codprod" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="codfun">Código Funcionário</label>
        <span>Código Funcionário</span>
        <input class="input" type="number" name="codfun" id="codfun" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="data">Data</label>
        <span>Data</span>
        <input style="padding:9px 1px 10px 70px;" class="input" type="date" name="data" id="data" required autofocus><br>
        </div>

        <input type="reset" value="Apagar dados" class="btn"><br> <br>
        <input type="submit" value="Cadastrar" class="btn"><br> <br>


    </form>
    <script src="../javascript/formgerali.js"></script>
</body>
</html>