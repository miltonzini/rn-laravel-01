<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard')}}" class="brand-link">
        <span class="brand-text font-weight-bold">{{ Session('administrator')['name'] . ' ' . Session('administrator')['surname'] }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard')}}" class="nav-link {{ setActiveRoute('dashboard') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Inicio Admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ setActiveRoute(['admin.users', 'admin.users.index', 'admin.users.create', 'admin.users.edit']) }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Usuarios
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index')}}" class="nav-link {{ setActiveRoute('admin.users.index') }}">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Todos los usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.create')}}" class="nav-link {{ setActiveRoute('admin.users.create') }}">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Crear Usuario</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p>Cerrar sesión</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-arrow-left"></i>
                        <p>Inicio (público)</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>