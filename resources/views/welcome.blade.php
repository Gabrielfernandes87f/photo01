<!DOCTYPE html>
<html lang="en">

<head>


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
            <h1 data-aos="zoom-in">Gabriel Fernandes</h1>
            <p><strong>Nuxt.js | Vue.js | Laravel | SQL | Adonis.js</strong></p>
            <p><strong>NuxtJs - ✔</strong></p>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <x-navbar />
    </header><!-- End Header -->

    <main id="main">
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


                color: #000;

            }

            .banner-eu {
            border-radius: 30px;
            box-shadow: rgb(82, 80, 80) 5px 0px 20px;


        }

        body {
            background-color: #ebe8e8;
        }
        .text-eu {
            padding: 5%;
            text-align: justify;

        }
        .text-p-1 {
            font-weight: 800;
        }
        .card-title {
            font-size: 1.2rem;
            margin: 2% 0;
            font-family: 'Ubuntu';
            font-weight: 600;

        }
        .card-name{
            font-family: 'Ubuntu', sans-serif;
        }
        .eu {
            padding: 0 5%;
        }


        </Style>



        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider mt-4 mb-5">

        <div class="container-fluid text-center mt-5 mb-5">
            <h4 class="title-principal">
                "A persistência é o caminho do êxito."
            </h4>
        </div>

        <div class="container-fluid mt-5">
            <div class="img-fluid">
                <div class="container-fluid">
                    <div class="container-fluid text-center">
                        <a href="/image/perfil.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <img src="/image/perfil.jpg" class="img-fluid banner-eu text-center" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Portfólio</h2>
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
                            <img src="/image/renally/renally-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Ver album</p>
                                <div class="portfolio-links">
                                    <a href="/albums" ></a>
                                </div>
                            </div>
                            <div class="bg-color">
                                <p>Renally chagas</p>
                                <h5 class="">Pré-wedding</h5>
                                <p class="description">Viver é a coisa mais rara do mundo. A maioria das pessoas apenas existe.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-casamento">
                        <div class="portfolio-wrap">
                            <img src="/image/renally/renally-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Ver álbum</p>
                                <div class="portfolio-links">
                                    <a href="/albums" ></a>
                                </div>
                            </div>
                            <div class="bg-color">
                                <p>Renally chagas</p>
                                <h5 class="">Casamento</h5>
                                <p class="description">Viver é a coisa mais rara do mundo. A maioria das pessoas apenas existe.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-ensaio">
                        <div class="portfolio-wrap">
                            <img src="/image/renally/renally-17.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                            <div class="portfolio-info">
                                <p>Ver album</p>
                                <div class="portfolio-links">
                                    <a href="/albums" ></a>
                                </div>
                            </div>
                            </div>
                            <div class="bg-color">
                                <p>Renally chagas</p>
                                <h5 class="">Ensaio fotografico</h5>
                                <p class="description">Viver é a coisa mais rara do mundo. A maioria das pessoas apenas existe.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-15anos">
                        <div class="portfolio-wrap">
                            <img src="/image/renally/renally-21.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Ver album</p>
                                <div class="portfolio-links">
                                    <a href="/albums" ></a>
                                </div>
                            </div>
                            <div class="bg-color">
                                <p>Renally chagas</p>
                                <h5 class="">Ensaio fotografico</h5>
                                <p class="description">Viver é a coisa mais rara do mundo. A maioria das pessoas apenas existe.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <div id="testimonial" class="block">
            <div class="container">
               {{--  <h2 class="title text-center">Feedback</h2> --}}
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
