<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template">
	<meta property="og:title" content="Dompet : Payment Admin Template">
	<meta property="og:description" content="Dompet : Payment Admin Template">
	<meta property="og:image" content="https://dompet.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>{{ (!empty($page_title))?$page_title:'' }}</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ URL::to('public/backend/images/favicon.png' ) }}">
    <link href="{{ URL::to('public/backend/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            @yield('authpanel')
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ URL::to('public/backend/vendor/global/global.min.js' ) }}"></script>
<script src="{{ URL::to('public/backend/js/custom.min.js' ) }}"></script>
<script src="{{ URL::to('public/backend/js/dlabnav-init.js' ) }}"></script>
<script src="{{ URL::to('public/backend/js/styleSwitcher.js' ) }}"></script>
</body>
</html>