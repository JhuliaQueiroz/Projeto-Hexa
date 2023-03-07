<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/formgerali.css">
</head>
<body>
<div class="container">
      <span class="big-circle"></span>
      <img src="../imggeral/bolinhas.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
            <br><br>
          <h3 class="title">Cadastrar Fornecedor</h3><br>
          <p class="text">
          Por favor, insira os dados do Fornecedor que 
          deseja cadastrar.
          </p>

          <div class="social-media">
            <br><br><br><br> 
            <?php
            $op = isset($_GET['op']) ? $_GET['op'] : '0';

                    $con = mysqli_connect("localhost","root","","supermercado");
                    if($op == '0'){
                    $select = "select * from chefe";
                    }
                    else{
                        $select = "select * from chefe where CPF= ".$op;
                    }
                    $result = mysqli_query($con,$select);
                    while($linha = mysqli_fetch_array($result)){
                        echo '<a href="../funcoes/funcoeschefe.php?op='.$linha['CPF'].'" class="btn-volt">Voltar</a><br> <br>';
                    }

            echo '<a href="../index.html" class="btn-volt">Menu</a>';

          echo '</div>';
        echo '</div>';

        echo' <div class="contact-form">';
          echo '<span class="circle one"></span>';
          echo '<span class="circle two"></span>';
    echo '<form action="../conexoes/fornecedor.php?op='.$op.'" method="post">';
    ?>
        <div class="input-container">
        <label for="codigo">Código</label>
        <span>Código</span>
        <input class="input" type="number" name="codigo" id="codigo" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="nome">Nome</label>
        <span>Nome</span>
        <input class="input" type="text" name="nome" id="nome" required autofocus><br>
        </div>

   

        <div class="input-container">
        <label for="cidade">Cidade</label>
        <span>Cidade</span>

        <input class="input" type="text" name="cidade" id="cidade" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="telefone">Telefone</label>
        <span>Telefone</span>

        <input class="input" type="number" name="telefone" id="telefone" required autofocus><br>
        </div>

        <div class="select-box">
        <label class="label"for="uf">UF:</label>
        <select class="input"  name="uf" id="uf">
        <?php 
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from UF";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<option value="'.$linha['codigo'].'">'.$linha['nome'].'</option>';
            }
        ?>
        </select><br>
        </div> <br><br>
        
        <input type="reset" value="Apagar dados" class="btn"><br> <br>
        <input type="submit" value="Cadastrar" class="btn"><br>
    
</form>
    <script src="../javascript/formgerali.js"></script>
</body>
</html>