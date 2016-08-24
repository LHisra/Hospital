<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="editarModal">
          <div class="modal ">
            <div class="modal-dialog ">
              <div class="modal-content ">
                <div class="box box-primary box-solid">
                  <div class="box-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span></button>
                       <h3 >Datos Usuario  </h3>
                  </div>
                </div>
                <div class="modal-body">
                  <div class="box-body">
                    <div class="row">
                      <!-- select -->
                      <div class="form-group col-sm-6">
                        <label class="modal-title">Nacionalidad</label>
                        <select class="form-control">
                          <option>Venezolano</option>
                          <option>Extranjero</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 ">
                        <label class="modal-title">N° Cédula de Identidad</label>
                        <input type="email" class="form-control" id="" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label class="modal-title">Nombre</label>
                        <input type="email" class="form-control" id="" >
                      </div>
                      <div class="form-group col-sm-6 ">
                        <label class="modal-title">Apellido</label>
                        <input type="email" class="form-control" id="" >
                      </div>

                    </div>
                    <div class="row">
                      <!-- Date -->
                      <div class="form-group col-sm-6">
                        <label class="modal-title">Fecha de Nacimiento</label>

                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right datepicker" id="datepicker">
                          <!-- bootstrap datepicker -->

                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                      <div class="form-group col-sm-6 ">
                        <label class="modal-title">Imagen de perfil </label>
                        <input  type="file" id="">
                      </div>
                    </div>
                    <div class="row">

                      <!-- checkbox -->
                      <div class="form-group col-sm-offset-4 col-sm-6">
                        <label>
                          <input type="checkbox" class="flat-red" >
                            Confirmar Cambios
                        </label>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="pull-right btn btn-primary">Guardar Cambios</button>
                  <button type="button" class="pull-lefth btn btn-default pull-center" data-dismiss="modal">Cerrar</button>
                </div>
                <div class="modal-footer ">
                </div>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class=" fa fa-refresh fa-spin"></i> Procesando</h4>
                  <strong>Se esta realizando su petición  </strong>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.example-modal -->
      </div>
      <!-- /.editar-Modal -->
