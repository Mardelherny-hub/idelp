@extends('layouts.main')
@section('encabezado')
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <div class="view" style="background-image: url('img/bg-0.png'); background-repeat: no-repeat; background-size: cover;">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn d-inline">
                            <img src="{{ asset('img/logo.png') }}" class="mx-auto d-inline mb-4" alt="IDELP Logo">
                            <h1 class="mb-4 d-inline"><strong>IDELP</strong></h1>
                            <h2><strong>Instituto de Desarrollo<br> Laboral y Profesional</strong></h2>
                            <p class="mb-4 d-none d-md-block"><strong>Tecnicatura en Higiene & Seguridad - Convertite en un profesional capacitado y competitivo</strong></p>
                            <a href="inscripcion-idelp-2021/" class="btn btn-outline-white btn-lg">Inscripción 2021 Abierta
                                <i class="fas fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Mask & flexbox options-->
                </div>
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url('img/bg-1.png'); background-repeat: no-repeat; background-size: cover;">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                    <!-- Content -->
                    <div class="text-center white-text mx-5 wow fadeIn d-inline">
                        <img src="{{ asset('img/logo.png') }}" class="mx-auto d-inline mb-4" alt="IDELP Logo">
                        <h1 class="mb-4 d-inline"><strong>IDELP</strong></h1>
                        <h2><strong>Instituto de Desarrollo<br> Laboral y Profesional</strong></h2>
                        <p class="mb-4 d-none d-md-block"><strong>Tecnicatura en Higiene & Seguridad - Convertite en un profesional capacitado y competitivo</strong></p>
                        <a href="inscripcion-idelp-2021/" class="btn btn-outline-white btn-lg">Inscripción 2021 Abierta
                            <i class="fas fa-graduation-cap ml-2"></i>
                        </a>
                    </div>
                    <!-- Content -->
                </div>
                <!-- Mask & flexbox options-->
                </div>
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url('img/bg-2.png'); background-repeat: no-repeat; background-size: cover;">
                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn d-inline">
                            <img src="{{ asset('img/logo.png') }}" class="mx-auto d-inline mb-4" alt="IDELP Logo">
                            <h1 class="mb-4 d-inline"><strong>IDELP</strong></h1>
                            <h2><strong>Instituto de Desarrollo<br> Laboral y Profesional</strong></h2>
                            <p class="mb-4 d-none d-md-block"><strong>Tecnicatura en Higiene & Seguridad - Convertite en un profesional capacitado y competitivo</strong></p>
                            <a href="inscripcion-idelp-2021/" class="btn btn-outline-white btn-lg">Inscripción 2021 Abierta
                                <i class="fas fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Mask & flexbox options-->
                </div>
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previo</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
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

            <img src="{{ asset('img/student-5.png') }}" class="img-fluid z-depth-1-half" alt="Estudiante de IDELP">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Carrera de Higiene y Seguridad, Medioambiente y Calidad</h3>
            <p>Convertite en un profesional capacitado y competitivo en un ámbito con mucha demanda en el mercado laboral.</p>
            <p><strong>Título Oficial:</strong> Técnico Superior en Higiene y Seguridad, con orientación en Calidad y Medio Ambiente.</p>
            <!-- Main heading -->

            <hr>

            <p><strong>Duración</strong> 3 años.</p>

            <hr>

            <p><strong>Modalidad</strong> Presencial - Semi Presencial.</p>

            <!-- CTA -->
            <a href="inscripcion-idelp-2021/" class="btn btn-grey btn-md">Inscripción Abierta
              <i class="fas fa-graduation-cap ml-1"></i>
            </a>
            <a href="inscripcion-idelp-2021-requisitos-y-documentacion/" class="btn btn-grey btn-md">Requisitos
              <i class="fas fa-book ml-1"></i>
            </a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>


      <hr class="my-5">

      <!--Section: Estudiar en IDELP-->
      <section>

        <h2 class="my-5 h3 text-center">Estudiar en IDELP</h2>

        <!--First row-->
        <div class="row features-small mb-5 mt-3 wow fadeIn">

          <!--First column-->
          <div class="col-md-6">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Respaldo Institucional</h6>
                <p class="grey-text">Convenio con ATSA articulado con el Instituto de la Sanidad.
                	Avalada por la Dirección General de Escuelas.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Carrera Integral</h6>
                <p class="grey-text">Con eje central en la higiene y seguridad ocupacional. <br>
                	Asesorarás sobre las condiciones óptimas que debe tener un trabajador en el ámbito donde desarrolla sus actividades.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            <!--Third row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Enfoque medioambiental</h6>
                <p class="grey-text">Administrarás los recursos humanos y materiales de forma eficiente garantizando la sustentabilidad de una actividad con el medioambiente.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Third row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Sistemas de Calidad</h6>
                <p class="grey-text">Implementarás de sistemas de calidad planificando, controlando y evaluando las condiciones.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Fourth row-->

            <!--Fourth row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title">Salida laboral</h6>
                <p class="grey-text">Brindarás tus servicios en representación de empresas y ante los organismos oficiales.</p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Fourth row-->
          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-6 flex-center">
            <img src="{{ asset('img/work.png') }}" alt="Estudiante de IDELP" class="z-depth-1 img-fluid rounded">
          </div>
          <!--/Second column-->



        </div>
        <!--/First row-->

      </section>
      <!--Section: Estudiar en IDELP-->

      <hr class="mb-5">
		<!--Section: viedo-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">
				<!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Estudiar Higiene y Seguridad</h3>
            <p><strong>El mundo ha cambiado.</strong></p>
            <p>Cuidar la salud es hoy primordial en todos los aspectos de la actividad humana.</p>
            <p>El especialista en Seguridad e Higiene se convirtió en una función indispensable de toda empresa.
            Es el momento para todos los que como vos tienen la vocación de asistir y cuidar a sus semejantes.</p>
            <p>En IDELP encontrarás las herramientas fundamentales para que desarrolles esa vocación...</p>
            <!-- Main heading -->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- 4:3 aspect ratio -->
				<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
  					<iframe class="embed-responsive-item" src="{{ asset('video/telefe.mp4') }}"></iframe>
				</div>
          </div>
          <!--Grid column-->



        </div>
        <!--Grid row-->

      </section>
      <hr>
      <!--Section: More-->
      <section>

        <h2 class="my-5 h3 text-center">y mucho más...</h2>

        <!--First row-->
        <div class="row features-small mt-5 wow fadeIn">

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-clock fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2 pl-3">
                <h5 class="feature-title font-bold mb-1">Horarios</h5>
                <p class="grey-text mt-2">Horarios de cursado que te permitirán trabajar y estudiar</p>
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
                <i class="fas fa-book-open fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Formación de calidad</h5>
                <p class="grey-text mt-2">Formación de calidad y competitiva para integrarte al mundo del trabajo</p>
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
                <i class="fas fa-comments fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Comunidad educativa</h5>
                <p class="grey-text mt-2">Una comunidad de estudios donde recibirás asistencia y orientación necesarias</p>
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
                <i class="fas fa-graduation-cap fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Staff de profesores</h5>
                <p class="grey-text mt-2">Contarás con docentes de amplia experiencia, que además de la teoría te brindarán toda su experiencias de casos reales.</p>
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
