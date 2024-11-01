@extends('layouts.app',['title'=>'Services'])
@section('content')
<div class="">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Our <span class="green">Services</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <?php $titles=['Biodigesters','Water Supplies','Energy Storage','Water Pump Inverters','Solar Inverters','Solar Panels']
         ?>
         @for ($i=1;$i<=6;$i++)
         <div class="col-md-4 col-sm-6">
               <video src="{{asset('storage/videos/video'.$i.'.mp4')}}"  controls type="video/mp4" style="width:100%"></video>
               <h3>{{$titles[$i-1]}}</h3>
         </div>
         @endfor
      </div>
   </div>
</div>
@endsection