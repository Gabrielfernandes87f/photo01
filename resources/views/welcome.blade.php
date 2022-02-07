<!DOCTYPE html>
<html lang="en">

<head>


    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layouts.head')
</head>

<body>
    <style>
        body {
            background-color: #ebe8e8;
        }

    </style>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h2 data-aos="fade-up">
                <p><strong>Fotógrafo Profissional</strong></p>
            </h2>
            <h1 data-aos="zoom-in">Gabriel fernandes</h1>
            <p><strong>Desenvolvedor FullStack/DevOps</strong></p>
            <p><strong>Laravel - ✔</strong></p>
{{--             @if (session('msg'))
                <a data-aos="fade-up" data-aos-delay="200" href="/" class="btn-get-started">{{ session('msg') }}</a>
            @else
                <a data-aos="fade-up" data-aos-delay="200" href="/testimonials/create" class="btn-get-started ">Deixe seu
                    Feedback</a>
            @endif --}}
        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <x-navbar />
    </header><!-- End Header -->


    <main id="main">


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
                background-color: #ffffff;
                padding: 5px;
                text-align: center;
            }

            .bg-color p,
            h3,
            h5 {
                padding: 0;
                margin: 0;
            }

            .bg-color p {
                font-size: 1rem;
                /*  mudar fonte depois */
            }

            .bg-color h5 {
                font-size: .7rem;
                font-weight: bold;
                margin-top: 3px;
            }

            .bg-color .description {
                font-size: .8rem;
                height: 70px;
                margin-top: 5px;
            }



            .image {
                border-radius: 5px 5px 0 0;
            }

            .image-banner {
                border-radius: 7px;
                width: 100%;
                margin: 5% auto 0;
                box-shadow: rgb(82, 80, 80) 5px 0px 20px;

            }

            .image:hover {
                margin-top: -30px;
                margin-bottom: 30px;
                transition: 450ms;
                transition-delay: 20ms;
                -o-transition-property: 5s;
                box-shadow: rgb(82, 80, 80) 5px 0px 20px;
            }

            .card-edit {
                border-radius: 10px;
                box-shadow: rgb(82, 80, 80) 0px 5px 5px;
            }

            .font-m {
                margin-left: 90%;
            }

            .h-100 {
                padding: 8px;
                border-radius: 8%;
                text-decoration: none;
            }

            .h-100:hover {
                margin-top: -30px;
                margin-bottom: 30px;
                transition: 450ms;
                transition-delay: 20ms;
                -o-transition-property: 5s;
                box-shadow: rgb(82, 80, 80) 5px 0px 20px;
                text-decoration: none;
            }

            .testimonial-profissao {
                font-family: 'Fira Sans', sans-serif;
                font-size: 1.2rem;
                font-weight: bold;
                color: #000;
            }

            a .h-100 {
                text-decoration: none;
                color: #000
            }

            a:hover {
                text-decoration: none;
                color: rgb(19, 19, 19);
            }

            .title-principal {

                font-weight: bold;
                color: #000;

            }

        </Style>



        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider mt-4 mb-5">

        <div class="container-fluid text-center mt-5 mb-5">
            <h4 class="title-principal">"Eu realmente acredito que há coisas que ninguém veria se eu não as
                fotografasse."</h4>
        </div>

        <div class="container-fluid">
            <div class="card container-fluid">
                <img class="card-img img-fluid image-banner" src="/image/GSF_0359.jpg" alt="Card image">
                <div class="container-fluid text-center">
                    <div class="container-fluid">
                        <h5 class=" container-fluid mt-5 mb-5 font-01">
                            Esse site ainda ta em fase beta, vai ter muitas atualizações ainda.
                            <br>
                            <br>
                            "Pretendo postar alguns dos meus trabalhos de fotografia."
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">




        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Portfolio</h2>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todos</li>
                            <li data-filter=".filter-casamento">Casamento</li>
                            <li data-filter=".filter-15anos">15anos</li>
                            <li data-filter=".filter-pre-wedding">Pre-Wedding</li>
                            <li data-filter=".filter-ensaio">Ensaio fotografico</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-pre-wedding">
                        <div class="portfolio-wrap">
                            <img src="/image/GSF_0390.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Ver album</p>
                                <div class="portfolio-links">
                                    <a href="/albums" ></a>
                                </div>
                            </div>
                            <div class="bg-color">
                                <p>Renally chagas</p>
                                <h5 class="">Pré-wedding</h5>
                                <p class="description">Tudo o que um sonho precisa para ser realizado é alguém que
                                    acredite que ele possa ser realizado.</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 portfolio-item filter-casamento">
                        <div class="portfolio-wrap">
                            <img src="/image/GSF_0359.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Ver album</p>
                                <div class="portfolio-links">
                                    <a href="/albums" ></a>
                                </div>
                            </div>
                            <div class="bg-color">
                                <p>Renally chagas</p>
                                <h5 class="">Casamento</h5>
                                <p class="description">Tudo o que um sonho precisa para ser realizado é.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-ensaio">
                        <div class="portfolio-wrap">
                            <img src="/image/GSF_2714.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                            <div class="portfolio-info">
                                <p>Ver album</p>
                                <div class="portfolio-links">
                                    <a href="/albums" ></a>
                                </div>
                            </div>
                            </div>
                            <div class="bg-color">
                                <p>Lurdinha</p>
                                <h5 class="">Ensaio fotografico</h5>
                                <p class="description">Tudo o que um sonho precisa para ser realizado é alguém que
                                    acredite que ele possa ser realizado.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-15anos">
                        <div class="portfolio-wrap">
                            <img src="/image/GSF_0390.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Ver album</p>
                                <div class="portfolio-links">
                                    <a href="/albums" ></a>
                                </div>
                            </div>
                            <div class="bg-color">
                                <p>Lurdinha</p>
                                <h5 class="">Ensaio fotografico</h5>
                                <p class="description">Tudo o que um sonho precisa para ser realizado é alguém que
                                    acredite que ele possa ser realizado.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->



        <div id="testimonial" class="block">
            <div class="container">
                <h2 class="title text-center">Feedback</h2>
                <div class="row">
                    @foreach ($testimonials as $testimonial)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="#" target="_blank">
                                <div class="card h-100">
                                    <div class="card-body testimonial-body">
                                        <div class="text-center">
                                            <img class="card-img-fluid img-fluid rounded-circle text-center"
                                                src="/img/depoimento/{{ $testimonial->image_testimonial }}"
                                                width="50%" alt="">
                                        </div>
                                        <h4 class="card-title text-center">{{ $testimonial->name }}</h4>
                                        <p class="card-text testimonial-profissao text-center">
                                            {{ $testimonial->profissao }}</p>
                                        <p class="card-text container-fluid">
                                            “{{ $testimonial->depoimento }}”
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {!! $testimonials->links() !!}
                </div>
            </div>
        </div>

        <!--//EVENTOS-->
        {{-- @if (count($albums) > 0)
      @foreach ($albums as $album)
    <div class="col-md-3 mb-5">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img">
              <a href="#">
                  <img src="image/samuel/1.jpeg" alt="">
              </a>
          </div>
          <div class="wsk-cp-text">
            <div class="wsk-cp-content">
                 <h3 class="wsk-cp-title">{{ $album->category }} </h3>
                 <p class="wsk-cp-description">{{ $album->description }}</p>
                 <a href="#" class="btn btn-primary text-center">Ver album</a>
            </div>
          </div>
        </div>
    </div>
    @endforeach
    @endif --}}

        <div class="container">

        </div>
        <hr class="featurette-divider">


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <x-footer />

    </footer><!-- End Footer -->





</body>

</html>
