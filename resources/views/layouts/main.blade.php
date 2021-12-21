<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{$title}}</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-9G2RELR70S"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'G-9G2RELR70S');
	</script>
    <!-- favicon  -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <!-- my custom styles -->
    <link href="{{ asset('css/idelp.css') }}" rel="stylesheet">
    <style type="text/css">
      html,
      body,
      header,
      .carousel {
        height: 75vh;
      }

      @media (max-width: 740px) {

        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {

        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
          background: #3C66AA !important;
        }
      }

    </style>
    <!-- <script type="text/javascript">const tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/"); document.write(unescape("<script src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript' %3E%3C/script%3E"));</script> -->
</head>
<body>

<header>

    {{-- navegación --}}
    @include('layouts.navbar')
    {{-- fin navegación --}}
    {{-- encabezado de cada página --}}
    @yield('encabezado')
    {{-- fin encabezado de cada página --}}

</header>

<!--Main layout-->
<main>
    @yield('contenido')
</main>
<!--Main layout-->

{{-- Footer --}}
    @include('layouts.footer')
{{-- Fin Footer --}}

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<!-- Initializations -->
<script type="text/javascript">
// Animations initialization
new WOW().init();

</script>
</body>

</html>

