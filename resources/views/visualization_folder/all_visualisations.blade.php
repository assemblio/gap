@extends('default')
@section('content')
<!DOCTYPE HTML>
<html>
<body>
<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">
		<div class="det-para">
		 @yield('content1')
		</div>
		<div class="clear"></div>
		<div class="det-para">
		 @yield('content2')
		</div>
		<div class="clear"></div>
		<div class="det-para">
		 @yield('content3')
		</div>
		<div class="clear"></div>
		<div class="det-para">
		 @yield('content4')
		</div>
		<div class="clear"></div>
		<div class="det-para">
		 @yield('content5')
		</div>
		<div class="clear"></div>
		<div class="det-para">
		 @yield('content6')
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>
@stop