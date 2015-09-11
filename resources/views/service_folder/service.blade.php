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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script>
$(document).ready(function () {
    $(function () {
      $(".total").on("click", function(e){
        e.preventDefault();
        var two   = +$("#2").val(); 
        var three = +$("#3").val();
        var four  = +$("#4").val();
        var five  = +$("#5").val(); 
        var sum1 =  two + three + four;
        var tvsh = sum1*five;
        document.getElementById('6').value = tvsh  
        var sum =two + three + four + tvsh;
        document.getElementById('7').value = sum      
    })

  });
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
<div class="container">
 <form  method="post" class="form-horizontal">
<div class="form-group ">
    <label class="control-label col-xs-1"> Kubikazha: </label>
    <div class="col-xs-3">
    <input type="number" min="0" step="1" id="1" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> Vlera: </label>
    <div class="col-xs-3">
    <input type="number" min="0" step="1" id="2" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> Akciza: </label>
    <div class="col-xs-3">
    <input type="number" min="0" step="1" id="3" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> Dogana: </label>
    <div class="col-xs-3">
    <input type="number" min="0" step="1" id="4" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> TVSH: </label>
    <div class="col-xs-3">
    <input type="number" min="0" step="1" id="6" disabled="true" class="form-control col-xs-3" />
    <input type="hidden" name="value_of_tvsh" value="0.18" id="5"/>
</div>
</div>
<div class="form-group ">
<button class="btn btn-primary total" > Llogarit totalin</button>
</div>
<br />
<div class="form-group ">
    <label class="control-label col-xs-1"> Totali: </label>
    <div class="col-xs-3">
    <input type="number" id="7" disabled="true" class="form-control col-xs-3" />
</div>
</div>
 </form>
</div>
</div>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</body>
</html>