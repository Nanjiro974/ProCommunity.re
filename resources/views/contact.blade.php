@extends('layouts.app')
@section('content')

    <body>
        <header>
            @include('layouts.navbar')
        </header>

        <section class="page-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="intro">
                            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded"
                                src="img/piece-monnaie-table-bois-nature-floue_1150-17703.jpg" alt="..." />
                            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                                <!-- Article main content -->
                                <article class="col-sm-9 maincontent">
                                    <header class="page-header">
                                        <h1 class="page-title">Contact us</h1>
                                    </header>

                                    <p>
                                        We’d love to hear from you. Interested in working together? Fill out the form below
                                        with
                                        some info about
                                        your project and I will get back to you as soon as I can. Please allow a couple days
                                        for
                                        me
                                        to respond.
                                    </p>
                                    <br>
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" placeholder="Nom">
                                            </div>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" placeholder="Email">
                                            </div>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" placeholder="Telephone">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <textarea placeholder="Ecrivez votre message ici..." class="form-control" rows="9"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="checkbox"><input type="checkbox"> Sign up for
                                                    newsletter</label>
                                            </div>
                                            <div class="col-sm-6 text-right ">
                                                <input class="btn btn-primary" type="submit" value="envoyer message">
                                            </div>
                                        </div>
                                    </form>
                                </article>
                                <!-- /Article -->
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->

                    <section class="page-section cta">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-9 mx-auto">
                                    <div class="cta-inner bg-faded text-center rounded">
                                        <aside class="col-sm-3 sidebar sidebar-right">

                                            <div class="widget">
                                                <h4>Adresse</h4>
                                                <address>
                                                    2002 Holcombe Boulevard, Houston, TX 77030, USA
                                                </address>
                                                <h4>Telehone:</h4>
                                                <address>
                                                    (+262) 79-11-41
                                                </address>
                                            </div>

                                        </aside>
                                        <!-- /Sidebar -->

                                    </div>
                                </div> <!-- /container -->
                            </div>
                        </div>
                </div>
            </div>
            </div>
            <section class="container-full top-space">
                <div id="map"></div>
            </section>
        </section>

        </div>
        @include('layouts.footer')
    </body>
@endsection
