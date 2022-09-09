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
                    Contar um pouco sobre minha história de vida pra vocês.
                </p>
                <p class="description text-success container-fluid mt-3 flex-wap">
                    Eu cresci mudando muito de lugar, morei no Rio grande do Norte, Paraiba (onde moro atulamente), Goiânia – GO, viajei um pouco o Brasil. Viajei muito como vendedor aqueles que bate de porta em porta. Comecei a viajar não foi tanto por precisar, foi por gostar de viajar. Em 2013 eu comecei um curso de fotografia na UFCG e eu fiz esse curso mesmo sabendo do tanto que era caro equipamentos fotográficos, sem ter nenhuma câmera pra começar fui confiando apenas na fé.
                    E deu muito certo, fiz muitos eventos me tornei o excelente profissional, sempre fui muito perfeccionista,  com tudo, e era ruim porque queria oferecer mais para meus clientes e não tinha condições. Sempre quis ter um site de fotografia pra divulgar meu trabalha mas era caro e eu não sabia fazer. Chegou a pandemia e eu fiquei parado, resolvi deixar a fotografia e estudar, seguir com algo novo. Comecei a estudar sobre investimentos e  daytrade, isso me sustentou por um bom tempo, só que eu precisei do dinheiro que eu tinha investido e acabou. Deixei isso de lado e fui estudar programação. Faz uns 8 anos que eu estudo, mas era aquela coisa sem rumo, estuda e para e não saia muito de lugar. Ate que resolvi focar e me tornar um Engenheiro de software por conta própria, estudando em casa mesmo. Então passei a consumir muitos cursos, estudava outros códigos, ver projetos de outros dev, estudava como ele tinha feito. No meu github tenho mais de 100 repositório, muitos deles pequei pra testar e ver como funcionava, já que eu não tinha um professor, aprendia assim. Consumir muitas aulas no Youtube, e até que resolvi comprar cursos e me aprofundar na programação. Hoje eu posso ate não saber algo, mas sei pesquisar e encontrar um jeito de fazer. Estou terminando de ler clean code, iniciei um novo curso pelo IFsul de inglês. Trabalhei um tempo usando trelo, usei o Bitbucket, sei trabalhar em equipe usando metodologias ágeis.
                </p>
                <div class="container-fluid bg-grid">
                    <p class="text-center">
                        Buscando uma oportunidade como desenvolvedor web
                    </p>
                </div>

            </div>

        </div>
    </div>





@endsection
