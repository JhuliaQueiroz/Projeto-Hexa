<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formgerali.css" />
    <title>LOGIN</title>
</head>
<body>
<div class="container">
      <span class="big-circle"></span>
      <img src="../imggeral/bolinhas.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Supermercado Hexa</h3>
          <p class="text">
            Olá, seja bem-vindo(a) nós somos o supermercado hexa. Aqui
            abaixo estão nossas formas de contato!
          </p>

          <div class="info">
            <div class="information">
              <img src="../imggeral/local.png" class="icon" alt="" />
              <p>Rua das Flores, Patos - PB</p>
            </div>
            <div class="information">
              <img src="../imggeral/email.png" class="icon" alt="" />
              <p>morais.beatriz@ifpb.com.br</p>
            </div>
            <div class="information">
              <img src="../imggeral/telefone.png" class="icon" alt="" />
              <p>111-222-333</p>
            </div>
          </div>

          <div class="social-media">
            <p>Nossas redes: </p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div><br>
         <a href="../index.html" class="btn-volt">Voltar </a><br> <br> </div>
        </div>
        

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
        <form action="../conexoes/pessoa.php" method="post">
        <h3 class="title">Cadastro</h3>
        <div class="input-container">
            <label for="cpf">CPF</label>
            <span>CPF</span>
            <input type="number" name="cpf" id="cpf" class="input" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="nome">Nome</label>
        <span>Nome</span>
        <input type="text" name="nome" id="nome"  class="input" required autofocus><br>
        </div>

        <div class="input-container">

        <label for="idade">Idade</label>
        <span>Idade</span>

        <input type="number" name="idade" id="idade"  class="input" required autofocus><br>
        </div>

        <div class="input-container">

        <label for="datanasc">Nascimento</label>
        <span>Nascimento</span>

        <input style="padding:9px 1px 10px 120px;" type="date" name="datanasc" id="datanasc"  class="input" required autofocus><br>
        </div>

        <div class="input-container">
        <label for="email">Email</label>
        <span>Email</span>
        <input type="email" name="email" id="email"  class="input" required autofocus><br>
        </div>


        <div class="input-container">
        <label for="sexo">Sexo</label></div>
        <div class="input-container">

       
        <span>Sexo</span><br>
        <input  type="radio" name="sexo" id="sexo" value="M">Masculino <br>
        <input type="radio" name="sexo" id="sexo" value="F">Feminino <br>
        <input  type="radio" name="sexo" id="sexo" value="O">Outro <br>
        </div>

        <div class="input-container">

        <label for="senha">Senha</label>
        <span>Senha</span>

        <input type="text" name="senha" id="senha"  class="input"><br>
        </div>

        <div class="input-container">
        <label for="cidade">Cidade</label>
        <span>Cidade</span>
        <input type="text" name="cidade" id="cidade"  class="input" ><br>
        </div>

        <div class="select-box">

        <label class="label" for="uf">UF:</label>
        <select  class="input"  name="uf" id="uf">
        <?php 
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from UF";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<option value="'.$linha['codigo'].'">'.$linha['nome'].'</option>';
            }
        ?>
        </select><br>
        </div>

        <div class="input-container">

        <label for="telefone">Telefone</label>
        <span>Telefone</span>
        <input type="text" name="telefone" id="telefone" class="input" required autofocus><br>
        </div>
        
        <div class="select-box">
        <label class="label" for="status">Status</label>
        <select style="padding:10px 1px 10px 80px;" class="input"  name="status" id="status">
        <?php 
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from status";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<option value="'.$linha['codigo'].'">'.$linha['tipo'].'</option>';
            }
        ?>
        </select><br>
        </div><br>
              <p style="color:white;">Preencha os dados do cargo:</p><br>


        <div class="select-box">
        <label class="label" for="turno">Turno</label>
        <select style="padding:10px 1px 10px 80px;" class="input"  name="turno" id="turno">
        <?php 
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from turno";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<option value="'.$linha['codigo'].'">'.$linha['tipo'].'</option>';
            }
        ?>
        </select><br>
        </div><br>

        <div class="select-box">
        <label class="label" for="dep">Turno</label>
        <select style="padding:10px 1px 10px 80px;" class="input"  name="dep" id="dep">
        <?php 
            $con = mysqli_connect("localhost","root","","supermercado");
            $select = "select * from departamento";
            $result = mysqli_query($con,$select);
            while($linha = mysqli_fetch_array($result)){
                echo '<option value="'.$linha['codigo'].'">'.$linha['nome'].'</option>';
            }
        ?>
        </select><br>
        </div><br>

        <input type="reset" value="Apagar dados" class="btn" ><br> <br>
        <input type="submit" value="Login" class="btn"  ><br>
            
        
    </form>
    <script src="../javascript/formgerali.js"></script>
</body>
</html>