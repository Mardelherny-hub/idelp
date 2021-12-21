@extends('layouts.main')
@section('encabezado')
     <!-- Full Page Intro -->
   <div class="view" style="background-image: url('../img/bg-cursos.png'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="text-center white-text wow fadeIn">
      <img src="../img/logo.png" class="mx-auto d-inline mb-4"	alt="IDELP Logo">
                          <h1 class="d-inline">
                      <strong>IDELP</strong>
                </h1>
                <h2 class="mb-4"><strong>Instituto de Desarrollo Laboral y Profesional</strong></h2>
              <h3 class="mb-4">
                <strong>Cursos <br> Actualización y Perfeccionamiento Profesional</strong>
              </h3>
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

      <!--Section: Cards-->
      <section class="pt-5">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-5 col-xl-4 mb-4">
            <!--Featured image-->
            <div class="view overlay rounded z-depth-1">
              <img src="../img/1-curso.png" class="img-fluid" alt="">
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
            <h3 class="mb-3 font-weight-bold dark-grey-text">
              <strong>Normas de Bioseguridad</strong>
            </h3>
            <h4>En el ámbito de la salud</h4>
            <p class="text-right">
                <strong>
                  <i class="far fa-clock"></i> 20/11/2020</strong>
            </p>
            <p class="grey-text">Bioseguridad, concepto y propósito - Estrategias generales</p>
            <p>Exposición, cadenas de transmisión. Puerta de entrada. Hospedera. Riesgo biológico. Concepto.
              Precauciones estándares. Precauciones adicionales según vía de exposición.
              Equipos de protección personal (EPP).</p>
            <p>Salud ocupacional. Concepto y propósito. Definición de accidente laboral.
              Prevención de accidentes. Accidentes in situ e in itinere. Accidentes con y sin riesgo biológico
            </p>
            <p>Denuncia administrativa de un accidente laboral.</p>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#centralModalLGInfoDemo">
              INSCRIPCIÓN
            </button>
            <!-- Central Modal Large Info-->
            <div class="modal fade" id="centralModalLGInfoDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading lead">Inscripción</p>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                      </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                      <div class="text-center">
                        <i class="fas fa-ban fa-4x mb-3 animated rotateIn"></i>
                        <p>INSCRIPCIÓN FINALIZADA</p>
                      </div>

                    </div>


                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!-- Central Modal Large Info-->
          <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="mb-5">

      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Main layout-->
@endsection
