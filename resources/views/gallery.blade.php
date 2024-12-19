@extends('layouts.app',['title'=>'Gallery'])
@section('content')
<div class="">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Our <span class="green">Project Gallery</span></h2>
               <p>Part of what we do and have done.</p>
            </div>
         </div>
      </div>
      
      <div class="row">
         @for ($i=1;$i<=11;$i++)
         <div class="col-md-4 col-sm-6 h-100 mb-2">
            <img src="{{asset('storage/images/field/img'.$i.'.jpeg')}}" alt="" style="width:100%;height:70vh;object-fit:cover;">
         </div>
         @endfor
      </div>
   </div>
</div>
@endsection