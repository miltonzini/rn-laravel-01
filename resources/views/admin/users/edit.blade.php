@section('title', 'Edit User')
<x-adminLayout>
@include('partials.admin.nav')
@include('partials.admin.aside')

    <main>
        <div class="content-wrapper">
            <div class="register-box">
                <!-- <div class="register-logo">
                    <a href="registro.html"><b>Admin</b>LTE</a>
                </div> -->
                <div class="card">
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">Editar Usuario: <strong>{{ $userData->name . " " . $userData->surname}}</strong></p>
                        <form action="{{ route('admin.users.update', ['id' => $userData->id])}}" method="post" id="edit-user-form">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nombre" value="{{ $userData->name }}" name="name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Apellido" value="{{ $userData->surname }}" name="surname">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Email" value="{{ $userData->email }}" name="email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Repetir contraseña">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@push('scripts')
@if (isset($scripts) && !empty($scripts))
@foreach ($scripts as $script)
    <script src="{{ asset('public/js/functions/' . $script) }}"></script>
@endforeach
@endif
@endpush
</x-adminLayout>