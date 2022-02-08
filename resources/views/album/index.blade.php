@extends('layouts.main')

{{-- @section('template_title')
    Album
@endsection --}}
@section('content')

    <Style>
        .card-img {
            width: 720;
            max-width: 1080px;
            margin: 50px auto 0 auto;

        }

        .bg-color {
            background-color: #e8e7e7;
            padding: 8px;
            border-radius: 5px;
        }

        .font-01 {}

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
            font-size: .9em;
            font-weight: 500;
            color: #000;
            margin-top: -50px;
            margin-bottom: -50px;

        }

        .title-local {
            font-weight: bold;
            color: #000;
        }

        body {
            background-color: #ebe8e8;
        }

        #header {
            height: 30px;
        }

    </Style>


    <div class="container-fluid text-center">
        <h4 class="title-principal">"Eu realmente acredito que há coisas que ninguém veria se eu não as
            fotografasse."</h4>
    </div>

    <div class="container-fluid">
        <div class="card container-fluid">
            <a href="/image/renally/renally-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <img class=" image-banner" src="/image/renally/renally-2.jpg" alt="Card image">
            </a>

            <div class="container-fluid text-center">
                <div class="container-fluid">
                    <div class=" container-fluid mt-5 mb-5 font-01">
                        <h3>
                            Renally chagas
                        </h3>
                        <p class="title-local">
                            Praia de Tambaba, Conde PB.
                        </p>
                        <p>
                            Acordamos bem cedo pra fazer esse ensaio, mas valeu muito a pena, <br>
                            as fotos ficaram lindas <br>

                        </p>
                    </div>
                </div>

                <div class=" container-fluid">
                    <a href="/image/renally/renally-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-1.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-3.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-4.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-5.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-6.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-7.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-8.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-9.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-10.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-11.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-12.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-13.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-13.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-14.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-14.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-15.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-15.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-16.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-16.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-17.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-17.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-18.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-18.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-19.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-19.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-20.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-20.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-21.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-21.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-22.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-22.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-23.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-23.jpg" alt="Card image">
                    </a>
                </div>
                <div class=" container-fluid">
                    <a href="/image/renally/renally-24.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/renally/renally-24.jpg" alt="Card image">
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection
