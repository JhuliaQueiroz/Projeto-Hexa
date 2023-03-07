<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/funcoes.css"> 
</head>
<body>
    <?php 
$op = $_GET['op'];

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$datanasc = $_POST['datanasc'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$telefone = $_POST['telefone'];
$turno = $_POST['turno'];
$dep = $_POST['dep'];

        $con = mysqli_connect("localhost","root","","supermercado");
        $insert = "insert into pessoa values($cpf,'$nome',$idade,'$datanasc','$sexo','$email','$senha','$cidade',$uf,'$telefone','3')";
        $result = mysqli_query($con,$insert);
        $insert2 = "insert into gerente values($cpf,$turno,$dep)";
        $result2 = mysqli_query($con,$insert2);
        
if($result and $result2){
            echo"<header>";
            echo'<h2 class="supe">Hexa</h2>';
            echo'<nav class="navigation">';
            echo'<a href="../index.html" class="active">Inicio</a>';
            echo'<a href="../cadastro/login.php">Login</a>';
            echo'<a href="../cadastro/cad_pessoa.php">Cadastro</a>';
            echo'<a href="../sobre.html">Sobre</a>'; 
            echo"</nav>";
            echo"</header>";
            echo'<div class="container">';
            echo'<img src="../imggeral/naocad.jpg">';
            echo'<img src="../imggeral/bolinhas.png" class="square" alt="" />';
            echo'<div class="form">';
            echo'<div class="contact-info">';
            echo"<h1>Dados salvos</h1><br>";
            echo"<h1>com sucesso!!!</h1><br>";
            echo'<a href="../index.html" class="btn" style="text-align: center; text-decoration: none; color:white;line-height: 100%;">Menu</a>';
            echo'<a href="../funcoes/funcoeschefe.php?op='.$op.'" class="btn" style="text-align: center; color:white; text-decoration: none; line-height: 100%;">Voltar</a>';
            echo"</div>";
}
  
else{
    echo"<header>";
    echo'<h2 class="supe">Hexa</h2>';
    echo'<nav class="navigation">';
    echo'<a href="../index.html" class="active">Inicio</a>';
    echo'<a href="../cadastro/login.php">Login</a>';
    echo'<a href="../cadastro/cad_pessoa.php">Cadastro</a>';
    echo'<a href="../sobre.html">Sobre</a>'; 
    echo"</nav>";
    echo"</header>";
    echo'<div class="container">';
    echo'<img src="../imggeral/naocad.jpg">';
    echo'<img src="../imggeral/bolinhas.png" class="square" alt="" />';
    echo'<div class="form">';
    echo'<div class="contact-info">';
    echo"<h1>Erro...</h1><br>";
    echo'<a href="../index.html" class="btn" style="text-align: center; text-decoration: none; color:white;line-height: 100%;">Menu</a>';
    echo'<a href="../funcoes/funcoeschefe.php?op='.$op.'" class="btn" style="text-align: center; color:white; text-decoration: none; line-height: 100%;">Voltar</a>';
    echo"</div>";
}
?>
</body>
</html>
