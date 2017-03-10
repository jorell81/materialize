<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title></title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="css/google-fonts.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/preload.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>
	<!--Sidebar-->
	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="blue-grey darken-4">
            <ul class="sidebar-nav">
                <li>
                	<dir id="info-user-menu">
                		<img src="img/user.jpg" class="circle center" id="perfil-sidebar">
                		<h6 class="white-text center" id="user-name-sidebar">William Marin</h6>
                	</dir>
                </li>
                <li class="collection-item search-component">
                	<form action="">
                		<div class="input-field row search-field">
                			<input type="text" name="search" class="white-text">
                			<label for="search">Buscar</label>
                			<button type="submit" class="btn blue" style="width: 100%">
                				<i class="material-icons">search</i>
                			</button>
                		</div>
                	</form>
                </li>
                <li class="indent">
                	<a href="javascript:void(0)" class="master-menu">
                		Usuario
                		<i class="material-icons right">add</i>
                	</a>
                	<ul class="child-menu blue-grey darken-3">
                		<li>
                			<a href="javascript:void(0)">
                				<span>Mensajes</span>
                				<i class="material-icons right">mail</i>
                			</a>
                		</li>
                		<li>
                			<a href="#">
                				<span>Configuracion</span>
                				<i class="material-icons right">settings</i>
                			</a>
                		</li>
                		<li>
                			<a href="#">
                				<span>Logout</span>
                				<i class="material-icons right">keyboard_tab</i>
                			</a>
                		</li>
                	</ul>
                </li>
                <li class="indent">
                	<a href="javascript:void(0)" class="master-menu">
                		Compras
                		<i class="material-icons right">add</i>
                	</a>
                	<ul class="child-menu blue-grey darken-3">
                		<li>
                			<a href="javascript:void(0)">
                				<span>Mensajes</span>
                				<i class="material-icons right">mail</i>
                			</a>
                		</li>
                		<li>
                			<a href="#">
                				<span>Configuracion</span>
                				<i class="material-icons right">settings</i>
                			</a>
                		</li>
                	</ul>
                </li>
            </ul>
        </div>
     </dir>					
	<!-- End Sidebar -->
	<!--HEADER-->
	<header class="navbar-fixed">
		<nav class="grey darken-3">
			<div class="nav-wrapper">
				<ul>
					<!-- <li>
						<a href="javascript:void(0)" id="btn-sidebar">
							<i class="material-icons">dehaze</i>
						</a>
					</li> -->
					<li>
						<a href="javascript:void(0)" id="header-logo">Energy Shop</a>
					</li>
				</ul>
				<ul class="right hide-on-med-and-down">
					<li class="layout2_a" id="login">
						<a href="#"class="layout2_a">Iniciar Sesion</a>
					</li>
					<li class="layout2_a">
						<a href="#"class="layout2_a">Registrarse</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!--END HEADER-->
	<!--Main -->
	<main>
		<div class="parallax-container">
			
				<div class="login-page">
		            <div class="form">
		              <form class="register-form">
		                <input type="text" placeholder="name"/>
		                <input type="password" placeholder="password"/>
		                <input type="text" placeholder="email address"/>
		                <button>create</button>
		                <p class="message">Already registered? <a href="#">Sign In</a></p>
		              </form>
		              <form class="login-form">
		                <input type="text" id="nombre" placeholder="username"/>
		                <input type="password" id="password" placeholder="password"/>
		                <button class="logged">
		                	login
		                </button>
		                <p class="message">Not registered? <a href="#">Create an account</a></p>
		                <div class="spinner">
							  <div class="dot1"></div>
							  <div class="dot2"></div>
						</div>
		              </form>
		           	</div>
      			</div>
	      	<div class="parallax"><img src="img/fondobody.jpg"></div>
	      	
	    </div>
	<!-- Cards -->
	
	</main>



	<footer class="page-footer" id="footer-page">
          <!-- <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div> -->
          <div class="footer-copyright" id="footer-copy">
            <div class="container">
            © 2017 Copyright Energy
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</body>
</html>