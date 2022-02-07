<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- =======================================================
  * Template Name: Knight - v4.3.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    {{-- {{ dd($testimonials) }} --}}
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h2 data-aos="fade-up">Studio in Foco</h2>
            <h1 data-aos="zoom-in">Samuel Elirio</h1>
            <p><strong>Fotógrafo Profissional</strong></p>
            @if (session('msg'))
                <a data-aos="fade-up" data-aos-delay="200" href="/" class="btn-get-started">{{ session('msg') }}</a>
            @else
                <a data-aos="fade-up" data-aos-delay="200" href="/testimonials/create" class="btn-get-started ">Deixe seu
                    Feedback</a>
            @endif
        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <x-navbar />


    <main id="main">

        <link rel="/css/main.css" href="style.css">

        {{-- <div class="container marketing mt-5">
                @if (count($albums) > 0)
                <div class="row ">
              @foreach ($albums as $album)
            <div class="col-lg-4 image-main-capa">
                <p><a href="/albums/{{ $album->id }}" role="button" >
                     <img src="/img/album-capa/{{ $album->image_capa }}" class="bd-placeholder-img" width="200" role="img" alt="foto-capa">
                </a></p>
              <h2 class="name-image">{{ $album->name }}</h2>
              <p class="description">{{ $album->description }}</p>
              <p class="ver-galeria"><a class="btn btn-secondary" href="/albums/{{ $album->id }}" role="button">Ver album &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
        @endif --}}
        <Style>
            .card-img {
                width: 720;
                max-width: 1080px;
                margin: 50px auto 0 auto;

            }

            .bg-color {
                background-color: #e8e7e7;
                padding: 8px;
            }

        </Style>



        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider mt-4 mb-5">

        <div class="container-fluid text-center mt-5 mb-5">
            <h4>"Eu realmente acredito que há coisas que ninguém veria se eu não as fotografasse."</h4>
        </div>

        <div class="container-fluid">
            <div class="card">
                <img class="card-img" src="/image/samuel/1.jpeg" alt="Card image">
                <div class="container-fluid text-center">
                    <div class="container-fluid">
                        <h5 class=" container-fluid"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt
                            odio hic assumenda placeat ratione ab beatae, explicabo, debitis alias dolore porro,
                            temporibus molestiae. Consequuntur distinctio molestias voluptates ipsum eius quas!</h5>
                    </div>
                    <div class="text-center mt-5 mb-5">
                        <a href="/albums/album->id" class="btn btn-primary">ver album</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <!--EVENTOS-->
        <div id="eventos" class="block">
            <div class="container">
                <h2 class="title text-center">Eventos</h2>
                <div class="button-group mt-5 mb-5 text-center">
                    @foreach ($albums as $album)
                        <button type="button" class="btn btn-primary">{{ $album->category }}</button>
                    @endforeach
                </div>
                @if (count($albums) > 0)
                    <div class="row grid ">
                        @foreach ($albums as $album)
                            <div class="col-lg-4 col-6 mb-4  element-item ballet ensaio">
                                <a href="image/samuel/1.jpeg" class="popup-link">
                                    <img src="image/samuel/1.jpeg" class="img-fluid" />
                                </a>
                                <div class="bg-color mb-5">
                                    <p>Nome: {{ $album->name }}</p>

                                    <h5 class="mb-1">Categoria: {{ $album->category }}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center mb-5">Nenhum evento cadastrado</p>
                @endif
            </div>
        </div>


        <!--//EVENTOS-->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <x-footer />

    </footer><!-- End Footer -->




    <script src="/assets01/vendor/aos/aos.js"></script>
    <script src="/assets01/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets01/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets01/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets01/vendor/php-email-form/validate.js"></script>
    <script src="/assets01/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets01/js/main.js"></script>


</body>

</html>
