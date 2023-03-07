<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formgerali.css">
    <title>Document</title>
</head>
<body>
    <?php 
    $op = $_GET['op'];

    $busca = $_POST['busca'];

    $con = mysqli_connect("localhost","root","","supermercado");
    $select = "select * from produto where nome like '%".$busca."%'";
    $result = mysqli_query($con,$select);
    if($result -> num_rows == '0'){
        echo '<h1>Não existe produto desse tipo</h1><br>';
        echo '<a href="../listar/listarprod.php?op='.$op.'" class="btn-volt">Voltar</a>';
    }
    else{
       
            header("location:../listar/listarprod.php?busca=".$busca."&op=".$op);
        }
    
    ?>
</body>
</html>