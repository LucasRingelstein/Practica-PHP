<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Pagina web</title>
</head>
<body>
    <header>
        <!-- Logo Principal -->
        <div class="container-fluid bg-black" style="height: 100px;">
            <div class="row ">
                <img class="mx-auto d-block my-3" src="assets/images/Logo rocha.png" style="height: 62px; width: 300px;">
            </div>                                                                                
        </div>
        <!-- Botonera -->
        <nav class="navbar navbar-expand-lg ">
              <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php"><b>INICIO</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sobre-nosotros.php"><b>SOBRE NOSOTROS</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="servicios.php"><b>SERVICIOS</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ubicacion.php"><b>DÓNDE ENCONTRARNOS</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contacto.php"><b>CONTACTO</b></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        
    </header>     
    <section>
        <!-- imagen gigante -->

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img  src="assets/images/Imagen 2.png"  class="d-block w-100 img-fluid" >
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/Enmascarar grupo 1.png"  class="d-block w-100 img-fluid" >
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/Imagen 3.png"  class="d-block w-100 img-fluid" >
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/Imagen 5.png"  class="d-block w-100 img-fluid" >
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/descarga (1).jpg"  class="d-block w-100 img-fluid" >
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/descarga.jpg"  class="d-block w-100 img-fluid" >
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>

        
        <!-- Servicio principal -->
        <div class="container my-5 px-5">
            <div class="card border border-0 servicioPrincipal">
                <div class="row g-0">
                <div class="col-5">
                    <img src="assets/images/Imagen 6.png" class="img-fluid rounded-start" style="height: 100%; width: 100%">
                </div>
                <div class="col-7 texto">
                    <div class="card-body bodyPrincipal">
                    <h1 class="card-title TituloServicioPrincipal"><b>Card title</b></h5>
                    <p class="card-text pServicioPrincipal">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Servicios secundarios -->
            <div class="row servicioSecundario ">
                <div class="col">
                    <div class="card cadaServicio border border-0">
                        <img src="assets/images/Imagen 3.png" class="card-img-top">
                        <div class="card-body bodySecundario ">
                            <h1 class="TituloServicioSecundario"><b>Servicio 1</b></h1>
                            <p class="card-text pServicioSecundario">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card cadaServicio border border-0">
                        <img src="assets/images/Enmascarar grupo 1.png" class="card-img-top">
                        <div class="card-body bodySecundario ">
                            <h3 class="TituloServicioSecundario"><b>Servicio 1</b></h3>
                            <p class="card-text pServicioSecundario">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card cadaServicio border border-0">
                        <img src="assets/images/Enmascarar grupo 1.png" class="card-img-top">
                        <div class="card-body bodySecundario">
                            <h3 class="TituloServicioSecundario"><b>Servicio 1</b></h3>
                            <p class="card-text pServicioSecundario">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
    </section>
    <!-- Pie de pagina -->
    <footer>
        <div class="container-fluid bg-black masServicios ">
            <div class="row text-white text-center bg-black ">
                <div class="col serviciosTerceros">
                    <h1 class="tituloTerciario">Servicio 1</h1>
                    <p class="pTerciario">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standa….</p>
                </div>
                <div class="col serviciosTerceros">
                    <h1 class="tituloTerciario">Servicio 1</h1>
                    <p class="pTerciario">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standa….</p>
                </div>
                <div class="col serviciosTerceros">
                    <h1 class="tituloTerciario">Servicio 1</h1>
                    <p class="pTerciario">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standa….</p>
                </div>
            </div>
            <div class="row bg-black ">
                <img class="mx-auto d-block text-align-center img-fluid" src="assets/images/Logo rocha.png" style="height: 62px; width: 300px;">
            </div>
        </div>
    </footer>
</body>
</html>