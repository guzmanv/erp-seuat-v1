<body class="hold-transition sidebar-mini">
    <div id="divLoading">
        <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!--
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>-->
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Buscar"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo media(); ?>/images/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo media(); ?>/images/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo media(); ?>/images/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo media(); ?>/images/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo media(); ?>/images/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo media(); ?>/images/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

<li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>
              <a class="nav-link dropdown-toggle d-none d-sm-inline-block mt-img-avatar" href="#" data-bs-toggle="dropdown">
                <img src="<?php echo media(); ?>/images/img/user2-160x160.jpg" height="32" class="img-circle elevation-1" alt="Perfil" /> <span class="text-dark">Víctor Manuel Guzmán Muela</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Perfil</a>
                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analyticas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Configuración & Privacidad</a>
                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Centro de Ayuda</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url(); ?>/logout"><i class="align-middle me-1" data-feather="log-out"></i> Cerrar sesión</a>
              </div>
            </li>
      <!-- Personalización del tema
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>-->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <!--<img src="<?php echo media(); ?>/images/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
                <span class="brand-text font-weight-light">ERP SEUAT</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo media(); ?>/images/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Víctor Guzmán</a>
        </div>
      </div>-->

                <!-- SidebarSearch Form -->
                <!--<div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar nav-legacy text-sm nav-compact flex-column"
                        data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               			with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="ml-3 mr-2" data-feather="grid"></i>
                                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="circle"></i>
                                        <p>RVOES</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="circle"></i>
                                        <p>Prospección</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="circle"></i>
                                        <p>Inscripción</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dashboard" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="circle"></i>
                                        <p>Ingresos y egresos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
						<li class="nav-header"><h4>DIDCIRC</h4></li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL ?>/Plantel" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="layout"></i>
                                <!--<i class="nav-icon fas fa-university"></i>-->
                                <p>
                                    Planteles
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL ?>/Modalidades" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="layers"></i>
                                <p>
                                    Modalidades
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL ?>/CategoriaCarrera" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="server"></i>
                                <!--<i class="nav-icon fas fa-university"></i>-->
                                <p>
                                    Categorias Carreras
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL ?>/NivelEducativo" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="tag"></i>
                                <!--<i class="nav-icon fas fa-university"></i>-->
                                <p>
                                    Nivel Educativo
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL ?>/Plan" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="layout"></i>
                                <!--<i class="nav-icon fas fa-university"></i>-->
                                <p>
                                    Org. plan de programas
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL ?>/PlanEstudios" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="server"></i>
                                <!--<i class="nav-icon fas fa-university"></i>-->
                                <p>
                                    Plan de Estudios
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL ?>/Materias" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="layers"></i>
                                <!--<i class="nav-icon fas fa-university"></i>-->
                                <p>
                                    Materias
                                </p>
                            </a>
                        </li>
						<li class="nav-header"><h4>ADMISION</h4></li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL ?>/Persona" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="users"></i>
                                <!--<i class="nav-icon fas fa-university"></i>-->
                                <p>
                                    Persona
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL ?>/Inscripcion/admision" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="layers"></i>
                                <!--<i class="nav-icon fas fa-university"></i>-->
                                <p>
                                    Inscripcion
                                </p>
                            </a>
                        </li>
						<li class="nav-header"><h4>CONTROL ESCOLAR</h4></li>
                        <li class="nav-item">
                            <a href="<?php echo BASE_URL ?>/Inscripcion/controlescolar" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="layers"></i>
                                <!--<i class="nav-icon fas fa-university"></i>-->
                                <p>
                                    Inscripcion
                                </p>
                            </a>
                        </li>
						<li class="nav-header"><h4>CAJA</h4></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="dollar-sign"></i>
                                <p>
                                    Ingresos y Egresos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url(); ?>/ingresos" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="circle"></i>
                                        <p>Ingresos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="roles" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="circle"></i>
                                        <p>Egresos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="roles" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="circle"></i>
                                        <p>Conceptos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="roles" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="circle"></i>
                                        <p>Becas</p>
                                    </a>
                                </li>
                                <li class="nav-header">Reportes</li>
                                <li class="nav-item">
                                    <a href="plantel" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="printer"></i>
                                        <p>
                                            Adeudos
                                            <span class="right badge bg-primary">Pdf</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="plantel" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="printer"></i>
                                        <p>
                                            Ingresos
                                            <span class="right badge bg-primary">Pdf</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="roles" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="printer"></i>
                                        <p>Consultas</p>
                                        <span class="right badge bg-primary">Pdf</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="settings"></i>
                                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Configuración
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="roles" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="circle"></i>

                                        <p>Roles de usuario</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

						<li class="nav-header"><h4>BIBLIOTECA</h4></li>

                        <li class="nav-item">
                            <a href="Biblioteca" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="grid"></i>
                                <!--<i class="nav-icon fas fa-university"></i>-->
                                <p>
                                    Biblioteca - Dashborad
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="bookmark"></i>
                                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Biblioteca - Categorias
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/Biblioteca/NuevaCategoria" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="plus"></i>

                                        <p>Agregar</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/Biblioteca/AdministrarCategorias" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="flag"></i>
                                        <p>Administrar</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="aperture"></i>
                                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Biblioteca - Autores
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/Biblioteca/AgregarAutor" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="plus"></i>

                                        <p>Agregar</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/Biblioteca/AdministrarAutores" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="flag"></i>

                                        <p>Administrar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="book"></i>
                                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Biblioteca - Libros
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/Biblioteca/AgregarLibros" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="plus"></i>

                                        <p>Agregar</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/Biblioteca/AdministrarLibros" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="flag"></i>

                                        <p>Administrar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="book-open"></i>
                                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Biblioteca - Prestamos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/Biblioteca/NuevoPrestamo" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="plus"></i>

                                        <p>Nuevo Préstamo</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/Biblioteca/AdministrarPrestamos" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="flag"></i>

                                        <p>Administrar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="clipboard"></i>
                                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Biblioteca - Ubicacion
                                    <i class="right fas fa-angle-left"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/Biblioteca/ubicacion" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="flag"></i>

                                        <p>Anaqueles</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="users"></i>
                                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Biblioteca - Estudiantes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <!--<li class="nav-item">
                <a href="<?php //echo BASE_URL; ?>/Biblioteca/NuevoEstudiante" class="nav-link">
                   <i class="ml-3 mr-2" data-feather="plus"></i>

                  <p>Nuevo Estudiante</p>
                </a>
              </li>-->
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/Biblioteca/ListaEstudiantes" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="flag"></i>

                                        <p>Lista de Estudiantes</p>
                                    </a>
                                </li>
                                <!--
              <li class="nav-item">
                <a href="<?php //echo BASE_URL; ?>/Biblioteca/SubirMasivo" class="nav-link">
                   <i class="ml-3 mr-2" data-feather="share"></i>

                  <p>Subir Masivo</p>
                </a>
              </li>-->
                            </ul>
                        </li>
						<li class="nav-header"><h4>PLATAFORMAS</h4></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ml-3 mr-2" data-feather="trello"></i>
                                <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Reportes - Plataformas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/ReportesPlataformas/Moodle" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="loader"></i>

                                        <p>Moodle</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/ReportesPlataformas/Webex" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="life-buoy"></i>

                                        <p>Cisco Webex</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo BASE_URL; ?>/ReportesPlataformas/Meet" class="nav-link">
                                        <i class="ml-3 mr-2" data-feather="video"></i>

                                        <p>Google Meet</p>
                                    </a>
                                </li>
                            </ul>
                        </li> 
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>