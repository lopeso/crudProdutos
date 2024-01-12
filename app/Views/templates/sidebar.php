
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('theme/dist/img/AdminLTELogo.png')?> " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('theme/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       
          <li class="nav-item">
            <a href="/inicio/index" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Início</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/clientes/index" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>Clientes</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/funcionarios/index" class="nav-link">
              <i class="nav-icon fas fa-id-badge"></i>
              <p>Funcionarios</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/login/trocarSenha" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>Trocar Senha</p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
