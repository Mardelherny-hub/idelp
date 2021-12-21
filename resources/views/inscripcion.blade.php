@extends('layouts.main')
@section('encabezado')
    <!-- Full Page Intro -->
    <div class="view full-page-intro img-fluid"
        style="background-image: url('../img/h&s-00.png'); background-repeat: no-repeat; background-size: cover; ">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="container mt-5">

                <!--Grid row-->
                <div class="row wow fadeIn mt-5">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4 white-text text-center text-md-left">

                        <img src="../img/logo.png" class="mx-auto d-inline mb-4" alt="IDELP Logo">
                        <h1 class="mb-4 d-inline" style="color: #3C66AA">
                            <strong>IDELP</strong>
                        </h1>
                        <h2><strong>Instituto de Desarrollo<br> Laboral y Profesional</strong></h2>

                        <hr class="hr-light">

                        <h3>
                            <strong>Tecnicatura en Higiene & Seguridad</strong>
                        </h3>

                        <h4>
                            <strong>Inscripción 2021 Abierta</strong>
                        </h4>

                        <p class="mb-4 d-none d-md-block">
                            <strong>Estás a un paso de convertir tu vocación en realidad.<br>
                                Te acompañamos en todo el desarrollo de tu carrera profesional.</strong>
                        </p>

                        <!--<a href="#" class="btn btn-indigo btn-lg">Revisá los requisitos
                  <i class="fas fa-book ml-2"></i>
                </a>-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-xl-5 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card content-->
                            <div class="card-body">
                                <?php
  //si no se completó  muestro el form
  if(!isset($nombre)){
?>

                                <!-- Form -->
                                <form class="needs-validation" novalidate method="post" action="{{ route('contacto.store') }}"
                                    accept-charset="UTF-8">

                                    @csrf

                                    <!-- Heading -->
                                    <h3 class="dark-grey-text text-center">
                                        <strong>Queremos Conocerte</strong>
                                    </h3>
                                    <hr>

                                    <div class="md-form">
                                        <i class="fas fa-user prefix grey-text"></i>
                                        <input type="text" id="form3" class="form-control" name="nombre" required>
                                        <label for="form3">Nombre</label>
                                        <div class="invalid-feedback">
                                            Por favor ingresa tu nombre.
                                        </div>
                                    </div>
                                    <div class="md-form ">
                                        <i class="fas fa-user prefix grey-text"></i>
                                        <input type="text" id="form3" class="form-control" name="apellido" required>
                                        <label for="form3">Apellido</label>
                                        <div class="invalid-feedback">
                                            Por favor ingresa tu apellido.
                                        </div>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-envelope prefix grey-text"></i>
                                        <input type="email" id="email" class="form-control" name="email" required>
                                        <label for="form2">Email</label>
                                        <div class="invalid-feedback">
                                            Por favor ingresa una dirección de correo válida.
                                        </div>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-phone prefix grey-text"></i>
                                        <input type="text" id="form3" class="form-control" name="telefono" required>
                                        <label for="form3">Telefono</label>
                                        <div class="invalid-feedback">
                                            Por favor ingresa un número de teléfono de contacto.
                                        </div>
                                    </div>

                                    <div class="md-form">
                                        <i class="fas fa-pencil-alt prefix grey-text"></i>
                                        <textarea type="text" id="form8" class="md-textarea" name="comentario"></textarea>
                                        <label for="form8">Contanos lo que quieras</label>
                                    </div>
                                    <input type="hidden" name="fecha" value="{{ date("d/m/Y") }}">
                                    <div class="text-center">
                                        <button class="btn btn-indigo">Enviar</button>
                                    </div>

                                </form>
                                <!-- Form -->
                                <?php
  } //fin si no llenó el form
  else{
    //si el form fue completado se muestra la espuesta
?>
                                <!-- Respuesta -->
                                <!-- Heading -->
                                <h2 class="fas fa-check-circle fa-4x text-success text-center my-3 d-inline"></h2>
                                <h3 class="dark-grey-text text-center d-inline ml-5">
                                    <strong><?php echo $nombre; ?></strong>
                                </h3>
                                <hr>
                                <h4 class="dark-grey-text text-center">
                                    <strong>Recibimos tu mensaje</strong>
                                </h4>
                                <hr>

                                <div class="md-form">
                                    <i class="fas fa-phone prefix text-success"></i>
                                    <p class="ml-5 dark-grey-text">En breve nos estaremos comunicando.<br>
                                        Te acompañaremos para que desarrolles todo tu potencial, y puedas ejercer plenamente
                                        tu vocación.</p>
                                </div>
                                <!-- Respuesta -->
                                <?php
  } //fin de respuesta a form completado
?>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->

@endsection
@section('contenido')
    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Main info-->
            <section class="mt-5 wow fadeIn">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <img src="../img/main-inscripcion.png" class="img-fluid z-depth-1-half" alt="Estudiante de IDELP">

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!-- Main heading -->
                        <h3 class="h3 mb-3">Estudiar en IDELP</h3>
                        <p>Al estudiar en <strong>IDELP</strong> desarrollas todo tu potencial profesional y humano.</p>
                        <p>Dispones del mejor <strong>nivel académico</strong>, recursos y <strong>programas de
                                excelencia.</strong>.</p>
                        <p>Nuestra propuesta está basada en los requerimientos del actual mercado laboral.</p>
                        <!-- Main heading -->



                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>



            <hr class="mb-5">

            <!--Section: More-->
            <section>

                <h2 class="my-5 h3 text-center">Esta carrera te ofrecerá</h2>

                <!--First row-->
                <div class="row features-small mt-5 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-square fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2 pl-3">
                                <h5 class="feature-title font-bold mb-1">Formación</h5>
                                <p class="grey-text mt-2">En conocimientos técnicos que compatibilizan las demandas
                                    ambientales
                                    y las exigencias de calidad, seguridad y rentabilidad requeridas por el contexto
                                    productivo actual.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-square fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Conocimientos</h5>
                                <p class="grey-text mt-2">Que vinculan las áreas de seguridad, Salud en el Trabajo,
                                    Calidad y Ambiente para una salida laboral efectiva.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-square fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Aptitudes</h5>
                                <p class="grey-text mt-2">Que facilitan la adaptación a los
                                    escenarios cambiantes generados por los cambios tecnológicos.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-square fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Fortalecimiento</h5>
                                <p class="grey-text mt-2">De competencias personales para el uso del conocimiento
                                    como generador de valor, enfatizando en la creatividad, la innovación, la organización
                                    de tareas
                                    el uso de la tecnología y el trabajo en equipo.

                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                </div>
                <!--/First row-->



            </section>
            <!--Section: More-->

        </div>
    </main>
    <!--Main layout-->
@endsection
