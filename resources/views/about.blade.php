@extends('layouts.app',['title'=>'About Us'])
@section('content')
<div class="">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>About <span class="green">Us</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4">
            <img src="{{asset('storage/images/logo.png')}}" alt="" style="object-fit:cover;">
         </div>
         <div class="col-md-8 p-3 mb-5">
         <p class="p-1">At <b>Solar Grove</b>, we are committed to empowering communities and businesses with sustainable, efficient, and reliable energy and water solutions. Specializing in the sale, installation, and maintenance of solar systems, water pumps, and a range of eco-friendly products, we blend innovation with practicality to meet the diverse needs of our clients.</p>
         <p class="p-1">Our mission is simple yet profound: to deliver high-quality renewable solutions that drive positive environmental impact while cutting energy costs and enhancing self-reliance. Backed by a team of experts and industry-leading technology, we focus on ensuring seamless installations and proactive maintenance that maximize the longevity and efficiency of every system we install.</p>
         <p class="p-1">Whether it's helping a family transition to clean energy, boosting the operational efficiency of a farm, or supporting a business in reducing its carbon footprint, <b>Solar Grove</b> is here to make sustainable living easy and accessible. Join us on a journey towards a greener future, where every watt saved and every drop conserved makes a world of difference.</p>
      </div>
      </div>
   </div>
</div>
@endsection