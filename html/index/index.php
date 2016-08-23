<?php
	include (HTML_DIR.'overall/head.php');
?>
  <body>
    <header>
			<!-- header-content -->
      <div class="header-content">
				<!-- row -->
				<div class="row">
					<!-- inner -->
					<div class="inner">
						<!-- col -->
	          <div class="col-xs-12 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-7 " >
							<!-- header-form -->
							<div class="header-form">
	              <h1 class="cursive">Inventario Materiales Quirúrgicos</h1>
	              <h4>Inicio de Sesión</h4>
	              <hr>
								<!-- form -->
	              <div role="form" onkeypress="return runScriptLogin(event)">
	                <div class="form-group">
	                  <input type="email" class="form-control" id="user_login" placeholder="Usuario o Cédula de Identidad">
	                </div>
	                <div class="form-group">
	                  <input type="password" class="form-control" id="pass_login" placeholder="Contraseña">
	                </div>
									<div class="form-group">
											<input type="checkbox" id="session_login"> Recuerdame
									</div>
	                <button class="btn btn-primary btn-xl page-scroll" onclick="goLogin()">Entrar</button>
								</div> <!-- fin form -->
							</div> <!-- fin header-form -->
						</div> <!-- fin col -->
					</div>
				</div>
				<!-- row -->
				<div class="row">
					<div  class="col-xs-12 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-7 " id="_AJAX_LOGIN_">
						<?php
								echo $users[$_SESSION['app_id']]['nombre'];
						?>
					</div>
				</div> <!-- fin drow -->
			</div> <!-- fin header-content -->
    </header> <!-- fin header -->
		<script src="views/app/js/login.js"></script>
    <!--Flechas de Navegación-->
  	<a id="prevslide" class="load-item"></a>
  	<a id="nextslide" class="load-item"></a>
  	<!--Barra de Tiempo-->
  	<div id="progress-back" class="load-item">
  		<div id="progress-bar"></div>
  	</div>
  </body>
</html>
