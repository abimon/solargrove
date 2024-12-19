@extends('layouts.app',['title'=>'Home'])

@section('content')


   <!-- banner -->
   <div>
      <div id="myCarousel" class="carousel" data-ride="carousel" data-interval="30000">
         <ol class="carousel-indicators">
            @for($i=1;$i<=6;$i++)
               <li data-target="#myCarousel" data-slide-to="{{$i-1}}" class="{{($i-1)==0?'active':''}}">
               </li>
               @endfor
         </ol>
         <div class="carousel-inner">
            @for($i=1;$i<=6;$i++)
               <div class="carousel-item {{$i==1?'active':''}}">
               <div style="width:100vw;">
                  <div class="carousel-caption relative">
                     <video src="{{asset('storage/videos/video'.$i.'.mp4')}}" autoplay muted type="video/mp4" style="width:100vw;object-fit:scale-down;"></video>
                  </div>
               </div>
         </div>
         @endfor
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
         <i class="fa fa-angle-left" aria-hidden="true"></i>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
         <i class="fa fa-angle-right" aria-hidden="true"></i>
         <span class="sr-only">Next</span>
      </a>

   </div>
   <!-- end banner -->
   <div class="mt-5">
      
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Our <span class="green">Products</span></h2>
            </div>
            <div class="container text-center">
         <h4 style="font-weight:bold;">WHOLE PRODUCT LINE</h4>
         <p> Six product types，including domestic pump、submersible pump、solar pump、engineering pump、 deep well pump and circulating pump, solar panels, power generators, control panels, cables and borehole equipment more than 700 types and models of water pump.</p>
         <p>Product application covers household, agriculture, industry, HVAC and other fields, to become the top pump enterprise in Kenya with the most widely application fields.</p>
         <p>Products have 3 high lights：high cost performance、high-level appearance and high quality.</p>
      </div>
         </div>
      </div>
      <div class="row">
         <?php $items=['Inverters','Immersion Water Pumps','Solar Panels','Solar Pumps','Water Pumps','Single/Three Phase Generators','Single Phase Generators','Gasoline Generator']?>
         @foreach ($items as $i=>$item )
         <div class="col-md-3 col-sm-6 p-2 mb-2">
            <img src="{{asset('storage/images/products/'.($i+1).'.png')}}" style="width:100%;height:40vh;object-fit:scale-down;" alt="">
            <h3>{{$item}}</h3>
         </div>
         @endforeach
      </div>
   </div>
@endsection