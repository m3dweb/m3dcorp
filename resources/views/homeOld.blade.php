<!--header-->
@include('includes.header')
<!--end header-->

</head>



<!--menu-->
@include('includes.menu')
<!--end menu-->
<div style="clear: both"></div>

<div id="slider" class="nivoSlider">

    {!! HTML::image('images/intro-bg.jpg', 'intsol', array('class' => 'thumb', 'data-trasition' => 'slideInLeft'))  !!}

    {!! HTML::image('images/datos.jpg', 'datos', array(' data-thumb' => 'thumb', 'data-trasition' => 'slideInLeft')) !!}

    {!! HTML::image('images/datos2.jpg', 'datos2', array(' data-thumb' => 'thumb', 'data-trasition' => 'slideInLeft')) !!}

    {!! HTML::image('images/php.jpg', 'php', array(' data-thumb' => 'thumb', 'data-trasition' => 'slideInLeft'))  !!}

    {!! HTML::image('images/seguridad.jpg', 'seguridad', array(' data-thumb' => 'thumb', 'data-trasition' => 'slideInLeft'))  !!}

    {!! HTML::image('images/sistemas.jpg', 'sistemas', array(' data-thumb' => 'thumb', 'data-trasition' => 'slideInLeft'))  !!}

    {!! HTML::image('images/social.jpg', 'social', array(' data-thumb' => 'thumb', 'data-trasition' => 'slideInLeft'))  !!}

    {!! HTML::image('images/intsol.jpg', 'intsol', array('class' => 'thumb', 'data-trasition' => 'slideInLeft'))  !!}
</div>

<header class="intro" ng-controller="HomeCtrl">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" >
                    <h1 class="brand-heading">Kerberos Network Solutions</h1>
                    <p class="intro-text">
                        Administración y gestión de sistemas Linux/Unix/BSD
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
                            <p>
                                <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
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
                                Proceso de migración de Sistemas Operativos y aplicaciones propietarias a soluciones de código abierto.
                            </p>
                            <div ng-if="respuesta" class="alert alert-success" role="alert">
                                <span ng-bind="respuesta"></span>
                            </div>
                            <form ng-submit="addTodo(newTodo)">
                                <div class="input-group">
                                    <input type="text" class="form-control" ng-model="newTodo" placeholder="Agregar..." focus>
											<span class="input-group-btn">
												<button class="btn btn-default" type="button" ng-click="addTodo()">
                                                    Go!
                                                </button> </span>
                                </div>
                            </form>
                            <br>
                            <div class="list-group">
                                <div ng-if="items.length > 0" class="list-group-item todo-item slide" ng-repeat="item in items" ng-class="{'animated pulse': item.complete}">
                                    <span class="close" ng-click="removeTodo($index)">&times;</span>
                                    <label class="label">
                                        <input type="checkbox" ng-model="item.complete">
                                        <span ng-bind="item.text | limitTo:20">This is the content of the Todo</span> </label>
                                </div>
                            </div>
                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button ng-if="items.length > 1" type="button" class="btn btn-danger" ng-click="clearAll()">
                                        Clear All
                                    </button>
                                </div>
                                <div ng-if="items.length > 0" class="btn-group" role="group">
                                    <button type="button" class="btn  btn-success" ng-click="sendAll()">
                                        Enviar Items
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3>Migraciones</h3>
                            <p>
                                Ofrecemos una serie de servicios para la protección de las redes empresariales.
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
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
                                Gestionamos proyectos basados en la utilización de herramientas y aplicaciones Open Source.
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="programacion" class="content-section text-center">
    <div>
        <div class="container">
            <h2>Programación</h2>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3>Sistemas</h3>
                            <p>
                                Gestionamos más de un centenar de servidores y appliances, tanto físicos como virtualizados.
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3>Seguridad</h3>
                            <p>
                                Gestionamos proyectos basados en la utilización de herramientas y aplicaciones Open Source.
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <br/>
                            <h3>Sistemas</h3>
                            <p>
                                Gestionamos más de un centenar de servidores y appliances, tanto físicos como virtualizados.
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
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
                                <h3>Sistemas</h3>
                                <p>
                                    Gestionamos más de un centenar de servidores y appliances, tanto físicos como virtualizados.
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
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
                                <h3>Sistemas</h3>
                                <p>
                                    Gestionamos más de un centenar de servidores y appliances, tanto físicos como virtualizados.
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail">
                            <div class="caption">
                                <br/>
                                <h3>Seguridad</h3>
                                <p>
                                    Gestionamos proyectos basados en la utilización de herramientas y aplicaciones Open Source.
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="content-section text-center">
    <div>
        <div class="container-fluid">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Blog</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <br/>
                                <h3>Sistemas</h3>
                                <p>
                                    Gestionamos más de un centenar de servidores y appliances, tanto físicos como virtualizados.
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <br/>
                                <h3>Sistemas</h3>
                                <p>
                                    Gestionamos más de un centenar de servidores y appliances, tanto físicos como virtualizados.
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <br/>
                                <h3>Sistemas</h3>
                                <p>
                                    Gestionamos más de un centenar de servidores y appliances, tanto físicos como virtualizados.
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
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
                                <h3>Sistemas</h3>
                                <p>
                                    Gestionamos más de un centenar de servidores y appliances, tanto físicos como virtualizados.
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail">
                            <div class="caption">
                                <br/>
                                <h3>Seguridad</h3>
                                <p>
                                    Gestionamos proyectos basados en la utilización de herramientas y aplicaciones Open Source.
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="container content-section text-center">
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

                    <iframe width="98%" height="452" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="http://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=ca&amp;geocode=&amp;q=barcelona+via+agusta+29&amp;aq=&amp;sll=41.387917,2.169919&amp;sspn=0.265303,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=Via+Augusta,+29,+08006+Barcelona,+Catalunya&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                </div>
            </div>
            <ul class="list-inline banner-social-buttons">
                <li>
                    <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li>
                    <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                </li>
                <li>
                    <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<footer>
    <div class="containe-fluidr text-center">
        <p>
            Copyright &copy; Your Website 2015
        </p>
    </div>
</footer>

<!-- Angular -->
<script src="assets/js/angular.js"></script>
<script src="assets/js/angular/app.js"></script>
<script src="assets/js/angular/angular-animate.js"></script>
<script src="assets/js/angular/angucomplete.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="assets/js/jquery.easing.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="assets/js/grayscale.js"></script>

<script>
    $(".pulse").hover(function() {
        $(this).addClass("animated infinite pulse");
    }, function() {
        $(this).removeClass("animated infinite pulse");
    });

</script>

<style>
    .pulse.ng-enter {
        transition: 0.5s linear all;
        opacity: 0;
    }

    /* The finishing CSS styles for the enter animation */
    .pulse.ng-enter.ng-enter-active {
        opacity: 1;
    }
</style>
</body>

</html>

<!--
<div class="homeContent kerberos">
    <h1>PRESENTACION</h1>
<p class="textoPre">KERBEROS ES UNA EMPRESA QUE MOLA MUCHO Y QUE AHORA ESTÁ RECIBIENDO UN NUEVO IMPULSO GRACIAS A LA INCORPORACIÓN DE DOS
    NUEVOS CRACKS QUE APORTARÁN SUS CONOCIMIENTOS EN LAS AREAS TECNOLOGICAS QUE DOMINAN, Y AUNQUE ESTE ES UN TEXTO DE EJEMPLO
AQUÍ PONDRÍAMOS LA DESCRIPCIÓN DE LA EMPRESA.</p>
    <p class="textoPre"> UNA PEQUEÑA PRESETNACIÓN DEFINIENDO LO QUE QUIERE EXPRESAR LA MARCA KERBEROS, CONFIANZA, PROFESIONALIDAD
Y EN GENERAL TODAS ESAS COSAS MOLONAS Y QUE LE GUSTA LEER A LA GENTE PARA QUE DESPUÉS SE DEJEN TODO EL DINERITO COMPRANDOTE SERVICIOS QUE HARÁN QUE GANE MAS DINERITO
PARA SEGUIR GASTANDO EN MAS SERVICIOS Y ASÍ HASTA QUE NOS HAGAMOS RICOS, Y AUNQUE ESTE SEA UN TEXTO DE RELLENO , IMAGINO QUE MÁS O MENOS OCUPARÍA LO QUE SERÍA
    EL TEXTO DE PRESENTACIÓN DE LA EMPRESA ASÍ QUE VOY A IR TERMINANDO, A LO MÁS CREO QUE SE PODRÍA ACOMPAÑAR DE UNA IMAGEN PERO ON ESTOY SEGURO PORQUE JUSTO ARRIBA TENEMOS UN SUPERSLIDER X-D</P>
    <p class="textoPre">QUIZA EL LOGO</p>

</div>
<div class="homeContent development">
    <h1>DESARROLLOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO</h1>
    <p class="textoPre">El departamento tecnológico de Kerberos Network Solutions tiene la capacidad de ofrecerte cualquier solución para las necesiaddes que tenga tu negocio:<br><br></p>
    <p class="textoPre">Webs corporativas:</p>
    <p>Si tus necesidades pasan por proyectar la imagen de tu negocio en internet, desde Kerberos podremos ofrecerte la solución que má se ajuste a tu modelo de negocio y mas
        beneficio económico pueda aportar a tu presencia en la red, planificando una estrategia de marketing online para después proyectarla en forma de una maginifica web corporativa
        que transmita los valores que definen a tu marca. </p>
    <p class="textoPre">E-comerce:</p>
    <p>Desde Kerberos ofrecemos un servicio de desarrollo de e-comerce personalizado para los clientes más exigentes, resolviendo cada una de sus necesidades
        a la hora de vender sus productos desde la red, manteniendo siempre la estrategia de venta marcada por la marca y sabiendola llevar de la mejor forma a internet, para que los futuros clientes
        cuando estén comprando en vuestra tienda online, sientan que realmente están en una tienda de vuestra marca.
        Totalmente diseñados y personalizados por nosotros consiguirán que disfruteis de una experiencia única al poder gestionar y personalizar vuestra tienda acorde con vuestras necesidades.</p>
   <p class="textoPre">Gestores de contenido:</p>
    <p>Hoy en día es muy común disponer de desarrollos adquiridos que no tienen la opción de administrarse a través de un panel,
    esto hace que cada vez que se quiera realizar cualquier modificación en vuestra aplicación necesiteis recurrir a profesionales de la programación, sumando gastos cada vez que esto ocurra
        y transmitiendo la sensación que no teneis el control de la aplicación.
    Para este problema la solución que recomendamos es la integración de un panel de administración de contenidos desde donde podreis gestionar cualquier parte de la aplicación, desde textos, menús
    , cambios de imagen, gestión de las bases de datos, productos, etc. Los límites los pones tú.</p>
    <p class="textoPre">Desarrollo de ERP(sistemas de planificación de recursos empresariales):</p>
    <p>Los sistemas de planificación de recursos empresariales son sistemas de gestión de información que
        automatizan muchas de las prácticas de negocio asociadas con los aspectos operativos o productivos de una empresa.</p>

        <p> Las aplicaciones ERP son sistemas de gestión global para la empresa. Se caracterizan por estar compuestos por diferentes módulos.
        Estas partes son de diferente uso, por ejemplo: producción, ventas, compras, logística, contabilidad (de varios tipos), gestión de proyectos,
        GIS, inventarios y control de almacenes, pedidos, nóminas, etc. Lo contrario sería como considerar un simple programa de facturación como un ERP por el simple hecho de que una
        empresa integre únicamente esa parte.</p>

    <p >Los objetivos principales de los sistemas ERP son:</p>

        <p>Optimización de los procesos empresariales.</p>
        <p>Acceso a la información.</p>
        <p>Posibilidad de compartir información entre todos los componentes de la organización.</p>
        <p>Eliminación de datos y operaciones innecesarias de reingeniería.</p>

    <p>El propósito fundamental de un ERP es otorgar apoyo a los clientes del negocio, tiempos rápidos de respuesta a sus problemas, así como un eficiente manejo
        de información que permita la toma oportuna de decisiones y disminución de los costos totales de operación.</p>

    <p>Los beneficios que puede aportar una herramienta de ERP se resumen en la resolución de los problemas contables, mercantil o fiscal de la empresa. Asimismo,
        puede permitir un mayor control del inmovilizado en el inventario permanente, conciliación bancaria, liquidación de impuestos, etc.</p>

    <p>Las características que distinguen a un ERP de cualquier otro software empresarial son que deben ser modulares y configurables:</p>

        <p>Modulares. Los ERP entienden que una empresa es un conjunto de departamentos que se encuentran interrelacionados por la información que comparten y que se genera
        a partir de sus procesos. Una ventaja de los ERP, tanto económica como técnica, es que la funcionalidad se encuentra dividida en módulos, los cuales pueden instalarse de acuerdo con los requerimientos del cliente. Ejemplo: ventas, materiales, finanzas, control de almacén, recursos humanos, etc.
        Configurables. Los ERP pueden ser configurados mediante desarrollos en el código del software. Por ejemplo, para controlar inventarios, es posible que una
        empresa necesite manejar la partición de lotes pero otra empresa no. Los ERP más avanzados suelen incorporar herramientas de programación de cuarta generación
        para el desarrollo rápido de nuevos procesos.</p>

    <p>Otras características destacadas de los sistemas ERP son:</p>

    <p>Base de datos centralizada.</p>
        <p>Los componentes del ERP interactúan entre sí consolidando las operaciones.
        En un sistema ERP los datos se capturan y deben ser consistentes, completos y comunes.
        Las empresas que lo implanten suelen tener que modificar alguno de sus procesos para alinearlos con los del sistema ERP. Este proceso se conoce como reingeniería
        de procesos, aunque no siempre es necesario.</p>

    <p>Las soluciones ERP en ocasiones son complejas y difíciles de implantar debido a que necesitan un desarrollo personalizado para cada empresa partiendo de la
        configuración inicial de la aplicación, que es común. Las personalizaciones y desarrollos particulares para cada empresa requieren de un gran esfuerzo en tiempo,
        y por consiguiente en dinero, para modelar todos los procesos de negocio de la vida real en la aplicación.</p>

    <p>Las metodologías de implantación de los ERP en la empresa no siempre son todo lo simples que se desearía, dado que entran en juego múltiples facetas.</p>

    <p>No hay recetas mágicas ni guiones explícitos para implantaciones exitosas; solamente trabajo bien realizado, una correcta metodología y aspectos que deben
        cuidarse antes y durante el proceso de implantación, e inclusive cuando el sistema entra en funcionamiento. Por ello, antes, durante y después de la implantación de un ERP
        es conveniente efectuar los siguientes procedimientos:</p>


    <p>Definición de resultados que debe de obtener con la implantación de un ERP.</p>
    <p>Definición del modelo de negocio.</p>
    <p> Definición del modelo de gestión.</p>
    <p> Definición de la estrategia de implantación.</p>
    <p> Evaluación de oportunidades para software complementario al producto ERP.</p>
    <p> Alineamiento de la estructura y plataformas tecnológicas.</p>
    <p> Análisis del cambio organizativo.</p>
    <p> Entrega de una visión completa de la solución que implantar.</p>
    <p> Implantación del sistema.</p>
    <p> Controles de calidad.</p>
    <p> Auditoría del entorno técnico y del entorno de desarrollo.
    </p>


</div>

<div class="homeContent systems">
    <h1>SISTEMASSSSSSSSSSSSSSSSSSSSSS</h1>
    <p class="textoPre">Administración y gestión de sistemas Linux/Unix/BSD. </p>
    <p>Administración y gestión de sistemas Linux/Unix/BSD.

        Actualmente gestionamos el día a día de más de un centenar de servidores y appliances, tanto físicos como virtualizados.<br>


        Estos son algunos de los servicios que ofrecemos actualmente a nuestros clientes :<br>

        Soporte y administración, tanto remota como presencial de servidores Linux/Unix/BSD.<br>
        Gestión de sistemas de protección perimetral, firewalls, proxys, etc..<br>
        Copias de seguridad.<br>
        Actualización de sistemas operativos, kernels y versiones de software Open Source.<br>
        Instalación y configuración de nuevo hardware.<br>
        Consultoría técnica.<br>
        Planificación de seguridad pre-auditorias e ISOS.<br>
        Documentación de configuraciones y topografías de los sistemas.<br>
        Resolución de problemas.<br>
        Configuración óptima de los sistemas.<br>
        Implantación de Planes de Recuperación ante Desastres (PRD).<br>
        </p>
    <p class="textoPre">Migraciones</p>
    <p>Ofrecemos a nuestros clientes el proceso de migración de Sistemas Operativos y aplicaciones propietarias a soluciones de código abierto.<br>
        El proceso incluye un estudio de costes previo donde se valora el impacto económico derivado de la migración.<br>
        MS-DNS/DHCP<br>

        Migración de los servicios DHCP y DNS a Linux BIND / DHCPD.<br>
        Dominio NT / Active Directory<br>

        Migración de los servicios de directorio y autenticación Windows NT, Active Directory a Linux Samba / OpenLDAP.<br>
        Servidores Ficheros MS<br>

        Migración de Servicio de ficheros compartidos MS a Linux Samba<br>
        Servidores Impresión<br>

        Migración de los servicios de impresión de Windows a Linux CUPS / Samba<br>
        MS Exchange<br>

        Migración de servidores de correo MS Exchage a Linux Postfix / Sendmail / Zimbra<br>
        IIS web<br>

        Migración servidores web IIS a Linux Apache / Tomcat<br>

        </p>
    <p class="textoPre">Seguridad en Redes</p>
    <p>Durante los primeros años de internet, los ataques a sistemas informáticos requerían pocos conocimentos técnicos. Por un lado, los ataques realizados desde el interior de la red se
        basaban en la alteración de permisos para modificar la información del sistema.
        Por el contrario, los ataques externos se producían gracias al conocimiento de las contraseñas necesarias para acceder a los equipos de la red.
        Con el paso de los años se han ido desarrollando nuevos ataques cada vez más sofisticados para explotar vulnerabilidades tanto en el diseño de las rees TCP/IP como en la configuración
        de los sistemas informáticos que conforman las redes conectadas a internet.

        En Kerberos Network Solutions ofrecemos una serie de servicios para la protección de las redes empresariales.
        </p>
    <p class="subtextoPre">Antispam-Antivirus</p>
    <p>Solución integrada de hardware y software que brinda una protección total para
        los servidores de correo electrónico. Una solución que permite eliminar virus y
        correos no deseados en organizaciones mediante la siguiente protección:<br>
        Protección contra correo no deseado<br>
        Protección antivirus<br>
        Protección contra “Spoofing”<br>
        Protección contra “Phishing”<br>
        Protección contra archivos maliciosos adjuntos<br>
        </p>
    <p class="subtextoPre">Firewall</p>
    <p>Un firewall o cortafuegos es un dispositivo que actúa en la primera línea de defensa frente a cualquier ataque entrante o mal uso de nuestra red. Puede desviar o suavizar el efecto de muchos tipos de ataques y proteger a nuestros servidores y estaciones de trabajo internos de internet.
        El secreto menos conocido y raramente anunciado en algunos cortafuegos es que están
        recubiertos por un software de libre distribución. </p>
    <p>Firewall de Aplicaciones

        Protege las aplicaciones y servicios Web de los ataques maliciosos, aumentando
        el rendimiento y la escalabilidad de las aplicaciones.
        Concentra el tráfico entrante y saliente de todos los servidores y aplicaciones
        web en un único punto.
        </p>
    <p class="subtextoPre">IDS</p>
    <p>Estos programas son básicamente sniffers modificados que monitorizan todo el tráfico de red.<br>
        Detectan y alertan de todo movimiento potencialmente dañino.<br>
        También es posible bloquear las amenazas configurando comjuntamente el IDS con el Firewall.<br>
        Así mismo existen herramientas de terceros para mostrar informes en tiempo real.<br>
        La forma principal de conseguirlo es examinando el tráfico de entrada e intentar compararlo con una base de datos de actividades dañinas conocidas denominadas firmas.<br>

        </p>
    <p class="subtextoPre">VPN</p>
    <p>Una red privada virtual (Virtual Private Network) es una red privada que se extiende, mediante un proceso de encapsulación y en algún caso de encriptación, desde los paquetes de datos a diferentes puntos remotos.
        Los paquetes de datos de la red privada viajan por un tunel definido en la red
        pública.<br>

        Básicamente existen tres arquitecturas de conexión VPN:<br>
        Punto a punto (Point to Point)<br>
        Acceso remoto (Road Warrior)<br>
        Encapsulamiento (Tunneling)<br>

        Cada arquitectura utiliza diversas combinaciones de protocolos (IPSec, PPTP, L2TP, SSL/TLS o SSH) para garantizar las tres características fundamentales:<br>
        Autenticación<br>
        Integridad<br>
        Confidencialidad<br>
        </p>
    <p class="subtextoPre">WebFilter</p>
    <p>Un filtro de contenido es un programa diseñado para controlar qué contenido se permite mostrar, especialmente para restringir el acceso a ciertos materiales de la Web.<br>
        El filtro de contenido determina qué contenido estará disponible en una máquina o red particula.<br>
        Bloqueo de sitios Web según el dominio, tipo de URL o categoría de contenido.<br>
        Bloqueo por expresiones regulares.<br>
        Bloqueo de descargas según el tipo de archivo.<br>
        Bloqueo de las aplicaciones que acceden a Internet.<br>
        Bloqueo por usuarios y franjas horarias.<br>
        Autenticación Active Directory / OpenLDAP.<br>
        </p>
    <p class="textoPre">Soluciones GNU/Linux</p>
    <p>En Kerberos Network Solutions gestionamos proyectos basados en la utilización de herramientas y aplicaciones Open Source.</p>
    <p class="subtextoPre">Balanceadores</p>
    <p>Load Balancer<br>
        Balanceo de carga, mediante algoritmos, de cualquier protocolo basado en TCP o UDP sobre dos o más servidores.<br>
        Link Balancer<br>
        Solución para el enrutamiento y gestión de tráfico a través de múltiples conexiones.<br>
        Conmutación automática en caso de fallo, garantizando siempre la salida a Internet.<br>
        </p>
    <p class="subtextoPre">Centralitas Voz IP</p>
    <p>Asterisk fue creada en 1999 por Mark Spencer de la empresa Digium y donada a la comunidad con licencia libre tras lo cual se han recibido muchas colaboraciones
        y mejoras por parte de muchos desarrolladores libres y empresas sin solicitar nada a cambio.<br>

        Poco a poco, esta aplicación se ha convertido en la evolución de las tradicionales centralitas analógicas y digitales permitiendo también integración con la
        tecnología más actual: VoIP. Asterisk se convierte así en el mejor, más completo, avanzado y económico sistema de comunicaciones existente en la actualidad.<br>

        Otro aliciente es su capacidad de ser programada, permitiendo realizar labores que hasta el día de hoy lo llevaban realizando sistemas extremadamente costosos y complicados y,
        gracias a Asterisk, esta misma labor se realiza de una forma más económica lo que fomenta el uso de sistemas libres como Linux y estándares abiertos como SIP, H323 o IAX.<br>

        Una de las ventajas más interesantes es su posibilidad como sistema híbrido, ya que permite gestionar comunicaciones telefónicas tradicionales (analógicas, digitales, móviles, …)
        como comunicaciones IP mediante el uso de los protocolos estandar de VoIP.<br>

        opt

        En Kerberos Network Solutions colaboramos activamente con Optisitem en la implantación de Centralitas VoIP Asterisk, cifrado de comunicaciones para fortalezar el protocolo SIP
        y asegurar la comunicación entre sedes.<br>
        Así como en el cifrado de datos entre la centralita, los teléfonos, los softphones y smartphones.<br>
        </p>
    <p class="subtextoPre">Clusters Alta Disponibilidad</p>
    <p>Un cluster de alta disponibilidad es un conjunto de dos o más máquinas que se
        caracterizan por mantener una serie de servicios compartidos y por estar
        constantemente monitorizándose entre sí. </p>
    <p class="subtextoPre">Monitorización</p>
    <p>oftware que proporciona una gran versatilidad para consultar prácticamente cualquier parámetro de interés de un sistema.
        Cuando estos parámetros exceden de los márgenes definidos por el administrador, genera alertas que pueden ser recibidas por los responsables correspondientes mediante email, SMS, u otros medios.</p>
    <p class="subtextoPre">Servidores de Correo</p>
    <p>El correo es una aplicación que contiene información muy confidencial para algunas empresas. Por lo tanto su ubicación o gestión no dería estar en manos de terceros y mucho menos compartir recursos con otras empresas.<br>

        Kerberos Network Solutions ofrece a sus clientes la posibilidad de tener su propio servidor de correo en un entorno seguro definido y autogestionado por el mismo.<br>

        Este servicio suele complemetarse con nuestros sistemas Antispam/Antivirus.<br>
        </p>
</div>

<div class="homeContent design">
    <h1>DISEÑOOOOOOOOOOOOOOOO</h1>
    <p class="textoPre">AQUI VENDRIA LO QUE SERía diseño en caso de que se subiese</p>



</div>

<div class="homeContent socialMedia">
    <h1>SOCIAL MEDIA SEO/SEM</h1>
    <p class="textoPre">AQUI VENDRIA LO QUE SERIA SOCIAL MEDIA Y POSICIONAMIENTO SEO/SEM, ESTA SECCIÓN LA PODEMOS DEJAR DE MOMENTO EN STANDBY HASTA TENER A ALGUIEN QUE QUIZÁ PDORÍA ENCARGARSE DE LLEVARLA Y GESTIONARLA</p>



</div>



<div class="contentSubfooter">
    <div class="address">
direccion
    </div>
    <div class="advice">
asesorameinto
    </div>

</div>
!-->
<!--footer-->
@include('includes.footer')