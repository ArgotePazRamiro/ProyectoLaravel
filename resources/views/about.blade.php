@extends('layout')

@section('title','home')
    

@section('content')
<br><br><br>
<h1></h1><br>
<body><br>
    <div class="container">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col-8">
            <div id="carouselExampleFade" class="carousel slide carousel-fade shadow-lg p-3 mb-5 bg-white rounded" data-ride="carousel">
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                    <img src={{ asset('images/Ramiro.PNG') }} class="d-block w-100" alt="imagen" height="400px" width="500px">
                    <div class="carousel-caption">
                        <h1 style="color:black">Ramiro Argote Paz</h1>
                        <p style="color:#FFFF00">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero aliquid magni mol</p>
                        <p><a class="btn btn-warning" href="#" role="button">Mas informacion</a></p>
                      </div>  
                </div>
                  <div class="carousel-item ">
                    <img src={{ asset('images/IMG_20180616_213400_083.jpg') }} class="d-block w-100" alt="imagen" height="400px" width="500px">
                    <div class="carousel-caption text-right">
                        <h1 style="color:#062877">Alejandro Quintana Muyba</h1>
                        <p style="color:#FFFF00">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis voluptate</p>
                        <p><a class="btn btn-warning" href="#" role="button">Mas informacion</a></p>
                      </div>  
                </div>
                  <div class="carousel-item ">
                    <img src={{ asset('images/inte.png') }} class="d-block w-100" alt="imagen" height="400px" width="500px">
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
                  <p><a class="btn btn-secondary" href="#" role="button">Mas informacion &raquo;</a></p>
                </div>
                <div class="col-lg-5">
                    <img src={{ asset('images/IMG_20180616_213400_083.jpg')}} class="bd-placeholder-img rounded-circle" width="140" height="140">
                  <h2>Alejandro Quintana</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A illum seq</p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div> 
            <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
                </div>
              </div> 
          </div>
          <div class="col">
            3 of 3
          </div>
        </div>
    </div>
</body>
@endsection