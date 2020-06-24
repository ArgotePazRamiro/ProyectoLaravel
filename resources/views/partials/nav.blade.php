<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm"
    style="background: linear-gradient(to left,  #00ffc3 0%, #00ffea 100%);">
    <div class="container">

        
    @auth
    <svg class="bi bi-person-circle" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
      </svg>
          <h4>{{ auth()->user()->name}}</h4>
    @endauth

        <a href="{{route('home')}}">
            <img src={{ asset('images/medico.png') }} alt="imagen" height="60px" width="50px" id="">
        
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="nav nav-pills">
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
                @auth
                <li class=" nav-item"  >
                    <a href="#" style="color: red" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                </li>
                @else
                
                <li class=" nav-item {{ setActive('login') }}" >
                    <a href="{{route('login')}}" style="color:red">
                            @lang('LOGIN')
                        </a>
                </li>
                @endauth
                
            </ul>
            
        </div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>