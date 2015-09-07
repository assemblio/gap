<!DOCTYPE HTML>
<html>
<head>
<title> GAP Website </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{URL::asset('http://fonts.googleapis.com/css?family=Cagliostro')}}" rel='stylesheet' type='text/css'>
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
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
		<div class="det-para">
			<h4 class="top para"> Regjistrimi i veturave ne baze te komunes. </h4>
		<div class="det-para">
		<iframe class="highcharts-iframe" src="//cloud.highcharts.com/embed/esidyg" style="border: 0; width: 100%; height: 500px"></iframe>	
		</div>
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