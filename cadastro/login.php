<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="../css/logino.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="../imglogin/atendenteproj.jpg">
		</div>
		<div class="login-content">
			<form action="../conexoes/loginpes.php" method="post">
				<img src="../imglogin/avatarzada.jpg">
				<h2 class="title">Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>CPF</h5>
           		   		<input type="number" name="cpf" id="cpf" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   	<div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="text" name="senha" id="senha" class="input">
            	   	</div>
				</div> 

				<br>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
				<div class="select-box">
					<label class="label" class="inputi" style="color: #999;font-size: 18px;" for="status">Cargo:</label>
					<select  class="input" style="padding:10px 0px 1px 90px; background-color: white;font-size: 18px; color: #999;border: 2px solid #fff;" name="status" id="status">
						<?php 
							$con = mysqli_connect("localhost","root","","supermercado");
							$select = "select * from status";
							$result = mysqli_query($con,$select);
							while($linha = mysqli_fetch_array($result)){
								echo '<option value="'.$linha['codigo'].'">'.$linha['tipo'].'</option>';
							}
						?>
						</select><br>
						</div>
					</div>
					
            	<input type="submit" class="btn" value="Login"> 
				<a href="../index.html" class="btn" style="text-align: center; color:white;line-height: 250%;";>Voltar</a>
            </form>
			
        </div>
    </div>
    <script type="text/javascript" src="../javascript/login.js"></script>
</body>
</html>