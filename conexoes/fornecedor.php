<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/funcoes.css">
</head>
<body>
    <?php 

    $op = $_GET['op'];


$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$uf = $_POST['uf'];

$con = mysqli_connect("localhost","root","","supermercado");
$insert = "insert into fornecedor values($codigo,'$nome',$uf,'$cidade','$telefone')";
$result = mysqli_query($con,$insert);
if($result){
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
    echo"<h1>Fornecedor cadastrado</h1><br>";
    echo"<h1>cadastrado</h1><br>";
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
    echo'<a href="../index.html" class="btn" style="text-align: center; color:black;line-height: 100%;">Menu</a>';
    echo'<a href="../funcoes/funcoeschefe.php?op='.$op.'" class="btn" style="text-align: center; color:black;line-height: 100%;">Voltar</a>';
    echo"</div>";
}
?>
</body>
</html>
