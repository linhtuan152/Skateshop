<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from colorlib.com/polygon/sufee/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Feb 2019 09:22:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Skate Shop</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-icon.html">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="{{url('/')}}/public/admin/assets/css/normalize.css">
	<link rel="stylesheet" href="{{url('/')}}/public/admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/admin/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/admin/assets/css/themify-icons.css">
	<link rel="stylesheet" href="{{url('/')}}/public/admin/assets/css/flag-icon.min.css">
	<link rel="stylesheet" href="{{url('/')}}/public/admin/assets/css/cs-skin-elastic.css">

	<link rel="stylesheet" href="{{url('/')}}/public/admin/assets/scss/style.css">
	<link href="{{url('/')}}/public/admin/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
	<link href='https:/fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{url('/')}}/public/admin/assets/css/style.css">

</head>
<body>

	<aside id="left-panel" class="left-panel">
		<nav class="navbar navbar-expand-sm navbar-default">

			<div class="navbar-header">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="">Skateshop</a>
				<a class="navbar-brand hidden" href="./"><img src="{{url('/')}}/public/admin/images/Logo.png" alt="Logo"></a>
			</div>

			<div id="main-menu" class="main-menu collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="{{route('admin-home')}}"> <i class="menu-icon fa fa-wrench"></i>Quản lý Website </a>
					</li>

					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list-ul"></i>Danh mục</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-plus"></i><a href="{{route('add-cat')}}">Thêm mới</a></li>
							<li><i class="fa fa-bars"></i><a href="{{route('list-cat')}}">Danh sách</a></li>

						</ul>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list-ul"></i>Sản phẩm</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-plus"></i><a href="{{route('add-pro')}}">Thêm mới</a></li>
							<li><i class="fa fa-bars"></i><a href="{{route('list-pro')}}">Danh sách</a></li>

						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</aside>


	<div id="right-panel" class="right-panel">

		<header id="header" class="header">
			<div class="header-menu">
				<div class="col-sm-7">
					<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
				</div>
			</div>
		</header>
		
		@yield('content')
	</div>


	
	<script src="{{url('/')}}/public/admin/assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script src="{{url('/')}}/public/admin/assets/js/popper.min.js"></script>
	<script src="{{url('/')}}/public/admin/assets/js/plugins.js"></script>
	<script src="{{url('/')}}/public/admin/assets/js/main.js"></script>
	<script src="{{url('/')}}/public/admin/assets/js/lib/chart-js/Chart.bundle.js"></script>
	<script src="{{url('/')}}/public/admin/assets/js/dashboard.js"></script>
	<script src="{{url('/')}}/public/admin/assets/js/widgets.js"></script>
	<script src="{{url('/')}}/public/admin/assets/js/lib/vector-map/jquery.vmap.js"></script>
	<script src="{{url('/')}}/public/admin/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
	<script src="{{url('/')}}/public/admin/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
	<script src="{{url('/')}}/public/admin/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
	<script>
		( function ( $ ) {
			"use strict";

			jQuery( '#vmap' ).vectorMap( {
				map: 'world_en',
				backgroundColor: null,
				color: '#ffffff',
				hoverOpacity: 0.7,
				selectedColor: '#1de9b6',
				enableZoom: true,
				showTooltip: true,
				values: sample_data,
				scaleColors: [ '#1de9b6', '#03a9f5' ],
				normalizeFunction: 'polynomial'
			} );
		} )( jQuery );
	</script>

	<script async src="https:/www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
</body>

<!-- Mirrored from colorlib.com/polygon/sufee/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Feb 2019 09:22:07 GMT -->
</html>
