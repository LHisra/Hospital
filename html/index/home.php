<?php
	include (HTML_DIR.'overall/head.php');
  include (HTML_DIR.'public/nav.php');
	include (HTML_DIR.'public/panelDerecho.php');
?>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Bienvenido
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
          <li class="active">Perfil del Usuario</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-5 col-md-4">
            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="views/app/img/user.jpeg" alt="User profile picture">
                <h3 class="profile-username text-center"><?php echo $users[$_SESSION['app_id']]['nombre'] ." ". $users[$_SESSION['app_id']]['apellido']; ?></h3>
                <p class="text-muted text-center">Datos del Usuario</p>
                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <a>Cédula de Identidad</a> <b class="pull-right"><?php echo $users[$_SESSION['app_id']]['cedula']; ?></b>
                  </li>
                  <li class="list-group-item">
                    <a>Nombre</a> <b class="pull-right"><?php echo $users[$_SESSION['app_id']]['nombre']; ?></b>
                  </li>
                  <li class="list-group-item">
                    <a>Apellido</a> <b class="pull-right"><?php echo $users[$_SESSION['app_id']]['apellido']; ?></b>
                  </li>
                  <li class="list-group-item">
                    <a>F. Nacimiento</a> <b class="pull-right">30/04/1996</b>
                  </li>
                  <li class="list-group-item">
                    <a>Turno</a> <b class="pull-right">Mañana</b>
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editarModal">
                  <b>Editar</b>
                </a>
                <?php
                	include (HTML_DIR.'public/modal.php');
                ?>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-xs-offset-1 col-xs-10 col-sm-7 col-sm-offset-0 col-md-8">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Galería</a></li>
                <li><a href="#settings" data-toggle="tab">Documentación</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="row margin-bottom">
                      <div class="box-body">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">

                              <div class="carousel-caption">
                                Sistema Gestor
                              </div>
                            </div>
                            <div class="item">
                              <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">

                              <div class="carousel-caption">
                                Second Slide
                              </div>
                            </div>
                            <div class="item">
                              <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">

                              <div class="carousel-caption">
                                Third Slide
                              </div>
                            </div>
                          </div>
                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                          </a>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.post -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="settings">
                  <div  role="form" class="form-horizontal" onkeypress="return runScriptReg(event)">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Name</label>

                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Name</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" onclick="goReg()" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
								<script type="text/javascript" src="views/app/js/reg.js"></script>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <?php
	include (HTML_DIR.'overall/footer.php');

  ?>
  <!-- ./wrapper -->
  </body>
</html>
