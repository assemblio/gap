@extends('default')
@section('content')
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{URL::asset('http://fonts.googleapis.com/css?family=Cagliostro')}}" rel='stylesheet' type='text/css'>
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
    <script type='text/javascript' src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script type='text/javascript' src="{{URL::asset('js/jquery.mobile.customized.min.js')}}"></script>
    <script type='text/javascript' src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script> 
    <script type='text/javascript' src="{{URL::asset('js/camera.min.js')}}"></script> 
      <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: 'auto',
				loader: 'bar',
				pagination: false,
				thumbnails: true,
				hover: false,
				opacityOnGrid: false,
				imagePath: '../images/'
			});

		});
	</script>
</head>
<body>
<div class="fluid_container">
   <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
        <div data-src="images/slider1.jpg"> </div>
        <div data-src="images/slider1.jpg"> </div>
        <div data-src="images/slider1.jpg"> </div>
  </div>
</div>
<div class="clear"></div>
<div class="wrap">
<div class="wrapper">
<div class="main_text">
		<h2>GAP</h2>
		<h3>Instituti për Studime të Avancuara</h3>
	</div>	
	<div class="clear"></div>
	</div>
	</div>

</body>
</html>
@stop