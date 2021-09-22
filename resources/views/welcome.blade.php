@extends('layouts.app')

@section('content')

    <!--========================================================== -->
    <!-- SLIDER DE IMAGENES-->
    <!--========================================================== -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets/img/shoeslide1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/img/shoeslide4.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/img/shoeslide5.jpg') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!--========================================================== -->
    <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 class="p-3 fs-2 border-top border-3"> Todos los modelos, una sola tienda. </h1>
        <p class="p-3  fs-4">
            <span class="text-dark">Cj Shoes</span> es una tienda que cuenta con un amplio catalogo capaz de satisfacer el gusto de cualquier cliente.
        </p>
    </section>


    <!--========================================================== -->
    <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->


    <section class="w-100">
        <div class="row w-75 mx-auto" id="servicios-fila-1">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                <img src="{{ asset('assets/img/formales.png') }}" alt="formales"   width="180" height="160">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Formales</h3>
                    <p class="px-4">Para eventos importantes</p>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                <img src="{{ asset('assets/img/deportivo.jpeg') }}" alt="concepto" width="180" height="160">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Deportivos</h3>
                    <p class="px-4">Diseño, Calidad, para cualquier ejercicio.</p>
                </div>
            </div>
        </div>

        <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                <img src="{{ asset('assets/img/elegante.jpeg') }}" alt="comunicaciones" width="180" height="160">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Elegante</h3>
                    <p class="px-4">Para el dia a dia con estilo.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                <img src="{{ asset('assets/img/chinelas.png') }}" alt="seo" width="180" height="160" >

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Comodidad</h3>
                    <p class="px-4">Para la maxima comodidad</p>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.partials.footer')
@endsection
