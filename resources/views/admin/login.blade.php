@section('title', 'Login')
<x-Adminlayout>
<main>
    <div class="register-box ">
            {{-- <div class="register-logo">
                <a href="registro.html"><b>Admin</b>LTE</a>
            </div> --}}
            <div class="card login-card">
                <div class="card-body register-card-body">
                    <p class="login-box-msg">Iniciar Sesión</p>
                    <form action="{{ route('login-user') }}" method="post" id="user-login-form">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Clave" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block" id="user-login-button">Ingresar</button>
                            </div>
                        </div>
                    </form>
                    <div class="form-links">
                        <a href="#" class="text-center mt-3 d-inline-block">Crear una cuenta</a>
                        <a href="{{ route('home') }}" class="text-center mt-3 d-inline-block">Volver a Inicio</a>
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
</x-Adminlayout>