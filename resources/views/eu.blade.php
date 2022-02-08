@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')


    <style>
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


    </style>


    <div class="container-fluid mt-5">
        <div class="img-fluid">
            <div class="container-fluid">
                <div class="container-fluid eu">
                    <a href="/image/_RSF7724.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img src="/image/_RSF7724.jpg" class="img-fluid banner-eu" alt="">
                    </a>
                </div>
            </div>
            <div class="text-eu">
                <h1 class="text-center mb-3 card-name">Gabriel Fernandes</h1>
                <p class="container text-center text-p-1">
                    Atualmente sou desenvolvedor fullstack/DevOps jr - Laravel
                </p>
                <p class="description text-success container-fluid mt-3 flex-wap">
                    😉 Oi, me chamo Gabriel, tenho 34 anos, há dois anos comecei a estudar programação. Antes trabalhava como
                    Fotógrafo profissional. Entrei no mundo da programação por curiosidade. Resolvir seguir na área de
                    desenvolvimento web. Me dediquei 100% à programação, comecei com HTML e CSS pela Rockeseat. Tenho mais de
                    237 aulas só nessa plataforma, onde foi minha base na programação.


                    ツ Atualmente estudo Laravel, tenho mais de 11 certificados, estou me especializando nesse framework full
                    stack

                    Atualmente consigo desenvolver uma aplicação do zero, e colocar no ar, atuando também como DevOps 😎

                    Skills: CSS3, HTML5. Javascript, MySQL, Linux, Docker, Bootstrap, Tailwind, Laravel, Stripe, Git e Github,
                    Git Workflow,

                </p>
                <div class="container-fluid bg-grid">
                    <p class="text-center">
                        Buscando uma oportunidade como desenvolvedor.
                    </p>
                </div>

            </div>

        </div>
    </div>





@endsection
