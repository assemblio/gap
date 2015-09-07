<!DOCTYPE HTML>
<html>
<head>
<title>GAP Webpage</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{URL::asset('http://fonts.googleapis.com/css?family=Cagliostro')}}" rel='stylesheet' type='text/css'>
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--start lightbox -->
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.lightbox.css')}}">
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.lightbox.js')}}"></script>
<script>
  // Initiate Lightbox
  $(function() {
    $('.gallery a').lightbox(); 
  });
</script>
</head>
<body>
<div class="wrap">
<div class="wrapper">
<div class="logo">
	<a href="{{URL::route('index_page')}}"><h1>GAP</h1></a>
</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		  	<li><a class="active" href="{{URL::route('index_page')}}"><span>Ballina</span></a></li>
			<li ><a href="{{URL::route('about_page')}}"><span>Per ne</span></a></li>
			<li><a href="{{URL::route('visualization_page')}}"><span>Vizualizimet</span></a></li>
			<li class="has-sub"><a href="{{URL::route('services_page')}}"><span>Sherbimet</span></a></li>
			<li ><a href="{{URL::route('services_page')}}"><span>Kontakti</span></a></li>
			<div class="clear"></div>
		 </ul>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">
	<div class="ser-main">
		<h2 class="style">Our Services</h2>
		<div class="ser-para">
			<p class="para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like. </p>
		</div>
		<div class="ser-grid-list img_style">
			<div class="gallery">
				<a href="images/ser_pic1.jpg"><img src="images/ser_pic1.jpg" title="image-name"></a>
			</div>
			<h5>pellentesque at ultrices</h5>
			<p class="para">Qsi turpis, pellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat ut scelerisque et, placerat ut scelerisque ,Nunc easi diam risus, placerat ut scelerisque et, </p>
			<div class="button1">
				<a href="details.html" class="btn btn_s">view More</a>
			</div>
		</div>
		<div class="ser-grid-list img_style">
			<div class="gallery">
				<a href="images/ser_pic2.jpg"><img src="images/ser_pic2.jpg" title="image-name"></a>
			</div>
			<h5> Nunc easi diam risus</h5>
			<p class="para">Qsi turpis, pellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat ut scelerisque et,placerat ut scelerisque Nunc easi diam risus, placerat ut scelerisque et, </p>
			<div class="button1">
				<a href="details.html" class="btn btn_s">view More</a>
			</div>
		</div>
		<div class="ser-grid-list img_style">
			<div class="gallery">
				<a href="images/ser_pic3.jpg"><img src="images/ser_pic3.jpg" title="image-name"></a>
			</div>
				<h5>pellentesque at ultrices</h5>
			<p class="para">Qsi turpis, pellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat ut scelerisque etplacet scelerisque ,Nunc easi diam risus, placerat ut scelerisque et, </p>
			<div class="button1">
				<a href="details.html" class="btn btn_s">view More</a>
			</div>
		</div>
		<div class="ser-grid-list img_style">
			<div class="gallery">
				<a href="images/ser_pic4.jpg"><img src="images/ser_pic4.jpg" title="image-name"></a>
			</div>
			<h5> Nunc easi diam risus</h5>
			<p class="para">Qsi turpis, pellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat ut scelerisque etplacet scelerisque ,Nunc easi diam risus, placerat ut scelerisque et, </p>
			<div class="button1">
				<a href="details.html" class="btn btn_s">view More</a>
			</div>
		</div>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
<div class="wrap">
<div class="wrapper">
	<div class="footer">
		<div class="social-icons">
	   		  	<ul>
			      <li class="icon_1"><a href="#" target="_blank"> </a></li>
			      <li class="icon_2"><a href="#" target="_blank"> </a></li>
			      <li class="icon_3"><a href="#" target="_blank"> </a></li>
			      <li class="icon_4"><a href="#" target="_blank"> </a></li>
			      <div class="clear"></div>
		     </ul>
	   	 </div>
		<a href="{{URL::route('index_page')}}"><h2>GAP</h2></a>
		<div class="copy">
			<p class="w3-link">© <script>document.write(new Date().getFullYear())</script> </p>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
</body>
</html>