<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
	<title>Garage Burger</title>
	<link rel="stylesheet" type="text/css" href="/frontend/styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/frontend/styles/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/frontend/fonts/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="/frontend/styles/mystyle.css">
	<link rel="manifest" href="/frontend/_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
	<link rel="apple-touch-icon" sizes="180x180" href="/frontend/app/icons/icon-192x192.png">
</head>
<body class="theme-light">
	<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
	<div id="page">
        @yield('content')
    </div>
	<script type="text/javascript" src="/frontend/scripts/jquery.js"></script>
	<script type="text/javascript" src="/frontend/scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="/frontend/scripts/custom.js"></script>
</body>
