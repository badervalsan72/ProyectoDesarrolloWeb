	<!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><i class="icon-info-blocks material-icons">location_on</i>Panaderia</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        
                        <li><a class="waves-effect waves-dark" href="index.php">Inicio</a></li> 
                        
                        <?php
                        session_start(); 
                        if (isset($_SESSION["email"])) {              
                            echo "<li><a class='waves-effect waves-dark' href='order.php'>Ordenar aquí</a></li>";
                            echo "<li><a class='waves-effect waves-dark' href='cart.php'>Carrito de Compras</a></li>";          
                            echo "<li class='active'><a class='waves-effect waves-dark' href='logout.php'>Cerrar Sesión</a></li>"; 
                        }
                        else {
                            echo "<li><a class='waves-effect waves-dark' href='login.php'>Ordenar aqui</a></li>";
                            echo "<li><a class='waves-effect waves-dark' href='login.php'>Carrito de Compras</a></li>";

                            echo "<li class='active'><a class='waves-effect waves-dark' href='login.php'>Iniciar Sesión</a></li>"; 
                        }                        
                        ?>
                         
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->