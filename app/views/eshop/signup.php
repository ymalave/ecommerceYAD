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
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        .signup-form{
            text-align: center;
        }
    </style>
        <section id="form"><!--form-->
            <div class="container">
                <div class="abs-center">
                    <div class="col-sm-4">
                        <div class="signup-form"><!--sign up form-->
                            <h2>Registrarse</h2>
                            <form method="post">
                                <input type="text" value="<?= isset($_POST['Name']) ? $_POST['Name'] : ''?>" placeholder="Nombre de Usuario" name="Name"/>
                                <input type="text" value="<?= isset($_POST['Phone']) ? $_POST['Phone'] : ''?>" placeholder="Numero de Telefóno" name="Phone"/>
                                <input type="email" value="<?= isset($_POST['Email']) ? $_POST['Email'] : ''?>"placeholder="Correo Electrónico" name="Email"/>
                                <input type="password" value="<?= isset($_POST['Password']) ? $_POST['Password'] : ''?>" placeholder="Contraseña" name="Password"/>
                                <button type="submit" class="btn btn-default">Registrarse</button>
                            </form>
                            <br>
                            ¿Ya tienes cuenta? <a href="<?= ROOT . "Login"?>">Iniciar Sesión</a> 
                        </div><!--/sign up form-->
                    </div>
                </div>
            </div>
        </section><!--/form-->
<?php 
	$this->view('footer');
?>	