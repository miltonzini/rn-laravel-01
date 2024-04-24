@section('title', 'Home')
<x-layout>
<main>
    <section>
        <div class="container">
            <h1>Home</h1>
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('dashboard') }}">Admin -> Dashboard</a></li>
                <li><a href="{{ route('admin.users.index') }}">Admin -> Lista de usuarios</a></li>
                <li><a href="{{ route('admin.users.create') }}">Admin -> Crear usuario</a></li>
                <li><a href="{{ route('admin.test') }}">Admin -> Test</a></li>
                
            </ul>
        </div>
    </section>
</main>
</x-layout>