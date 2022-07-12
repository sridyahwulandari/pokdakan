<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Pulau Biawak - {{ Auth::user()->name }}</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/img/icon.ico')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <style>
         body, html {
         height: 100%;
         margin: 0;
         }
         .bgimg {
         background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
         height: 100%;
         background-position: center;
         background-size: cover;
         position: relative;
         color: white;
         font-family: "Courier New", Courier, monospace;
         font-size: 25px;
         }
         .topleft {
         position: absolute;
         top: 0;
         left: 16px;
         }
         .middle {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         text-align: center;
         }
         p {
         margin-top: 20px;
         margin-left: 250px;
         margin-bottom: 1rem;
         }
         hr {
         margin: auto;
         width: 40%;
         }
      </style>

	<!-- Fonts and icons -->
	<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('assets/css/fonts.min.css') }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <style>
         a {
         color: #BE206B!important;
         }
         a.btn.btn-lg.btn-block,.btn-info {
         color: white !important;
         }
         .btn-secondary {
         background-color: #448BC6!important;
         color: #fff!important;
         }
         button.btn.btn.btn-secondary {
         width: 100%;
         }
         h3 {
         text-align: center;
         line-height: 200%;
         }
         .collpa
         .pt-0, .py-0 {
         padding-top: 0!important;
         }
      </style>
      <style type="text/css">
         .left    { text-align: left;}
         .right   { text-align: right;}
         .center  { text-align: center;}
         .justify { text-align: justify;}
      </style>
</head>