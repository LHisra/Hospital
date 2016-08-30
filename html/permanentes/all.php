<?php
	include (HTML_DIR.'overall/head.php');
  include (HTML_DIR.'public/nav.php');
	include (HTML_DIR.'public/panelDerecho.php');
?>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Materiales Permanentess
        </h1>
        <ol class="breadcrumb">
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-offset-1 col-xs-10 col-sm-12 col-sm-offset-0 col-md-12 col-lg-12">
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
												<?php
													if($_permanentes) { ?>
														<table id="tabla" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
															<thead>
																<tr>
																	<th>Nombre</th>
																	<th>Cantidad</th>
																	<th>Disponible(s)</th>
																	<th>Prestada(s)</th>
																	<th>Opciones</th>
																</tr>
															</thead>
															<tfoot>
																<tr>
																	<th>Nombre</th>
																	<th>Cantidad</th>
																	<th>Disponible(s)</th>
																	<th>Prestada(s)</th>
																	<th>Opciones</th>
																</tr>
															</tfoot>
															<tbody >
																<?php foreach($_permanentes as $valor) { ?>
																	<tr>
																		<td><?php  echo $valor['nombre']?></td>
																		<td><?php  echo $valor['cantidad']?></td>
																		<td><?php  echo $valor['disponible_s']?></td>
																		<td><?php  echo $valor['cantidad']-$valor['disponible_s']?></td>
																		<td class="text-center">
																			<a class="btn btn-social-icon btn-github">
																				<i class="fa fa-edit "></i>
																			</a>
																			<a class="btn btn-social-icon btn-github">
																				<i class="fa fa-close"></i>
																			</a>
																			<a class="btn btn-social-icon btn-github">
																				<i class="fa fa-file-pdf-o"></i>
																			</a>
																		</td>
																	</tr>
																<?php } ?>
															</tbody>
														</table>
														<!-- /.table -->
													<!-- if -->
													<?php } else { ?>
														<div class="alert alert-dismissible alert-info">
															<strong>INFORMACIÓN: </strong> Tabla VACÍA, Necesita agregar un <strong> Material Permanente </strong> para poder visualizar la tabla.
														</div>
													<?php }
													// else
												?>
												<!-- php -->
												<br><br>
												<div class="row">
													<div class="text-center">
														<a class="btn btn-app btn-linkedin" data-toggle="modal" data-target="#create">
															<i class="fa fa-plus"></i> Nuevo Registro
														</a>
														<a class="btn btn-app btn-linkedin">
															<i class="fa fa-file-pdf-o"></i> Tabla PDF
														</a>

													</div>
													<div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
														<div class="alert alert-success alert-dismissible">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
															<h4><i class="icon fa fa-check"></i> Alert!</h4>
															Success alert preview. This alert is dismissable.
														</div>
													</div>
												</div>
												<?php
													include (HTML_PERMANENTES.'create.html');
												?>
                      </div>
                      <!-- /.box-body -->
										</div>
                    </div>
                    <!-- /.row -->
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
		include (HTML_DIR.'overall/footer.html');
  ?>
  <!-- ./wrapper -->
  </body>
</html>
