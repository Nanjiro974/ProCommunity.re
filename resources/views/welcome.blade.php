@extends('layouts.app')

@section('content')

    <body>
        <header>
            @include('layouts.navbar')
        </header>

        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded"
                        src="img/hd-wallpaper-549161_1920.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Le marketing de réseau ou MLM</span>
                            <span class="section-heading-lower">c’est quoi ?</span>
                        </h2>
                        <p class="mb-3">Le marketing de réseau, vous connaissez ? Si vous avez déjà vu passer ce genre d’annonces aux promesses presque trop belles pour êtres vraies,
                             c’est que certains ont déjà tenté de vous embarquer dans ce business… « Opportunité de voyager à prix réduit tout en gagnant de l’argent ! 
                             Fini les horaires de travail, le réveil, le stress, les patrons…. Prend ta vie en main maintenant ! »
                             Pour ceux qui n’auraient pas eu la curiosité de cliquer dessus, la proposition consiste souvent à devenir distributeur d’un produit (c’est-à-dire vendeur indépendant), 
                             et d’en faire la promotion auprès de son réseau, en attendant sagement que les euros s’accumulent. C’est ce que l’on appelle plus communément du marketing de réseau ou MLM (“marketing multi-level”).</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="{{ url(config('forum.web.router.prefix')) }}">Accéder au forum</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Un concepte</span>
                                <span class="section-heading-lower">Novateur</span>
                            </h2>
                            <p class="mb-0">Comme pour toute activité professionnelle, il est nécessaire d’acquérir des compétences spécifiques
                                 en cela nous vous vous offront La possibilité d'apprendre a nos coter et de bâtir une équipe pour multiplier vos revenu. 
                                 C’est une profession qui rémunère à la hauteur de son investissement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </div>
        @include('layouts.footer')
    </body>
@endsection
