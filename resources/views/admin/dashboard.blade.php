@section('title', 'Dashboard')
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
                                <h1>Dashbord | Inicio</h1>
                            </div>
                            <!-- <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item active">Listado de usuarios</li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </section>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <p>Texto descriptivo del dashboard</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae nesciunt quas laboriosam labore fugiat temporibus optio voluptas, nam eius necessitatibus saepe amet accusamus blanditiis officiis aliquid doloremque possimus cumque? Facere.
                                Numquam repelaerat consectetur numquam, deserunt quibusdam possimus qui, cum iusto eaque magnam ut suscipit illum sunt voluptates deleniti quae nostrum nemo ex excepturi mollitia. Consectetur adipisci nostrum tempore sequi.</p>
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