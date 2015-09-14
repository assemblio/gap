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
            <div data-src="images/slider2.jpg"> </div>
            <div  data-src="images/slider3.jpg"> </div>
  </div>
</div>
<div class="clear"></div>
<div class="wrap">
<div class="wrapper">
<div class="main_text">
		<h2>A place of light, of liberty, and learning</h2>
		<h3>we provide leading intensive courses</h3>
	</div>	
	<div class="grids_1_of_4">
				<div class="grid_1_of_4 images_1_of_4 bg1">
					 <img src="images/icon1.png">
				</div>
				<div class="grid_1_of_4 images_1_of_4 bg2">
					 <img src="images/icon2.png">
				</div>
				<div class="grid_1_of_4 images_1_of_4 bg3 hide">
					 <img src="images/icon3.png">
				</div>
				<div class="grid_1_of_4 images_1_of_4 bg4 hide">
					 <img src="images/icon4.png">
				</div>
			<div class="clear"></div>
			</div>
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Mauris at eratos</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<div class="text1-nav">
						<ul>
						<li><a href="">The standard chunk of</a></li>
							<li><a href="">Duis a augue euismod</a></li>
							<li><a href="">The standard of Lorem</a></li>
							<li><a href="">Duis a augue euismod</a></li>
					    </ul>
					</div>
					<div class="button">
						<a href="details.html">learn more</a>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>imperdiet dolor</h3>
					<p>Ut enim ad minim veniam,laboris commodo consequat.Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore nulla pariatur.</p>
					<div class="text1-nav">
						<ul>
						<li><a href="">The standard chunk of</a></li>
							<li><a href="">Duis a augue euismod</a></li>
							<li><a href="">The standard of Lorem</a></li>
							<li><a href="">Duis a augue euismod</a></li>
					    </ul>
					</div>
					<div class="button">
						<a href="details.html">learn more</a>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4 hide">
					<h3>Sed porta justjm</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<div class="text1-nav">
						<ul>
						<li><a href="">The standard chunk of</a></li>
							<li><a href="">Duis a augue euismod</a></li>
							<li><a href="">The standard of Lorem</a></li>
							<li><a href="">Duis a augue euismod</a></li>
					    </ul>
					</div>
					<div class="button">
						<a href="details.html">learn more</a>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4 hide">
					<h3>nisi vulputate</h3>
					<p>Ut enim ad minim veniam,laboris commodo consequat.Duis aute dolor in reprehenderit in voluptate velit esse cillum dolore nulla pariatur.</p>
					<div class="text1-nav">
						<ul>
						<li><a href="">The standard chunk of</a></li>
							<li><a href="details.html">Duis a augue euismod</a></li>
					    </ul>
					</div>
						<div class="button">
						<a href="details.html">learn more</a>
					</div>
				</div>
			<div class="clear"></div>
			</div>
	</div>
	</div>
<div class="main_bg">
<div class="wrap">
<div class="wrapper">
	<div class="main">
			<div class="grid_1_of_2 images_1_of_2">
				<h4> GAP <span>dummy text of the</span> ornare vulputate printing and typesetting There are many variations of passages of.</h4>
				<p class="para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. </p>
				<div class="button1">
					<a href="details.html" class="btn btn_s">shiko me shume</a>
				</div>
			</div>
			<div class="grid_1_of_2 images_1_of_2 img_style">
				<img src="images/pic1.jpg" alt="">
			</div>
			<div class="clear"></div>
	</div>
</div>
</div>
</div>
</body>
</html>
@stop