@section('title', 'Users Index')
<x-adminLayout>
    <div class="wrapper">
        @include('partials.admin.nav')
        @include('partials.admin.aside')
            
        <main>
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Listado de Usuarios</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item active">Listado de usuarios</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Total usuarios: 0</h3>
                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive p-0">
                                        @if (!empty($users) && count($users) > 0 )
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Email</th>
                                                    <th>Fecha de registro</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->surname }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', ['id' => $user->id]) }}">Editar</a>
                                                        <a class="btn btn-danger btn-sm" href="#">Eliminar</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                        <div class="pagination p-4">
                                        {{ $users->links() }}
                                        <div>
                                        @else
                                            <div class="px-4 py-4">
                                                <h4>No se encontraron usuarios</h4>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            Todos los derechos reservados.
        </footer>
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
</x-adminLayout>        