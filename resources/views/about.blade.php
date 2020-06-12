@extends('layout')

@section('title','home')
    

@section('content')
<br><br>
<h1></h1>
<body><br>
    <div class="">
        <div class="row">
          <div class="col" style="background: linear-gradient(to bottom, black 0%, #ffffff 100%)" >
            
          </div>          

          <div class="col-8" style="background: linear-gradient(to bottom, #ffffff 0%, black 100%)">
            <h1 style="color:black">ACERCA DE NOSOTROS</h1>
            <div id="carouselExampleFade" class="carousel slide carousel-fade shadow-lg p-3 mb-5 bg-white rounded" data-ride="carousel">
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <img src={{ asset('images/Ramiro.PNG') }} class="d-block w-100" alt="imagen" height="400px" width="400px">
                    <div class="carousel-caption">
                        <h1 style="color:black">Ramiro Argote Paz</h1>
                        <p style="color:#FFFF00">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aliquid magni mol</p>
                        <p><a class="btn btn-warning" href="#" role="button">Mas informacion</a></p>
                      </div>  
                </div>
                  <div class="carousel-item ">
                    <img src={{ asset('images/IMG_20180616_213400_083.jpg') }} class="d-block w-100" alt="imagen" height="400px" width="400px">
                    <div class="carousel-caption text-right">
                        <h1 style="color:#062877">Alejandro Quintana Muyba</h1>
                        <p style="color:#FFFF00">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis voluptate</p>
                        <p><a class="btn btn-warning" href="#" role="button">Mas informacion</a></p>
                      </div>  
                </div>
                  <div class="carousel-item ">
                    <img src={{ asset('images/inte.png') }} class="d-block w-100" alt="imagen" height="400px" width="400px">
                    <div class="carousel-caption text-left">
                        <h1 style="color:black">En busca de un tercero</h1>
                        <p style="color:black">Se busca tercer integrante</p>
                        <p style="color: white"><a class="btn btn-dark" href="#" role="button">PRESIONE</a></p>
                      </div> 
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">siguiente</span>
                </a>
              </div>
              <div class="row">
                <div class="col-lg-6">
                    <img src={{ asset('images/Ramiro.PNG')}} class="bd-placeholder-img rounded-circle" width="140" height="140">
                  <h2>Ramiro Argote</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni aspernatur molestias unde dic</p>
                  <p><a class="btn btn-secondary" href="https://www.facebook.com/UnCuateRaP" role="button">Mas informacion &raquo;</a></p>
                </div>
                <div class="col-lg-5">
                    <img src={{ asset('images/IMG_20180616_213400_083.jpg')}} class="bd-placeholder-img rounded-circle" width="140" height="140">
                  <h2>Alejandro Quintana</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A illum seq</p>
                  <p><a class="btn btn-secondary" href="https://www.facebook.com/alejandro.quintana.5203/" role="button" >mas infor &raquo;</a></p>
                </div>
            </div> 
            <br><br>
            <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading" style="color: #3E3E3E">ACERCA DE NOSOTROS. <span class="text" style="color: #C7C7C8" >Quienes somos nosotros?.</span></h2>
                  <p class="lead" style="color: white">Somos un par de estudiantes que estudian Ing. de Sistemas en la Universidad Privada Domingo Savio.</p>
                </div>
                <div class="col-md-5">
                  <img src={{ asset('images/domingoSavio.png')}} alt="domingoSavio" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
                </div>
            </div>
            <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading" ><span class="text-muted" >"By White Power"</span></h2>
        <p class="lead" style="color: white">Hecho por Alejandro Quintana y Ramiro Argote... Dos estudiantes que se desvelaron haciendo el proyecto final...Tuvieron miles de errores pero lo solucionaron...</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src={{ asset('images/poderBlanco.png')}} alt="domingoSavio" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div> 
    <hr class="featurette-divider">
    
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017-2020 Powered by White Power A & R</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
          </div>
          <div class="col" style="background: linear-gradient(to bottom, black 0%, #ffffff 100%)" >
            
          </div>
        </div>
    </div>
</body>
@endsection