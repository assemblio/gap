@extends('default')
@section('content')
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.lightbox.css')}}">
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.lightbox.js')}}"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script>
$(document).ready(function () {
    $(function () {
      document.getElementById('today_date').valueAsDate = new Date();
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

        var date1 = $('#today_date').val();
        var date2 = $('#choosen_date').val();
        var year = date1.getYear() - date2.getYear();
        console.log ( 'Hi');
        $('#difference_year').val(year);  
        var month = date1.getMonth() - date2.getMonth();
        $('#difference_month').val(month);      
    })
  });
});
</script>
</head>
<body>

<div class="main_bg">
<div class="wrap">
<div class="wrapper">
<div class="main">
<div class="container">
 <form  method="post" class="form-horizontal">
<div class="form-group ">
    <label class="control-label col-xs-1"> Kubikazha: </label>
    <div class="col-xs-3">
    <input type="number" value="0" min="0" step="1" id="1" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> Vlera: </label>
    <div class="col-xs-3">
    <input type="number" value="0" min="0" step="1" id="2" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> Akciza: </label>
    <div class="col-xs-3">
    <input type="number" value="0" value="0" min="0" step="1" id="3" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> Dogana: </label>
    <div class="col-xs-3">
    <input type="number" value="0" min="0" step="1" id="4" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> TVSH: </label>
    <div class="col-xs-3">
    <input type="number" min="0" step="1" id="6" disabled="true" class="form-control col-xs-3" />
    <input type="hidden" name="value_of_tvsh" value="0.18" id="5"/>
</div>
</div>
<div class="form-group">
<div class="col-xc-3">
<button class="btn btn_s total" > Llogarit totalin</button>
</div>
</div>
<br />
<div class="form-group ">
    <label class="control-label col-xs-1"> Totali: </label>
    <div class="col-xs-3">
    <input type="number" id="7" disabled="true" class="form-control col-xs-3" />
</div>
</div>

<br/> <br/>
<div class="form-group ">
    <label class="control-label col-xs-1"> Data sot : </label>
    <div class="col-xs-3">
    <input type="date" id="today_date" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> Data e prodhimit: </label>
    <div class="col-xs-3">
    <input type="date" id="choosen_date" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> Difernca e viteve: </label>
    <div class="col-xs-3">
    <input type="text" id="difference_year" disabled="true" class="form-control col-xs-3" />
</div>
</div>
<div class="form-group ">
    <label class="control-label col-xs-1"> Diferenca e muajve: </label>
    <div class="col-xs-3">
    <input type="text" id="difference_month" disabled="true" class="form-control col-xs-3" />
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</body>
</html>
@stop