@extends('layouts.app',['title'=>'Home'])

@section('content')

<div class="container-fluid">
   <!-- banner -->
   <section class="" style="margin-top:0px;">
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
               <div style="width:100vw;height:80vh;object-fit:fill;">
                  <div class="carousel-caption relative">
                     <video src="{{asset('storage/videos/video'.$i.'.mp4')}}" autoplay muted type="video/mp4"></video>
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

   </section>
   <!-- end banner -->
   <section class="mt-5">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Our <span class="green">Products</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         @for($i=1;$i<=5;$i++)
            <div class="col-md-3 col-sm-6 p-2 mb-2">
               <img src="{{asset('storage/images/products/'.$i.'.png')}}" style="width:100%;height:60vh;object-fit:scale-down" alt="">
            </div>
         @endfor
      </div>
   </section>
</div>
@endsection