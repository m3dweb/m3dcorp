<!--header-->
@include('includes.header')
<!--end header-->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!--header-->
@include('includes.nav')
<!--end header-->


<script type="text/javascript">
            $(document).ready(function() {
                $(".intro-body").backgroundCycle({
                    imageUrls: [
                        'images/inginf.png',
                        'images/ingsis.png',
                        'images/admin.png',
                        'images/call.png'
                    ],
                    fadeSpeed: 2000,
                    duration: 5000,
                    backgroundSize: SCALING_MODE_COVER
                });
            });
        </script>


<header class="intro">
    <div class="intro-body">
        <div class="row textHeaderHome" >
            <div class="col-md-8 col-md-offset-2" >
                <h1 class="brand-heading"></h1>
                <p class="intro-text">
                    Un fantástico equipo de profesionales a tu servicio para lograr la solución perfecta a tus necesidades en Internet.
                </p>
                <a href="#sistemas" class="btn btn-circle page-scroll pulse"> <i class="fa fa-angle-double-down animated "></i> </a>
            </div>
        </div>
    </div>
</header>

<section id="sistemas" class="container-fluid content-section text-center " ng-controller="HomeCtrl">

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>SISTEMAS</h2>
            <div class="row">

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3>Sistemas</h3>
                            <p>
                                Gestionamos más de un centenar de servidores y appliances, tanto físicos como virtualizados.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3>GNU/Linux</h3>
                            <p>
                                En M3DWEB  gestionamos proyectos basados en la utilización de herramientas y aplicaciones Open Source:
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item">Balanceadores</li>
                                <li class="list-group-item">Centralitas Voz Ip</li>
                                <li class="list-group-item">Clusters alta disponibilidad</li>
                                <li class="list-group-item">Monitorización</li>
                                <li class="list-group-item">Servidores de correo</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3>Migraciones</h3>
                            <p>
                                Ofrecemos a nuestros clientes el proceso de migración de Sistemas Operativos y aplicaciones propietarias a soluciones de código abierto.
                                El proceso incluye un estudio de costes previo donde se valora el impacto económico derivado de la migración.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3>Seguridad</h3>
                            <p>
                                En M3DWEB ofrecemos una serie de servicios para la protección de las redes empresariales:
                            </p>


                            <ul class="list-group">
                                <li class="list-group-item">Antispam-Antivirus</li>
                                <li class="list-group-item">Firewall</li>
                                <li class="list-group-item">IDS</li>
                                <li class="list-group-item">VPN</li>
                                <li class="list-group-item">Webfilter</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="programacion" class="content-section text-center">
    <div>
        <div class="container" id="progweb">
            <h2>Programación Web</h2>

            <div class="row">

                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3> Diseño Webs corporativas</h3>
                            <p>
                               Creamos tu web corporativa basándonos en la mejor opción para la representación de la marca de nuestros clientes.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3>E-comerce</h3>
                            <p>
                               Desarrollamos sistemas de venta online, ofreciendo soluciones tanto a través de software preestablecido como
                                desarrollando plataformas a medida según las necesidades y requerimentos presentados por nuestros clientes, los límites los pones tu.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3> ERP- Software de gestión interna</h3>
                            <p>
                               Nuestro equipo de desarrolladores y analistas serán capaces de definir los módulos o el sistema mas óptimo para implementar en tu negocio con el objetivo de
                                mejorar la gestión interna, ya sea de inventario, facturación, compras, ventas, etc.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3>Análisis y modificaciones</h3>
                            <p>
                               Nuestros analistas serán capaces de estudiar cualquier plataforma, localizar bugs, agujeros de seguridad o definir los funcionales requeridos
                                en base a las definiciones entregadas por nuestros clientes para mejorar plataformas ya en uso.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="design" class="content-section text-center">
    <div>
        <div class="container-fluid">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Diseño</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="thumbnail">
                            <div class="caption">
                                <br/>

                                <p>
                                    Gestionamos más de un centenar de servidores y appliances, tanto físicos como virtualizados.
                                </p>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="proyectos" class="content-section text-center">




    <div>
        <div class="container-fluid">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Proyectos</h2>
                <h3>Algunos proyectos en los que hemos trabajado</h3>

     <div id="carousel" style="margin: 0 auto;">
        {!! HTML::image('images/ysana.png') !!}
        {!! HTML::image('images/torres.png') !!}
        {!! HTML::image('images/sw.png') !!}
        {!! HTML::image('images/uniexportasia.png') !!}
        {!! HTML::image('images/anf.png') !!}
        {!! HTML::image('images/enertrade.png') !!}
        {!! HTML::image('images/ferimet.png') !!}
        {!! HTML::image('images/radler.png') !!}

 	</div>
                <!--
                <a href="#" id="ui-carousel-next"><span>next</span></a>
				<a href="#" id="ui-carousel-prev"><span>prev</span></a>
				-->
            </div>
        </div>
    </div>

  <!--Partners-->

    <br>

    <div class="col-lg-8 col-lg-offset-2 partnersDiv">
        <h3>Partners con los que M3DWEB ha colaborado o colabora actualmente</h3>
        <div class="partners partner1"></div>
        <div class="partners partner2"></div>
        <div class="partners partner3"></div>
        <div class="partners partner4"></div>
        <div class="partners partner5"></div>
    </div>

</section>

<section id="contact" class="content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contacto</h2>
            <div class="row">
                <div class="formContact">
                    <!--si el formulario contiene errores de validación-->
                    @if($errors->any())
                    <div class='alert alert-danger'>
                        <!--recorremos los errores en un loop y los mostramos-->
                        @foreach ($errors->all() as $message)
                        <li>{{ $message }} </li>
                        @endforeach
                    </div>
                    @endif

                    {!!  Form::open(['url' => 'contacto'])  !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('message', 'Consulta:') !!}
                        {!! Form::textarea('mensage', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Send form', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close()   !!}
                </div>

                <div class="map">


                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2984.692805872966!2d2.0039662156221785!3d41.57589269225052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a492b7b145cbe7%3A0xae6c8eb69d08cee9!2sCtra.+de+Rellinars%2C+236%2C+08225+Terrassa%2C+Barcelona!5e0!3m2!1ses!2ses!4v1448577810238"
                            width="98%" height="452" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <ul class="list-inline banner-social-buttons">
                <li>
                    <a href="https://www.facebook.com/mtresd.solucionweb" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Facebook</span></a>
                </li>
                <li>
                    <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li>
                    <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                </li>
                <li>
                    <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Linked In</span></a>
                </li>
                <li>
                    <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!--footer-->
@include('includes.footer')


</body>
</html>


