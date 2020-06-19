<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm"
    style="background: linear-gradient(to left,  #215347 0%, #ffffff 100%);">
    <div class="container">
        <img src={{ asset('images/medico.png') }} alt="imagen" height="60px" width="50px" id="">
        <a href="#">
            MI CONSULTORIO
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class=" nav-item {{ setActive('home') }}">
                    <a class="nav-link" href="{{ route ('home') }} ">
                        <span data-feather="home"></span>
                        @lang('HOME')
                    </a>
                </li>
                <li class=" nav-item {{ setActive('listaPacientes.index')}}">
                    <a class="nav-link" href="{{route('listaPacientes.index')}} ">
                        <span data-feather="listaPacientes"></span>
                        @lang('Paciente')
                    </a>
                </li>
                <li class=" nav-item {{ setActive('listaEmpleados.index')}}">
                    <a class="nav-link" href="{{route('listaEmpleados.index')}} ">
                        <span data-feather="listaEmpleados"></span>
                        @lang('Empleado')
                    </a>
                </li>
                <li class=" nav-item {{ setActive('citas.index')}}">
                    <a class="nav-link" href="{{route('citas.index')}} ">
                        <span data-feather="citas"></span>
                        @lang('Cita')
                    </a>
                </li>
                
                <li class=" nav-item {{ setActive('about') }}">
                    <a class="nav-link" href="{{route('about')}}">
                        @lang('ABOUT')
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>