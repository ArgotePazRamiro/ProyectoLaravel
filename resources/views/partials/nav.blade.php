<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm" style="background: linear-gradient(to left,  #00cc99 0%, #ffffff 100%);">
  <div class="container">
    <img src = {{ asset('images/medico.png') }} alt="imagen"  height="60px" width="50px" id="">  
    <a href="#">
      MI CONSULTORIO
    </a>
  <button class="navbar-toggler" type="button" 
      data-toggle="collapse" 
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" 
      aria-expanded="false" 
      aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">
        <li class=" nav-item {{ setActive('home') }}" >
          <a class="nav-link" href="{{ route ('home') }} ">
            <span data-feather="home"></span>
              @lang('HOME')
          </a>
       </li>
       
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">PACIENTE</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="{{route('datosPaciente')}}">
              @lang('Nuevo Paciente')
          </a> 
          <a class="dropdown-item" href="{{route('listaPacientes.index')}}">
            @lang('Lista de Pacientes')
          </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">EMPLEADO</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="{{route('nuevoEmpleado')}}">
              @lang('Nuevo Empleado')
          </a> 
          <a class="dropdown-item" href="#">
            @lang('Modificar Empleado')
        </a>    
          
        </div>
      </li>
          
        <li class=" nav-item {{ setActive('about') }}" >
          <a class="nav-link" href="{{route('about')}}">
            @lang('ABOUT')
          </a>
         </li>
      </ul>
    </div>
  </div>
</nav>


