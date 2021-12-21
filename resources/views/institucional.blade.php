@extends('layouts.main')
@section('encabezado')
   <!-- Full Page Intro -->
   <div class="view" style="background-image: url('../img/bg-institucional.png'); background-repeat: no-repeat; background-size: cover;">

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
              Carrera de Higiene y Seguridad, Medioambiente y Calidad
              </h3>
              <h4><strong>Institucional</strong></h4>
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


		 <!-- Section ubicacion -->
      <section class="mt-5 mx-2 pb-3" role="navigation">
      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!--Card-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">Aquí estamos</div>
            <!--Card content-->
            <div class="card-body">
              <!--Google map-->
					<div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.9373111081645!2d-68.84021048550296!3d-32.8998256809351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e09b8422b732f%3A0xb28e8a21245641ff!2sInstituto%20de%20Desarrollo%20Laboral%20y%20Profesional!5e0!3m2!1ses-419!2sar!4v1608050076871!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
              <!--Google Maps-->
            </div>
            <!-- card content -->
          </div>
          <!--/.Card-->
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!--Card-->
          <div class="card">
            <!-- Card header -->
            <div class="card-header">Vías de Comunicación</div>
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
                <h5 class="card-title">Teléfonos</h5>
                <!--Text-->
                <ul class="card-text text-left list-unstyled">
                  <li class="mb-2" style="min-width: 210px;">
                  	<i class="fas fa-phone text-primary pl-4 pr-4 d-inline"></i>
                  	Consultas 2612 42-7937
                  </li>
                  <li class="mb-2" style="min-width: 210px;">
                  	<i class="fab fa-whatsapp text-primary pl-4 pr-4 d-inline"></i>
                  	Whatsapp
                  	<a href="https://api.whatsapp.com/send?phone=5492612427937"  target="blank">
                  	+54 9 2612 42-7937
                  	</a>
                  </li>
                 </ul>
                 <hr>
                <!--Title-->
                <h5 class="card-title">Redes Sociales</h5>
                <!--Text-->
                <ul class="card-text text-left list-unstyled">
                  <li class="mb-2" style="min-width: 210px;">
                  	<i class="fab fa-facebook text-primary pl-4 pr-4 d-inline"></i>
                  	Facebook
                  	<a href="https://www.facebook.com/Instituto-IDELP-109195094330675/" target="blank" >
                  	Instituto IDELP
                  	</a>
                  </li>
                  <li class="mb-2" style="min-width: 210px;">
                  	<i class="fab fa-instagram text-primary pl-4 pr-4 d-inline"></i>
                  	Instagram
                  	<a href="https://www.instagram.com/idelp.mza/?hl=es-la" target="blank" >
                  	idelp.mza
                  	</a>
                  </li>
                 </ul>
                 <hr>
                 <!--Title-->
                <h5 class="card-title">Correos</h5>
                <!--Text-->
                <ul class="card-text text-left list-unstyled">
                  <li class="mb-2" style="min-width: 210px;">
                  	<i class="fas fa-envelope text-primary pl-4 pr-4 d-inline"></i>
                  	Administración
                  	<a href="mailto:idelp-mza@gmail.com" target="blank" >
                  	idelp-mza@gmail.com
                  	</a>
                  </li>
                  <li class="mb-2" style="min-width: 210px;">
                  	<i class="fas fa-envelope text-primary pl-4 pr-4 d-inline"></i>
                  	Informacion
                  	<a href="mailto:info@idelp.com.ar" target="blank" >
                  	info@idelp.com.ar
                  	</a>
                  </li>
                 </ul>
            </div>
            <!-- card content -->
          </div>
          <!--/.Card-->
        </div>
        <!--Grid column-->
        </div>
      <!--Grid row-->
		</section>
		<!-- section ubicacion -->
		<!-- Section TAB -->
      <section class="mt-5 mx-2 pb-3" role="navigation">
        <ul class="nav nav-tabs nav-justified md-tabs" id="myTabJust" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="historia-tab-just" data-toggle="tab" href="#historia-just" role="tab" aria-controls="historia-just"
              aria-selected="true">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="mision-tab-just" data-toggle="tab" href="#mision-just" role="tab" aria-controls="mision-just"
              aria-selected="false">Misión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="valores-tab-just" data-toggle="tab" href="#valores-just" role="tab" aria-controls="valores-just"
              aria-selected="false">Valores</a>
          </li>
        </ul>
        <div class="tab-content card pt-5" id="myTabContentJust">
          <div class="tab-pane fade show active" id="historia-just" role="tabpanel" aria-labelledby="historia-tab-just">
            <p>IDELP nace a partir de celebrar un convenio con ATSA y el Instituto de la Sanidad, como respuesta a las
            actuales necesidades del mundo laboral en la forma de proyecto educativo y de perfeccionamiento profesional, con la carrera
            de Higiene y Seguridad, Medioambiente y Calidad y cursos regulares de actualización y perfeccionamiento.</p>

          </div>
          <div class="tab-pane fade" id="mision-just" role="tabpanel" aria-labelledby="mision-tab-just">
            <p>Dotar al estudiante de conocimiento para que logre insertarse de la mejor manera en el mundo profesional,
            a través de un acompañamiento constante.
            </p>
          </div>
          <div class="tab-pane fade" id="valores-just" role="tabpanel" aria-labelledby="valores-tab-just">
            <p>
            </p>
          </div>
        </div>

      </section>
      <!-- TAB -->
    </div>
  </main>
  <!--Main layout-->
@endsection
