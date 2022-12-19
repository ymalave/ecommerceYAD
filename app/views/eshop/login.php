<?php 
	$this->view('header', $data);
?>
	 <style>
        #form{
            margin: auto;
            margin-bottom: 20px;          
        }
        #form .container{
            width: 75%;
        }
        .abs-center{
            display:flex;
            text-aling: center;
            align-items: center;
            justify-content: center;
        }
        .signup-form{
            text-aling: center;
        }
    </style>
	<section id="form"><!--form-->
		<div class="container">
			<div class="abs-center">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Iniciar Sesión</h2>
						<form method="post">
							<input type="text/email" placeholder="Nombre de usuario" name="userName"/>
							<input type="password" placeholder="Contraseña" name="password"/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Recuerdame
							</span>
							<button type="submit" class="btn btn-default">Iniciar Sesión</button>
						</form>
						<br>
                        ¿No tienes cuenta? <a href="<?= ROOT . "Signup"?>">¡Registrate Aqui!</a> 
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
<?php 
	$this->view('footer');
?>	
