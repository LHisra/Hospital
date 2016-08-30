  <body class="hold-transition skin-red sidebar-mini sidebar-collapse">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <div class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>H</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Hos</b>pital</span>
        </div>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">Opciones</span>
                  <img src="views/app/img/user.jpeg" class="user-image" alt="User Image">
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="views/app/img/user.jpeg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $_users[$_SESSION['app_id']]['nombre'] ." ". $_users[$_SESSION['app_id']]['apellido']; ?>
                      <small>Turno</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="?view=logout" class="btn btn-default btn-flat">Cerrar Sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="views/app/img/user.jpeg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_users[$_SESSION['app_id']]['nombre'] ." ". $_users[$_SESSION['app_id']]['apellido']; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Barra de Navegación</li>
            <?php
              if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['tipo']==0){?>
                <li>
                  <a href="?view=permanentes">
                    <i class="fa fa-list-alt"></i>
                    <span>Materiales Permanentes</span>
                    <span class="pull-right-container"></span>
                  </a>
                </li>
              <?php }
            ?>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
