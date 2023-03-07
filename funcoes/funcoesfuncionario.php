<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/funcoes.css">
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
  ></script>
</head>
<body>
<header>
        <h2 class="supe">Hexa</h2>
        <nav class="navigation">
            <a href="../index.html" class="active">Inicio</a>
            <a href="../cadastro/login.php">Login</a>
            <a href="../cadastro/cad_pessoa.php">Cadastro</a>
            <a href="../sobre.html">Sobre</a>
        </nav>
</header>
    <div class="container">
        <img src="../imgfuncoes/fundofuncionario.jpg">
        <img src="../imggeral/bolinhas.png" class="square" alt="" />
        <div class="form">
          <div class="contact-info">
            <h3 class="title">Supermercado Hexa</h3>
            <p class="text"> FUNÇÕES FUNCIONARIO</p> 
            <?php
                $op = $_GET['op'];

                $con = mysqli_connect("localhost","root","","supermercado");
                
                $select = "call chama_funcionario(".$op.")";
                
                $result = mysqli_query($con,$select);
                while($linha = mysqli_fetch_array($result)){
                    echo 'Olá '.$linha['nome'].'!! Como funcionário você tem as seguintes opções:<br>';
                
                echo '<br>';

                echo '<a href="../listar/listarprod.php?op='.$linha['CPF_FUNCIONARIO'].'" class="btn" style="text-align: center; text-decoration: none;
                color:white; line-height: 100%;">Ver produtos</a>';

                echo '<a href="../listar/listarvendas.php?op='.$linha['CPF_FUNCIONARIO'].'"  class="btn" style="text-align: center; text-decoration: none; 
                color:white; line-height: 100%;">Ver vendas</a>';

                echo '<a href="../cadastro/cad_produto.php?op='.$linha['CPF_FUNCIONARIO'].'" class="btn" style="text-align: center; text-decoration: none; 
                color:white; line-height: 100%;">Cadastrar produto</a>';

                echo '<a href="../cadastro/cad_venda.php?op='.$linha['CPF_FUNCIONARIO'].'" class="btn" style="text-align: center; text-decoration: none;
                color:white; line-height: 100%;">Cadastrar venda</a>';

                echo '<a href="../index.html" class="btn" style="text-align: center; text-decoration: none;
                color:white; line-height: 100%;">Menu Principal</a> ';
                }
                ?>
            </div>
        </div>
</head>
<body>
   
</body>
</html>