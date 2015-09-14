@extends('default')
@section('content')
<!DOCTYPE HTML>
<html>
<body>
<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">
<div class="our-staff">
		<div class="dc-grids">
				<div class="dc-head">
					<!-- <div class="dc-head-img">
						<a href=" "><img src="images/chart1.png" title="dc-name"></a>
					</div> -->
					<div class="grid_1_of_4 images_1_of_4 bg4 hide">
					 <img src="images/icon4.png">
				    </div>
					<div class="dc-head-info">
						<h2 class="style">Chart 1</h2>
						<span> test</span>
					</div>
					<div class="clear"> </div>
					<div class="dc-profile">
						<p class="para"> Regjistrimi i veturave ne baze te vitit te prodhimit.</h4>
					</p>
						<div class="button1">
							<a href="{{URL::route('visualization_chart_1_page')}}" class="btn btn_s">Shiko me shume</a>
						</div>
					</div>
				</div>
				<div class="dc-head">
					<div class="grid_1_of_4 images_1_of_4 bg4 hide">
					 <img src="images/icon4.png">
				    </div>
					<div class="dc-head-info">
						<h2 class="style">Chart 2</h2>
						<span>test</span>
					</div>
					<div class="clear"> </div>
					<div class="dc-profile">
						<p class="para"> Regjistrimi i veturave ne baze te komunave.</p>
						<div class="button1">
							<a href="{{URL::route('visualization_chart_2_page')}}" class="btn btn_s">Shiko me shume</a>
						</div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			
			<div class="dc-grids">
				<div class="dc-head">
					<div class="grid_1_of_4 images_1_of_4 bg4 hide">
					 <img src="images/icon4.png">
				    </div>
					<div class="dc-head-info">
						<h2 class="style">Chart III</h2>
						<span>.</span>
					</div>
					<div class="clear"> </div>
					<div class="dc-profile">
						<p class="para">...</p>
						<div class="button1">
							<a href="{{URL::route('visualization_chart_3_page')}}" class="btn btn_s">Shiko me shume</a>
						</div>
					</div>
				</div>
				<div class="dc-head">
					<div class="grid_1_of_4 images_1_of_4 bg4 hide">
					 <img src="images/icon4.png">
				    </div>
					<div class="dc-head-info">
						<h2 class="style"> Chart IV</h2>
						<span>  ....</span>
					</div>
					<div class="clear"> </div>
					<div class="dc-profile">
						<p class="para">..... </p>
						<div class="button1">
							<a href="{{URL::route('visualization_chart_4_page')}}" class="btn btn_s">Shiko me shume</a>
						</div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			
				<div class="dc-grids">
				<div class="dc-head">
					<div class="grid_1_of_4 images_1_of_4 bg4 hide">
					 <img src="images/icon4.png">
				    </div>
					<div class="dc-head-info">
						<h2 class="style">Chart III</h2>
						<span>.</span>
					</div>
					<div class="clear"> </div>
					<div class="dc-profile">
						<p class="para">...</p>
						<div class="button1">
							<a href="{{URL::route('visualization_chart_5_page')}}" class="btn btn_s">Shiko me shume</a>
						</div>
					</div>
				</div>
				<div class="dc-head">
					<div class="grid_1_of_4 images_1_of_4 bg4 hide">
					 <img src="images/icon4.png">
				    </div>
					<div class="dc-head-info">
						<h2 class="style"> Chart IV</h2>
						<span>  ....</span>
					</div>
					<div class="clear"> </div>
					<div class="dc-profile">
						<p class="para">..... </p>
						<div class="button1">
							<a href="{{URL::route('visualization_chart_6_page')}}" class="btn btn_s">Shiko me shume</a>
						</div>
					</div>
				<div class="clear"> </div>
				</div>
			    <div class="clear"> </div>
		    </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
@stop