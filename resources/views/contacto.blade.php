@extends('layouts.main')
@section('encabezado')
<!-- Full Page Intro -->
<div class="view" style="background-image: url('../img/bg-requisitos.png'); background-repeat: no-repeat; background-size: cover;">


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
                Requisitos y Documentación de Inscripción
              </h3>
      </div>
      <!-- Content -->

@endsection
@section('contenido')
<!--Main layout-->
<main>
    <div class="container">

      <!--Section: Cards-->
      <section class="pt-5">

      	<!-- Heading & Description -->
        <div class="wow fadeIn">
          <!--Section heading-->
          <h2 class="h1 text-center mb-5">Requisitos de Ingreso</h2>
          <!--Section description-->
          <p class="text-center">Requisitos y documentación necesarias para tu ingreso. </p>
          <!-- <p class="text-center mb-5 pb-5">Trusted by over
            <strong>400 000</strong> developers and designers. Easy to use & customize. 400+ material UI elements,
            templates
            & tutorials.</p> -->
        </div>
        <!-- Heading & Description -->

        <hr class="mb-5">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col mb-4">
            <h3 class="mb-3 font-weight-bold dark-grey-text"><i class="fas fa-clipboard-list fa-1x mr-4 indigo p-2 white-text rounded " aria-hidden="true"></i>
              <strong>Condiciones de ingreso</strong>
            </h3>

            <div class="list-group-flush">
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-check text-primary p-1 mr-4" aria-hidden="true"></i>
    						Fotocopia del DNI: ambos lados. En caso de DNI en trámite: Fotocopia de constancia de trámite con fecha límite y cédula de identidad.
    					</p>
  					</div>
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-check text-primary p-1 mr-4" aria-hidden="true"></i>
    						Fotocopia de Acta de Nacimiento.
    					</p>
  					</div>
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-check text-primary p-1 mr-4" aria-hidden="true"></i>
    						Fotocopia del acta legaliza de certificado analítico del nivel medio o fotocopia de constancia en trámite con fecha límite.
    					</p>
  					</div>
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-check text-primary p-1 mr-4" aria-hidden="true"></i>
    						Certificado de aptitud psicofísica, expedido por el CONI, o fotocopia de constancia del trámite con fecha límite.
    					</p>
  					</div>
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-check text-primary p-1 mr-4" aria-hidden="true"></i>
    						Certificados actualizados de vacunación contra hepatitis B, doble BCG y grupo sanguíneo.
    					</p>
  					</div>
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-check text-primary p-1 mr-4" aria-hidden="true"></i>
    						Constancia de CUIT o CUIL.
    					</p>
  					</div>
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-check text-primary p-1 mr-4" aria-hidden="true"></i>
    						Fotocopia de recibo de pago de inscripción.
    					</p>
  					</div>
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-check text-primary p-1 mr-4" aria-hidden="true"></i>
    						Seis fotos 4x4, originales, color y actualizadas.
    					</p>
  					</div>
				</div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col mb-4">
            <h3 class="mb-3 font-weight-bold dark-grey-text"><i class="fas fa-question fa-1x mr-4 indigo p-2 white-text rounded " aria-hidden="true"></i>
              <strong>Preguntas</strong>
            </h3>

            <div class="list-group-flush">
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-question text-primary p-1 mr-4" aria-hidden="true"></i>
							<strong>¿Cuándo comienza la inscripción?</strong><br>
							La inscripción  comienza durante la primera quincena de agosto y está abierta hasta el inicio de
							la cursada en marzo de 2021.
							Las inscripciones tempranas tienen como beneficio un descuento en la cuota de reserva de vacante
							y elegir los días posibles de cursada.
    					</p>
  					</div>
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-question text-primary p-1 mr-4" aria-hidden="true"></i>
						<strong>¿Se debe dar examen de ingreso?</strong><br>
						Para los que hayan terminado el nivel anterior al de Educación Superior no Universitario
						no deben rendir ningún examen de ingreso.
    					</p>
  					</div>
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-question text-primary p-1 mr-4" aria-hidden="true"></i>
						<strong>Duración de la carrera y régimen de cursada</strong><br>
						La carrera tiene una duración de tres años y las materias tienen un régimen de cursada cuatrimestral.
    					</p>
  					</div>
  					<div class="list-group-item">
    					<p class="mb-0"><i class="fas fa-question text-primary p-1 mr-4" aria-hidden="true"></i>
						<strong>¿Los títulos son Oficiales?</strong><br>
						Si, el título que obtienes en IDELP tiene validez nacional y son oficiales.
    					</p>
  					</div>
				</div>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->



      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Main layout-->
@endsection
